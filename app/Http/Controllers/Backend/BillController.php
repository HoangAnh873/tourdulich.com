<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Interfaces\BillServiceInterface as BillService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;
use App\Repositories\Interfaces\BillRepositoryInterface as BillRepository;
class BillController extends Controller
{
    protected $billService;
    protected $provinceRepository;
    protected $billRepository;
 
    public function __construct(
        BillService $billService,
        ProvinceRepository $provinceRepository,
        BillRepository $billRepository,
    ){
       $this->billService = $billService;
       $this->provinceRepository = $provinceRepository;
       $this->billRepository = $billRepository;
    }

    public function index(Request $request){

        $bills = $this->billService->paginate($request);
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
        $config['seo'] = config('apps.bill');
        $template = 'backend.bill.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'bills'
        ));
    }

}
