<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Driver extends Model
{
    use HasFactory;

    protected $table = 'driver_loc';
    protected $primaryKey = 'id_driver';
    protected $fillable = [
    ];

    public function getDataDriver()
    {
        return $this->get();
    }

    public function getDataDriverById($id_driver)
    {
        return $this->where('id_driver', $id_driver)->first();
    }

    public function insertDataDriver($data)
    {
        return $this->insert($data);
    }

    public function updateDataDriver($id_driver, $data)
    {
        return $this->where('id_driver', $id_driver)->update($data);
    }

    public function deleteDataDriver($id_driver)
    {
        return $this->where('id_driver', $id_driver)->delete();
    }
}