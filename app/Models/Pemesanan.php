<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $fillable = [
        'id_admin',
        'id_kendaraan',
        'id_driver',
        'id_approver_1',
        'id_approver_2',
        'status_1',
        'status_2',
        'tanggal_pemesanan',
    ];

    public function getDataPemesananByAdmin($id_admin)
    {
        return $this->where('id_admin', $id_admin)->get();
    }

    public function getDataPemesananByApprover($id_approver)
    {
        return $this->where('id_approver_1', $id_approver)->orWhere('id_approver_2', $id_approver)->get();
    }

    public function getDataPemesanan()
    {
        return $this->all();
    }
    
    
}