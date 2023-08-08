<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        $viewData["products"] = Product::all();
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] =  "About us";
        $viewData["description"] =  "This is an about page ...";
        $viewData["author"] = "Developed by: Your Name";
        return view('home.about')->with("viewData", $viewData);
    }
}
