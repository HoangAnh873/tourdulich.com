<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
class HomeController extends FrontendController
{
    public function __construct(){
    }

    public function index(){
        $config = $this->config();
        return view('frontend.homepage.home.index', compact(
            'config',
        ));
    }

    public function sapa(){
        $config = $this->config();
        return view('frontend.homepage.home.location.sapa', compact(
            'config',
        ));
    }

    public function dalat(){
        $config = $this->config();
        return view('frontend.homepage.home.location.dalat', compact(
            'config',
        ));
    }

    public function vungtau(){
        $config = $this->config();
        return view('frontend.homepage.home.location.vungtau', compact(
            'config',
        ));
    }

    public function cantho(){
        $config = $this->config();
        return view('frontend.homepage.home.location.cantho', compact(
            'config',
        ));
    }

    private function config(){
        return [];
    }

    
}
