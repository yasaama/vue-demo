<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function show(){
        return Item::all();
    }

    public function single(Request $request, $id){
        return Item::findOrFail($id);
    }
}
