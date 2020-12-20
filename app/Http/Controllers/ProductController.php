<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productName = $request->get('product_name');
        $productPrice = $request->get('product_price');
        $fileUrl = $request->file('product_photo');
        $createdBy= auth()->user()->id;

        if(isset($fileUrl))
        {
            $productPhotoName = uniqid('product_').'_'.$createdBy.'_'.auth()->user()->name.'.'.$fileUrl->getClientOriginalExtension();
            $fileUrl->move(UploadPaths::getUploadPaths('product_photos'), $productPhotoName);
        } else {
            $productPhotoName='';
        }

        Product::create([
            'product_name' => $productName,
            'product_price' => $productPrice,
            'product_photo' => $productPhotoName,
            'created_by' => $createdBy
        ]);

        return view('product.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
