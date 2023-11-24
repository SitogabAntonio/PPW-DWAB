<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $fillable = [
        'community_name', 'deskripsi',
    ];

    // Metode untuk mendapatkan daftar komunitas
    public static function getAllCommunities()
    {
        return self::all();
    }

    // Metode untuk mendapatkan detail komunitas berdasarkan nama komunitas
    public static function getCommunityByName($community_name)
    {
        return self::find($community_name);
    }
   
    // Metode untuk membuat komunitas baru
    public static function createCommunity($data)
    {
        return self::create($data);
    }

    // Metode untuk mengupdate komunitas berdasarkan nama komunitas
    public static function updateCommunity($community_name, $data)
    {
        $community = self::find($community_name);
        if ($community) {
            $community->update($data);
            return $community;
        }
    return null;
    }
   
    // Metode untuk menghapus komunitas berdasarkan nama komunitas
    public static function deleteCommunity($community_name)
    {
        $community = self::find($community_name);
        if ($community) {
            $community->delete();
            return true;
        }
        return false;
    }
}
   
