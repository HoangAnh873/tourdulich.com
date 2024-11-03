<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Helpers\BillHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;

use App\Repositories\Interfaces\TourRepositoryInterface as TourRepository;

use App\Http\Requests\StoreServiceRequest;

use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    protected $tourRepository;
    public function __construct(
        TourRepository $tourRepository,
    ){
        $this->tourRepository = $tourRepository;
    }


    public function index(Request $request){
        $tours = Tour::all(); 
        foreach ($tours as &$tour) {
            // Chuyển đổi kiểu dữ liệu của các thuộc tính
            $tour->price = BillHelper::format_money($tour->price); // Chuyển giá thành số nguyên

             // Chuyển đổi định dạng ngày tháng năm
            $tour->start_date = Carbon::parse($tour->start_date);
            $tour->start_date =  $tour->start_date->format('d-m-Y');
        }
        $config = $this->config();
        $config['seo'] = config('apps.service');
        return view('frontend.service.service', compact(
            'config',
            'tours',
        ));
    }

    public function order($id){
        $tour = $this->tourRepository->findById($id);
        $customer = Auth::guard('customer')->user();
        if ($customer) {
            return redirect()->route('booking.order', [
                'tour' => $tour,
                'customer' => $customer,
            ]);
        }
    
        return back()->with('error', 'Bạn phải đăng nhập tài khoản');
    }

    public function search(Request $request)
    {
        $location = $request->input('location');

        // Sử dụng Eloquent để tìm kiếm tour theo tên địa điểm
        $tours = Tour::where('name', 'LIKE', '%' . $location . '%')->get();

        // Kiểm tra nếu không tìm thấy tour nào
        if ($tours->isEmpty()) {
            // Chuyển hướng về trang tìm kiếm và kèm theo thông báo lỗi
            return redirect()->back()->with('error', 'Không tìm thấy tour nào phù hợp 
            với địa điểm bạn tìm kiếm. Vui lòng nhập địa điểm khác.');
        }

        return view('frontend.service.service', compact('tours'));
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
