<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{


  public function index(Request $request)
  {
  }

  public function create(Request $request)
  {
    
  }

  public function store(Request $request)
  {
    $input = $request->all(); 
    $data = new Category;
    $data->create($input);

    return redirect(route('home'));
  }

  public function edit(Request $request, $id)
  {
  }
  public function detail(Request $request)
  {
  }
}
