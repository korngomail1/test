<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Product;

class ApiController extends Controller
{
    public function product(Request $request){
        $data = Product::where('category_id',$request->category_id)->get();
        return $data;
    }
}
