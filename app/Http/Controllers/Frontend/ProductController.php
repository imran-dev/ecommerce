<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detailsPage($slug){

        $data = [];

        $data['product'] = Product::where('slug', $slug)->where('status', 'Publish')->first();

        if($data['product'] === null){
//            return redirect()->route('frontend.home');
            return view('frontend.404');
        }

        return view('frontend.product.details', $data);
    }
}
