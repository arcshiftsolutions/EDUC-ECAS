<?php
/**
 * Created by PhpStorm.
 * User: dirk
 * Date: 2019-04-18
 * Time: 2:50 PM
 */

namespace App\MockEntities\Repository;


use App\Interfaces\iModelRepository;

class School extends DynamicsRepository implements iModelRepository
{

    public function __construct(\App\MockEntities\School $model)
    {
        $this->model = $model;

    }


    public function all()
    {
        $collection = $this->model->all();
        return $collection->sortBy('name')->values();
    }

}