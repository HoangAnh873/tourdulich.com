<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use App\Services\Interfaces\BookingServiceInterface as BookingService;
// use App\Repositories\Interfaces\BookingRepositoryInterface as BookingRepository;

use App\Http\Requests\StoreBookingRequest;

use Illuminate\Support\Facades\Auth;

use App\Models\Tour;
use App\Models\Customer;

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

    public function index(Request $request){
        // $tourId = $request->query('tour');
        // $tour = Tour::find($tourId);
        // $customerId =  $request->query('customer');
        // $customer = Customer::find($customerId);
        // dd($customer);
        $tours = Tour::all();
        $config = $this->config();
        return view('frontend.booking.booking', compact(
            'config',
            'tours',
            // 'tour',
            // 'customer',
        ));
    }

    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        return response()->json($tour);
    }

    public function order(Request $request){
        $tourId = $request->query('tour');
        $tour = Tour::find($tourId);
        $customerId =  $request->query('customer');
        $customer = Customer::find($customerId);
        $config = $this->config();
        $config['seo'] = config('apps.booking');
        return view('frontend.booking.order', compact(
            'config',
            'tour',
            'customer',
        ));
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
