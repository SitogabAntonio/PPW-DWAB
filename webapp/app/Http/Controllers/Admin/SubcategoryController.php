<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class SubcategoryController extends Controller
{
    public function index()
    {
        $post = Post::join('categories','categories.id','=','posts.category_id')
        ->select('posts.*','categories.name as category_name')
        ->where('status',1)
        ->orderBy('id','desc')
        ->paginate(20);
        return view('frontend.index' , compact('post'));
    }
    public function show($post_slug){
        $post = Post::where('slug', $post_slug)->first();
        return view('frontend.show', compact('post'));
    }
}
