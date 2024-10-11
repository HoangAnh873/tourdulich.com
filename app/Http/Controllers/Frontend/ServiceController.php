<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;

use App\Repositories\Interfaces\TourRepositoryInterface as TourRepository;

use App\Http\Requests\StoreServiceRequest;

use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    protected $tourRepository;
    public function __construct(
        TourRepository $tourRepository,
    ){
        $this->tourRepository = $tourRepository;
    }


    public function index(Request $request){
        $tours = Tour::all(); 
        $config = $this->config();
        $config['seo'] = config('apps.service');
        return view('frontend.service.service', compact(
            'config',
            'tours',
        ));
    }

    public function order($id){
        $tour = $this->tourRepository->findById($id);
        $customer = Auth::guard('customer')->user();
        if ($customer) {
            return redirect()->route('booking.order', [
                'tour' => $tour,
                'customer' => $customer,
            ]);
        }
    
        return back()->with('error', 'Bạn phải đăng nhập tài khoản');
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
