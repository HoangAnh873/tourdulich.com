<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Repositories\BaseRepository;

/**
 * Class CustomerService
 * @package App\Services
 */
class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    protected $model;

    public function __construct(
        Customer $model
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
                $query->where('name', 'LIKE', '%'.$condition['keyword'].'%')
                      ->orWhere('email', 'LIKE', '%'.$condition['keyword'].'%') 
                      ->orWhere('phone', 'LIKE', '%'.$condition['keyword'].'%');
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

}
