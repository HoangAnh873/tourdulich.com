<?php

namespace App\Services;

use App\Services\Interfaces\BillServiceInterface;
use App\Repositories\Interfaces\BillRepositoryInterface as BillRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

use App\Models\Customer;
use App\Models\Tour;

/**
 * Class BillService
 * @package App\Services
 */

class BillService implements BillServiceInterface
{
    protected $billRepository;


    public function __construct(
        BillRepository $billRepository
    ){
        $this->billRepository = $billRepository;
    }

    public function paginate($request){
        $condition['keyword'] = addslashes($request->input('keyword'));
        $perPage = $request->integer('perpage');
        $bills = $this->billRepository->pagination(
            $this->paginateSelect(), $condition,
            [], ['path' => 'bill/index'], $perPage );
        return $bills;
    }

    public function create( $tour_id, $id_customer, $price){
        DB::beginTransaction();
        try{
            $payload['customer_name'] = Customer::find($id_customer)->name;
            $payload['email'] = Customer::find($id_customer)->email;
            $payload['tour_name'] = Tour::find($tour_id)->name;
            $payload['price'] = $price;
            $payload['invoice_date'] = date('Y-m-d');
            $bill = $this->billRepository->create($payload);
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage(); die();
            return false;
        }
    }

    public function updateStatus($post = []){
        DB::beginTransaction();
        try{
            $payload[$post['field']] = (($post['value'] == 1)?2:1);
            $bill = $this->billRepository->update($post['modelId'], $payload);
            
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    private function paginateSelect(){
        return [
            'id',
            'customer_name',
            'email',
            'tour_name',
            'price',
            'invoice_date',
            'publish'
        ];
    }

}
