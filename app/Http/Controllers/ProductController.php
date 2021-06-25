<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $title = "Welcome to Laravel8";
        $description = "Created by Sanghoon";

        return view('products.index', compact('title', 'description'));
    }

    public function about() {
        return view('products.about');
    }


    public function show(Request $request) {
        $id = $request->input('id');
        return view('products.show')->with('id',$id);
    }

    public function shows(Request $request){
        $data = [ 
            'id1' => $request->input('id1'),
            'id2' => $request->input('id2'),
            'id3' => $request->input('id3')
        ];

        return view('products.shows')
            ->with([
            'data' => $data
            ]);
    }
}
