<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list()
    {
        $lists = Book::all();
        return view('index',[
            'lists'=>$lists
        ]);
    }
    public function search(Request $request)
    {
        $name =  $request->get('name');
        dd($name);
        $lists = Book::query()->where('title', 'LIKE', '%' .$name .'%');
        return view('index',[
            'lists'=>$lists
        ]);
    }
}
