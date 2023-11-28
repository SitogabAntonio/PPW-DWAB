<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id','desc')->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
    $validatedData = $request->validated();

    // Mengambil nama kategori dari request
    $categoryName = $validatedData['name'];

    // Memeriksa apakah kategori dengan nama yang sama sudah ada dalam database
    $existingCategory = Category::where('name', $categoryName)->exists();

    if ($existingCategory) {
        return redirect()->back()->withInput()->with('warning', 'Kategori dengan nama yang sama sudah ada!');
    }

    // Jika tidak ada kategori dengan nama yang sama, maka lanjutkan untuk membuat kategori baru
    $slug = Str::slug($categoryName);
    $code = random_int(10, 99);
    $slug = $slug . '-' . $code;

    $category = new Category;
    $category->name = $categoryName;
    $category->slug = $slug;

    $category->save();

    return redirect('categories')->with('messages', 'Category berhasil ditambahkan');
    }



    public function edit(Category $category){
        return view('admin.category.edit', compact('category'));
    }


    public function update(CategoryFormRequest $request, $category)
    {
        $validatedData = $request->validated();
        $category = Category::findOrFail($category);

        $category->name = $validatedData['name'];
        $category->update(); // Simpan perubahan pada model Category
        return redirect('categories')->with('messages', 'Category berhasil diupdate');
    }
    public function destroy(int $category_id)
    {
        $category = Category::findOrFail($category_id);
        $category->delete();
        return redirect()->back()->with('messages', 'Category berhasil dihapus');
    }
}

