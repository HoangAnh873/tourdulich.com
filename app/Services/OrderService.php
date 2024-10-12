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

    public function create($request, $tour_id, $id_customer){
        DB::beginTransaction();
        try{
            $payload = $request->except(['_token','send','name','start_date','end_date','tour_name']);
            $payload['tour_id'] = $tour_id;
            $payload['id_customer'] = $id_customer;
            $payload['order_date'] = date('Y-m-d');
            // dd($payload);
            $order = $this->orderRepository->create($payload);
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage(); die();
            return false;
        }
    }

    public function destroy($id){
        DB::beginTransaction();
        try{
            $order = $this->orderRepository->delete($id);
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage(); die();
            return false;
        }
    }

    private function paginateSelect(){
        return [
            'id',
            'id_customer',
            'tour_id',
            'order_date',
            'quantity',
        ];
    }

}
