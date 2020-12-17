<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.list',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'file' => 'required|mimes:jpg,png',
//        ]);
//        $path = $request->image->store('public/avatar');
//        $customer->image = $path;

        $product = new Product();
        $product->name        = $request->name;
        $product->category_id       = $request->brand;
        $image = $request->image->store('public/product');
        $product->image       = $image;

        $image_detail = $request->image_detail->store('public/product');
        $product->imageDetail = $image_detail;

        $product->quantity      = $request->quantity;
        $product->costPrice     = $request->cost_price;
        $product->price         = $request->price;
        $product->description   = $request->description;
        $product->concentration = $request->concentration;
        $product->size          = $request->size;

        $product->save();
        return redirect()->route('product.index');


    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit',compact('product','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->category_id       = $request->brand;
        $image = $request->image->store('public/product');
        $product->image       = $image;

        $image_detail = $request->image_detail->store('public/product');
        $product->imageDetail = $image_detail;

        $product->quantity      = $request->quantity;
        $product->costPrice     = $request->cost_price;
        $product->price         = $request->price;
        $product->description   = $request->description;
        $product->concentration = $request->concentration;
        $product->size          = $request->size;

        $product->save();
        return redirect()->route('product.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
