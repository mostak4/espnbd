<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class EspnBDController extends Controller
{
    public function home() {
        $allPublushedProucts= Product::where('publication_status','1')->get();
        $allPublishedImages=Slider::where('publication_status','1')->get();
        return view ('frontEnd.home',['allPublishedImages'=>$allPublishedImages],['allPublushedProucts'=>$allPublushedProucts]);
    }
    public function aboutUs (){
        return view('frontEnd.about-us');
    }
    public function notice (){
        return view('frontEnd.notice');
    }

    public function contact() {
        return view('frontEnd.contact');
    }
    public function category ($id){
        $categoryProducts=Product::where('category_id',$id)->get();
        return view('frontEnd.category',['categoryProducts'=>$categoryProducts]);
    }

}



















