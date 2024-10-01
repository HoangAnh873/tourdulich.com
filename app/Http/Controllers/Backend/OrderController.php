<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Interfaces\OrderServiceInterface as OrderService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;
use App\Repositories\Interfaces\OrderRepositoryInterface as OrderRepository;
class OrderController extends Controller
{
    protected $orderService;
    protected $provinceRepository;
    protected $orderRepository;
 
    public function __construct(
        OrderService $orderService,
        ProvinceRepository $provinceRepository,
        OrderRepository $orderRepository,
    ){
       $this->orderService = $orderService;
       $this->provinceRepository = $provinceRepository;
       $this->orderRepository = $orderRepository;
    }

    public function index(Request $request){

        $orders = $this->orderService->paginate($request);
        $config['seo'] = config('apps.order');
        $template = 'backend.order.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'orders'
        ));
    }

}
