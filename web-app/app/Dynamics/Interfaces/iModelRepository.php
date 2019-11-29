<?php


namespace App\Dynamics\Interfaces;


interface iModelRepository
{

    public function all();

    public function get($id);

    public function filter(array $filter);

    public function filterContains(array $filter);

    public function create($data);

    public function firstOrCreate($id, $data);

    public function update($id, $data);

    public function delete($id);

}