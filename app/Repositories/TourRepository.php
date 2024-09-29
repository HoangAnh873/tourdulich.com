<?php

namespace App\Repositories;

use App\Models\Tour;
use App\Repositories\Interfaces\TourRepositoryInterface;
use App\Repositories\BaseRepository;

/**
 * Class TourService
 * @package App\Services
 */
class TourRepository extends BaseRepository implements TourRepositoryInterface
{
    protected $model;

    public function __construct(
        Tour $model
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

}
