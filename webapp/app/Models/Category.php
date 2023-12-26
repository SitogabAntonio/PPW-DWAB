<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
    ];

    // Metode untuk mendapatkan daftar kategori
    public static function getAllCategories()
    {
        return self::all();
    }

    // Metode untuk mendapatkan detail kategori berdasarkan nama kategori
    public static function getCategoryByName($name)
    {
        return self::where('name', $name)->first();
    }

    // Metode untuk membuat kategori baru
    public static function createCategory($data)
    {
        return self::create($data);
    }

    // Metode untuk mengupdate kategori berdasarkan nama kategori
    public static function updateCategory($name, $data)
    {
        $category = self::where('name', $name)->first();

        if ($category) {
            $category->update($data);
            return $category;
        }

        return null;
    }

    // Metode untuk menghapus kategori berdasarkan nama kategori
    public static function deleteCategory($name)
    {
        $category = self::where('name', $name)->first();

        if ($category) {
            $category->delete();
            return true;
        }

        return false;
    }

    public function getLinks(): array
    {
        $baseUri = '/api/categories/' . $this->name;

        return [
            'self' => [
                'href' => $baseUri,
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get category details',
            ],
            'update' => [
                'href' => $baseUri . '/update',
                'method' => 'PUT',
                'type' => 'application/json',
                'description' => 'Update category details',
            ],
            'delete' => [
                'href' => $baseUri . '/delete',
                'method' => 'DELETE',
                'type' => 'application/json',
                'description' => 'Delete category',
            ],
        ];
    }
}

