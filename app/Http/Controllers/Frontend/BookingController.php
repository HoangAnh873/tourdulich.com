<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use App\Services\Interfaces\BookingServiceInterface as BookingService;
// use App\Repositories\Interfaces\BookingRepositoryInterface as BookingRepository;

use App\Http\Requests\StoreBookingRequest;

use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // protected $bookingService;
    // protected $bookingRepository;
 
    public function __construct(
        // BookingService $bookingService,
        // BookingRepository $bookingRepository,
    ){
    //    $this->bookingService = $bookingService;
    //    $this->bookingRepository = $bookingRepository;
    }

    public function index(){
        $config = $this->config();
        $config['seo'] = config('apps.booking');
        return view('frontend.booking.booking', compact(
            'config',
        ));
    }

    public function order(Request $request){

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
