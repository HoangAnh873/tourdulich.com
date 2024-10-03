<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;

use App\Services\Interfaces\CustomerServiceInterface as CustomerService;
use App\Repositories\Interfaces\CustomerRepositoryInterface as CustomerRepository;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    protected $customerService;
    protected $customerRepository;
 
    public function __construct(
        CustomerService $customerService,
        CustomerRepository $customerRepository,
    ){
       $this->customerService = $customerService;
       $this->customerRepository = $customerRepository;
    }

    public function indexLogin(){
        $config = $this->config();
        $config['seo'] = config('apps.customer');
        return view('frontend.login.UILogin', compact(
            'config',
        ));
    }

    public function indexRegister(){
        $config = $this->config();
        $config['seo'] = config('apps.customer');
        return view('frontend.login.register', compact(
            'config',
        ));
    }


    public function register(StoreCustomerRequest $request){
        if($this->customerService->create($request)){
            return redirect()->route('login.index')->with('success','Đăng Ký tài khoản 
            thành công');
        }
        return redirect()->route('customer.index')->with('error','Đăng Ký tài khoản 
        không thành công');
    }

    

    // public function login(StoreCustomerRequest $request){
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)){
    //         return redirect()->route('home.index')->with('success','Đăng
    //         nhập thành công');
    //     }
    //     return redirect()->route('login.index')->with('error','Email hoặc Mật
    //     khẩu không chính xác');
    // }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('customer')->attempt($credentials)) {
            return redirect()->intended(route('home.index'))->with('success', 'Đăng nhập thành công');
        }

        return back()->with('error','Email hoặc Mật khẩu không chính xác');
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
