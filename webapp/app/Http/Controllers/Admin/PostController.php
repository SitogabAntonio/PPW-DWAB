<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\PostFormRequest;
    use App\Models\Category;
    use App\Models\Post;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    class PostController extends Controller
    {
        public function index()
        {
            $posts = Post::orderBy('id', 'desc')->paginate(5);
            return view('admin.post.index', compact('posts'));
        }

        public function create()
        {
            $categories = Category::all();
            return view('admin.post.create', compact('categories'));
        }

        public function store(PostFormRequest $request)
        {
            $validatedData = $request->validated();
            $code = random_int(10, 99);
            $slug = Str::slug($validatedData['title']) . "-" . $code;

            $post = new Post();
            $post->title = $validatedData['title'];
            $post->category_id = $validatedData['category_id'];
            $post->description = $validatedData['description'];
            $post->status = $validatedData['status'];

            if (Post::where('slug', $slug)->exists()) {
                $post->slug = $slug;
            } else {
                $post->slug = Str::slug($validatedData['title']);
            }

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('uploads/post/', $filename);
                $post->image = $filename;
            }

            $post->save();
            return redirect('posts')->with('message', 'Post berhasil ditambahkan');
        }
    }
