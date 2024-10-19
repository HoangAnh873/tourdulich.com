<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\BillServiceInterface as BillService;
use App\Services\Interfaces\OrderServiceInterface as OrderService;
class DashboardController extends Controller
{
    protected $billService;
    protected $orderService;
    protected $customerService;
    public function __construct(
        BillService $billService,
        OrderService $orderService,
    ){
        $this->billService = $billService;
        $this->orderService = $orderService;
    }

    public function index(){

        $billStatistic = $this->billService->billStatistic();
        $orderStatistic = $this->orderService->orderStatistic();
        // dd($billStatistic);

        $config = $this->config();
        $template = 'backend.dashboard.home.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'billStatistic',
            'orderStatistic',
        ));
    }

    private function config(){
        return [
            'js' => [
                'backend/js/plugins/flot/jquery.flot.js',
                'backend/js/plugins/flot/jquery.flot.tooltip.min.js',
                'backend/js/plugins/flot/jquery.flot.spline.js',
                'backend/js/plugins/flot/jquery.flot.resize.js',
                'backend/js/plugins/flot/jquery.flot.pie.js',
                'backend/js/plugins/flot/jquery.flot.symbol.js',
                'backend/js/plugins/flot/jquery.flot.time.js',
                'backend/js/plugins/peity/jquery.peity.min.js',
                'backend/js/inspinia.js',
                'backend/js/plugins/chartJs/Chart.min.js',
            ]
        ];
    }

}
