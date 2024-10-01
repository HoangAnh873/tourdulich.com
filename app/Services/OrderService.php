<?php

namespace App\Services;

use App\Services\Interfaces\OrderServiceInterface;
use App\Repositories\Interfaces\OrderRepositoryInterface as OrderRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

/**
 * Class OrderService
 * @package App\Services
 */

class OrderService implements OrderServiceInterface
{
    protected $orderRepository;


    public function __construct(
        OrderRepository $orderRepository
    ){
        $this->orderRepository = $orderRepository;
    }

    public function paginate($request){
        $condition['keyword'] = addslashes($request->input('keyword'));
        $perPage = $request->integer('perpage');
        $orders = $this->orderRepository->pagination(
            $this->paginateSelect(), $condition,
            [], ['path' => 'order/index'], $perPage );
        return $orders;
    }

    private function paginateSelect(){
        return [
            'id',
            'customer_name',
            'email',
            'tour_name',
            'order_date',
            'start_date',
            'end_date',
        ];
    }

}
