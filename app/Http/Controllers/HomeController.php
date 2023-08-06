<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   

    public function index(Request $request)
   {
     return view('home');
   }

    public function create(Request $request, $by_branch)
    {
    }

    public function store(Request $request, $by_branch)
    {}

    public function edit(Request $request, $by_branch, $id)
    {
    }
    public function detail(Request $request, $by_branch)
    {
    }

}