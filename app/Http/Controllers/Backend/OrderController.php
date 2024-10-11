<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Interfaces\OrderServiceInterface as OrderService;
use App\Repositories\Interfaces\OrderRepositoryInterface as OrderRepository;
use Mail;

class OrderController extends Controller
{
    protected $orderService;
    protected $orderRepository;
 
    public function __construct(
        OrderService $orderService,
        OrderRepository $orderRepository,
    ){
       $this->orderService = $orderService;
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

    public function store(Request $request, $tour_id, $id_customer){

        $quantity = $request->quantity;
        
        if( $quantity == NULL)
        {
            return redirect()->back()->with('error','Bạn chưa nhập đủ thông tin!');
        }
        if( $quantity <= 0 )
        {
            return redirect()->back()->with('error','Vui lòng nhập số lượng lớn hơn 0!');
        }
        if( $quantity > 99 )
        {
            return redirect()->back()->with('error','Vui lòng nhập số lượng nhỏ hơn 100!');
        }
        if($this->orderService->create($request, $tour_id, $id_customer)){
            return redirect()->route('home.index')->with('success','Đơn đặt tour của bạn đã 
            được gửi đi vui lòng chờ phản hồi');
        }
        return redirect()->route('home.service')->with('error','Đơn đặt tour của bạn đã 
        không được gửi đi, vui lòng xem lại!');
    }

    public function accept($id){
        
        $order = $this->orderRepository->findById($id);
        $customerName = $order->customers->name;
        $price = $order->tours->price * $order->quantity;
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

            $order = $this->orderRepository->findById($id);
            $customerName = $order->customers->name;
            // $customerEmail = $order->customers->email; 
            // dd($customerEmail);
            Mail::send('backend.email.order_failed', compact('customerName'), function ($email) use ($customerName) {
                $email->subject('ĐẶT TOUR THẤT BẠI');
                $email->to('hoanganhh080703@gmail.com', $customerName);
            });
            $this->orderService->destroy($id);
            return redirect()->route('order.index')->with('success','Hủy đơn 
            đặt tour thành công');
    }

}
