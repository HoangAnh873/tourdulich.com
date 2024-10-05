<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Interfaces\OrderServiceInterface as OrderService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;
use App\Repositories\Interfaces\OrderRepositoryInterface as OrderRepository;
use Mail;

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

    public function accept($id){
        $name = 'Đặng Hoàng Anh';
        Mail::send('backend.email.test', compact('name'), function($email) use($name){
            $email->subject('Demo TripGood');
            $email->to('hoanganhh080703@gmail.com', $name);
        });
    }

    public function delete($id){

        $config['seo'] = config('apps.order');
        $order = $this->orderRepository->findById($id);
        $template = 'backend.order.delete';
        return view('backend.dashboard.layout', compact(
            'template',
            'order',
            'config',
        ));
    }

    public function destroy($id){
        if($this->orderService->destroy($id)){
            return redirect()->route('order.index')->with('success','Hủy đơn 
            đặt tour thành công');
        }
        return redirect()->route('order.index')->with('error','Hủy đơn 
        đặt tour không thành công');
    }

}
