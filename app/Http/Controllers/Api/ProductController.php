<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
//        $product = Product::with(['category'])->paginate(15);
//       return dd( $product);
        return ProductResource::collection(Product::paginate());

    }

    public function show($id){
        return new ProductResource(Product::find($id));
    }
}
