<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(){
        return view('post.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

    }
}
