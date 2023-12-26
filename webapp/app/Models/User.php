<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'no_telp',
        'gender',
        'status',
    ];

    public static function boot()
    {
        parent::boot();

        // Event 'creating' dipanggil sebelum rekaman baru dibuat
        self::creating(function ($user) {
            // Set nilai default untuk profile_path jika tidak ada file yang diunggah
            if (!$user->profile_path) {
                $user->profile_path = 'default.jpg'; // Ganti dengan nama file default yang Anda inginkan
            }
        });
    }

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Contoh metode untuk mendapatkan daftar Users
    public static function getAllUsers()
    {
        return self::all();
    }

    // Contoh metode untuk mendapatkan detail User berdasarkan nama
    public static function getUserByName($name)
    {
        return self::where('name', $name)->first();
    }

    // Contoh metode untuk membuat user baru
    public static function createUsers($data)
    {
        return self::create($data);
    }

    // Contoh metode untuk mengupdate user berdasarkan nama
    public static function updateUser($name, $data)
    {
        $user = self::find($name);
        if ($user) {
            $user->update($data);
            return $user;
        }
        return null;
    }

    // Contoh metode untuk menghapus Users berdasarkan nama
    public static function deleteUser($name)
    {
        $user = self::find($name);
        if ($user) {
            $user->delete();
            return true;
        }
        return false;
    }


    public function getLinks(): array
    {
        $baseUri = '/api/users/' . $this->name;

        return [
            'self' => [
                'href' => $baseUri,
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get user details',
            ],
            'update' => [
                'href' => $baseUri . '/update',
                'method' => 'PUT',
                'type' => 'application/json',
                'description' => 'Update user details',
            ],
            'delete' => [
                'href' => $baseUri . '/delete',
                'method' => 'DELETE',
                'type' => 'application/json',
                'description' => 'Delete user',
            ],
        ];
    }

}
