<?php

namespace App\Repositories;

use App\Models\Bill;
use Illuminate\Support\Facades\DB;
use App\Repositories\Interfaces\BillRepositoryInterface;
use App\Repositories\BaseRepository;

/**
 * Class BillService
 * @package App\Services
 */
class BillRepository extends BaseRepository implements BillRepositoryInterface
{
    protected $model;

    public function __construct(
        Bill $model
    ){
        $this->model = $model;
    }

    public function pagination(
        array $column = ['*'],
        array $condition = [],
        array $join = [],
        array $extend = [],
        int $perPage = 1
        ){
        $query = $this->model->select($column)->where(function($query) use ($condition){
            if(isset($condition['keyword']) && !empty($condition['keyword'])){
                $query->where('customer_name', 'LIKE', '%'.$condition['keyword'].'%')
                      ->orWhere('email', 'LIKE', '%'.$condition['keyword'].'%') 
                      ->orWhere('tour_name', 'LIKE', '%'.$condition['keyword'].'%');
            }
            if(isset($condition['publish']) && $condition['publish'] != 0){
                $query->where('publish', '=', $condition['publish']);
            }
            return $query;
        });
        if(!empty($join)){
            $query->join(...$join);
        }

        return $query->paginate($perPage)
                    ->withQueryString()
                    ->withPath(env('APP_URL').$extend['path']);
    } 

    public function getBillByTime($month, $year){
        return $this->model
        ->whereMonth('invoice_date', $month)
        ->whereYear('invoice_date', $year)
        ->count();
    } 

    public function revenueBills(){
        return $this->model
        ->where('publish', 2)
        ->sum('price');
    }

    public function customerQuantity(){
        return $this->model->distinct('email')->count();
    }

    public function chartMonth()
    {
        $bills = Bill::select(
            DB::raw('MONTH(invoice_date) as month'))
            ->groupBy('month')->get();     
        $labels = [];
        foreach ($bills as $bill) {
            $labels[] = 'Tháng ' . $bill->month;
        }

        return $labels;
    }
    public function chartValue()
    {
        $bills = Bill::select(
            DB::raw('MONTH(invoice_date) as month'), 
                     DB::raw('COUNT(*) as total'))->groupBy('month')->get();     
        $data = [];
        foreach ($bills as $bill) {
            $data[] = $bill->total;
        }

        return $data;
    }

}
