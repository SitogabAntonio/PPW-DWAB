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
        return self::where('community_name', $community_name)->first();

    }

    // Metode untuk membuat komunitas baru
    public static function createCommunity($data)
    {
        return self::create($data);
    }

    // Metode untuk mengupdate komunitas berdasarkan nama komunitas
    public static function updateCommunity($community_name, $data)
    {

        if ($community) {
            $community->update($data);
            return $community;
        }
    return null;
    }

    // Metode untuk menghapus komunitas berdasarkan nama komunitas
    public static function deleteCommunity($community_name)
    {
        $community = self::where('community_name', $community_name)->first();

        if ($community) {
            $community->delete();
            return true;
        }
        return false;
    }

    public function getLinks(): array
    {
        $baseUri = '/api/communities/' . $this->community_name;
        return [
            'self' => [
                'href' => $baseUri,
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get community details',
            ],
            'update' => [
                'href' => $baseUri . '/update',
                'method' => 'PUT',
                'type' => 'application/json',
                'description' => 'Update community details',
            ],
            'delete' => [
                'href' => $baseUri . '/delete',
                'method' => 'DELETE',
                'type' => 'application/json',
                'description' => 'Delete community',
            ],
        ];
    }
}
