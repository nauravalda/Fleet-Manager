<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getDataAdmin()
    {
        return $this->where('role', 'admin')->get();
    }

    public function getDataTopLevel()
    {
        return $this->where('role', 'top-lvl')->get();
    }

    public function getDataMidLevel()
    {
        return $this->where('role', 'mid-lvl')->get();
    }

    public function getAllDataUser()
    {
        return $this->all();
    }

    public function getDataUserById($id)
    {
        return $this->where('id', $id)->first();
    }
}
