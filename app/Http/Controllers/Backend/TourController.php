<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Interfaces\TourServiceInterface as TourService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;
use App\Repositories\Interfaces\TourRepositoryInterface as TourRepository;

use App\Http\Requests\StoreTourRequest;
use App\Http\Requests\UpdateTourRequest;

class TourController extends Controller
{
    protected $tourService;
    protected $provinceRepository;
    protected $tourRepository;
 
    public function __construct(
        TourService $tourService,
        ProvinceRepository $provinceRepository,
        TourRepository $tourRepository,
    ){
       $this->tourService = $tourService;
       $this->provinceRepository = $provinceRepository;
       $this->tourRepository = $tourRepository;
    }

    public function index(Request $request){

        $tours = $this->tourService->paginate($request);
        

        $config = [
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ]
        ];
        $config['seo'] = config('apps.tour');
        $template = 'backend.tour.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'tours'
        ));
    }

    public function create(){
        $provinces = $this->provinceRepository->all();
        $config = $this->config();
        $config['seo'] = config('apps.tour');
        $config['method'] = 'create';
        $template = 'backend.tour.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'provinces',
        ));
    }
    public function store(StoreTourRequest $request){
        if($this->tourService->create($request)){
            return redirect()->route('tour.index')->with('success','Thêm mới bản ghi 
            thành công');
        }
        return redirect()->route('tour.index')->with('error','Thêm mới bản ghi 
        không thành công');
    }

    public function edit($id){
        $tour = $this->tourRepository->findById($id);
        $provinces = $this->provinceRepository->all();
        $config = $this->config();
        $config['seo'] = config('apps.tour');
        $config['method'] = 'edit';
        $template = 'backend.tour.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'provinces',
            'tour'
        ));
    }

    public function update($id, UpdateTourRequest $request){
        if($this->tourService->update($id, $request)){
            return redirect()->route('tour.index')->with('success','Cập nhật bản ghi 
            thành công');
        }
        return redirect()->route('tour.index')->with('error','Cập nhật bản ghi 
        không thành công');
    }

    public function delete($id){

        $config['seo'] = config('apps.tour');
        $tour = $this->tourRepository->findById($id);
        $template = 'backend.tour.delete';
        return view('backend.dashboard.layout', compact(
            'template',
            'tour',
            'config',
        ));
    }

    public function destroy($id){
        if($this->tourService->destroy($id)){
            return redirect()->route('tour.index')->with('success','Xóa bản ghi 
            thành công');
        }
        return redirect()->route('tour.index')->with('error','Xóa bản ghi 
        không thành công');
    }

    private function config(){
        return [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                'backend/library/location.js',
            ]
        ];

    }

}
