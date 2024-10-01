<?php

namespace App\Services;

use App\Services\Interfaces\BillServiceInterface;
use App\Repositories\Interfaces\BillRepositoryInterface as BillRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

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

    private function paginateSelect(){
        return [
            'id',
            'customer_name',
            'email',
            'tour_name',
            'price',
            'invoice_date',
        ];
    }

}
