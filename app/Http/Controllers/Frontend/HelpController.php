<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use App\Services\Interfaces\ServiceServiceInterface as ServiceService;
// use App\Repositories\Interfaces\ServiceRepositoryInterface as ServiceRepository;

use App\Http\Requests\StoreHelpRequest;

use Illuminate\Support\Facades\Auth;

class HelpController extends Controller
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
        $config['seo'] = config('apps.help');
        return view('frontend.help.help', compact(
            'config',
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
