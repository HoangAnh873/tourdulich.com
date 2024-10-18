<?php

namespace App\Services;

use App\Services\Interfaces\CustomerServiceInterface;
use App\Repositories\Interfaces\CustomerRepositoryInterface as CustomerRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

/**
 * Class CustomerService
 * @package App\Services
 */

class CustomerService implements CustomerServiceInterface
{
    protected $customerRepository;


    public function __construct(
        CustomerRepository $customerRepository
    ){
        $this->customerRepository = $customerRepository;
    }

    public function paginate($request){
        $condition['keyword'] = addslashes($request->input('keyword'));
        $perPage = $request->integer('perpage');
        $customers = $this->customerRepository->pagination(
            $this->paginateSelect(), $condition,
            [], ['path' => '/'], $perPage );
        return $customers;
    }

    public function create($request){
        DB::beginTransaction();
        try{

            $payload = $request->except(['re_password']);
            $payload['password'] = Hash::make($payload['password']);
            $customer = $this->customerRepository->create($payload);
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
            'name',
            'email',
            'phone',
            'sex',
        ];
    }

}
