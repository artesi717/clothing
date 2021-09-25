<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class PostsController extends Controller
{
    
    public function create()
    {
        $users=auth()->user();
        // $posts= Post::whereIn('user_id', $users)->latest()->get();
        return view('posts.create');
    }



    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'size' => 'required',
            'quantity' => 'required',
            'image'=>['required','image'],

        ]);

        $imagePath= request('image')->store('uploads','public');
            $image=Image::make(public_path("storage/{$imagePath}"))->fit(500,700);
            $image->save();
            
            
            auth()->user()->posts()->create([
                'name'=>$data['name'],
                'category'=>$data['category'],
                'price'=>$data['price'],
                'description'=>$data['description'],
                'size'=>$data['size'],
                'quantity'=>$data['quantity'],
                'image'=>$imagePath,
            ]);
            return redirect('profile/'.auth()->user()->id);
    }


    public function show(Post $post)
    {
        return view('postpageclothing',compact('post'));
    }



    public function cart(Post $post)
    {
        return view('cart',compact('post'));
    }
}
