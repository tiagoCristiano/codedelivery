<?php

namespace CodeDelivery\Http\Controllers;

use Illuminate\Http\Request;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $linguagens = ["teste", '1',2,'3'];
        return view('admin.categories.index',compact('linguagens'));
    }
}
