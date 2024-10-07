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
        $order = $this->orderRepository->findById($id);
        $customerName = $order->customers->name;
        $price = $order->tours->price;
        // $customerEmail = $order->customers->email; 
        // dd($price);
        Mail::send('backend.email.order_successful', compact('customerName', 'price'), function ($email) use ($customerName) {
            $email->subject('ĐẶT TOUR THÀNH CÔNG');
            $email->to('hoanganhh080703@gmail.com', $customerName);
        });
        $this->orderService->destroy($id);
        return redirect()->route('order.index')->with('success','Duyệt đơn 
        đặt tour thành công');
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
            $order = $this->orderRepository->findById($id);
            $customerName = $order->customers->name;
            // $customerEmail = $order->customers->email; 
            // dd($price);
            Mail::send('backend.email.order_failed', compact('customerName'), function ($email) use ($customerName) {
                $email->subject('ĐẶT TOUR THẤT BẠI');
                $email->to('hoanganhh080703@gmail.com', $customerName);
            });
            return redirect()->route('order.index')->with('success','Hủy đơn 
            đặt tour thành công');
        }
        return redirect()->route('order.index')->with('error','Hủy đơn 
        đặt tour không thành công');
    }

}
