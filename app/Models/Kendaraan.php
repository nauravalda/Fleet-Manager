<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $primaryKey = 'id_kendaraan';
    protected $fillable = [
        'nama_kendaraan',
        'plat_nomor',
        'kapasitas',
        'status',
    ];

    public function getDataKendaraan()
    {
        return $this->get();
    }

    public function getDataKendaraanById($id_kendaraan)
    {
        return $this->where('id_kendaraan', $id_kendaraan)->first();
    }

    public function insertDataKendaraan($data)
    {
        return $this->insert($data);
    }

    public function updateDataKendaraan($id_kendaraan, $data)
    {
        return $this->where('id_kendaraan', $id_kendaraan)->update($data);
    }

    public function deleteDataKendaraan($id_kendaraan)
    {
        return $this->where('id_kendaraan', $id_kendaraan)->delete();
    }
}