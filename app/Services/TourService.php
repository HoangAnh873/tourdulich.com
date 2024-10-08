<?php

namespace App\Services;

use App\Services\Interfaces\TourServiceInterface;
use App\Repositories\Interfaces\TourRepositoryInterface as TourRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

/**
 * Class TourService
 * @package App\Services
 */

class TourService implements TourServiceInterface
{
    protected $tourRepository;


    public function __construct(
        TourRepository $tourRepository
    ){
        $this->tourRepository = $tourRepository;
    }

    public function paginate($request){
        $condition['keyword'] = addslashes($request->input('keyword'));
        $condition['publish'] = $request->integer('publish'); 
        $perPage = $request->integer('perpage');
        $tours = $this->tourRepository->pagination(
            $this->paginateSelect(), $condition,
            [], ['path' => 'tour/index'], $perPage );
        return $tours;
    }

    public function create($request){
        DB::beginTransaction();
        try{

            $payload = $request->except(['_token','send']);
            $tour = $this->tourRepository->create($payload);
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage(); die();
            return false;
        }
    }

    public function update($id, $request){
        DB::beginTransaction();
        try{

            $payload = $request->except(['_token','send']);
            $tour = $this->tourRepository->update($id, $payload);
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
            $tour = $this->tourRepository->delete($id);
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
            $tour = $this->tourRepository->update($post['modelId'], $payload);
            
            DB::commit();
            return true;
        }catch(\Exception $e ){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage();die();
            return false;
        }
    }

    public function updateStatusAll($post){
        DB::beginTransaction();
        try{
            $payload[$post['field']] = $post['value'];
            $flag = $this->tourRepository->updateByWhereIn('id', $post['id'], $payload);

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
            'name',
            'description',
            'start_date',
            'end_date',
            'price',
            'img',
            'publish',

        ];
    }

}
