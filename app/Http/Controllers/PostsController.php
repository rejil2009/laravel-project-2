<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){
        return view('post.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'caption' => 'required',
            'image' => ['required','image']
        ]);
       //\App\Post::create($validated);
       $imagepath=$request->image->store('uploads','public');
       auth()->user()->posts()->create(['caption'=>$validated['caption'],'image'=>$imagepath]);
       return redirect('/profile/'.auth()->user()->id);
    }
}
