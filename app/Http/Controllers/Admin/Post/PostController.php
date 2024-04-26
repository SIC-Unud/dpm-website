<?php

namespace App\Http\Controllers\Admin\Post;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\StorePost;
use App\Http\Requests\UpdatePost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.post', compact('posts'));
    }

    public function store(StorePost $request)
    {
        $post =  new Post();
        $post->title = $request->title;
        $post->link  = $request->link;

        if($request->file('image_path')){            
            $image_path = $request->file('image_path')->store(Post::IMAGE_PATH);
            $post->image_path = $image_path;
        }

        $post->save();
        
        return response()->json(['message' => 'post has been added'], 200);
    }

    public function destroy(Post $post)
    {
        if($post->image_path)
                Storage::delete($post->image_path);

        $post->delete();

        return response()->json(['message' => 'post has been deleted'], 200);
    }

    public function update(UpdatePost $request, Post $post)
    {
        $post->title = $request->title;
        $post->link  = $request->link;

        if($request->file('image_path')){
            if($post->image_path)
                Storage::delete($post->image_path);
            
            $image_path = $request->file('image_path')->store(Post::IMAGE_PATH);
            $post->image_path = $image_path;
        }

        $post->save();
        
        return response()->json(['message' => 'post has been updated'], 200);
    }
}
