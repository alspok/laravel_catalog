<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all()->toArray();
        return view('admin.products.table_view', compact('data'));
    }

    /**
     * Display a item by id of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function idIndex($id)
    {
        $data = Product::find($id)->toArray();
        // return view('admin.products.temp', compact('data'));
        return view('admin.products.edit', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->weight = $request->weight;
        $product->price = $request->price;
        $product->special_price = $request->special_price;
        $product->active = $request->active;
        $product->unit = $request->unit;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->shop_id = $request->shop_id;
        $product->img = $request->img;

        $product->save();

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        $data = Product::find($id);
        // echo '<pre>';
        // print_r($data);
        // return;
        return view('admin.products.show', compact('data'));
    }

    /**
     * Show active/inactive status
     * @param bool $act
     */
    public function showStatus(bool $act)
    {
        $data[] = Product::all()->toArray();
        return view('admin.products.showstatus', compact('data', 'act'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id)->toArray();
        // var_dump($data);
        // return;
        return view('admin.products.edit', compact('data'));
    }

    /**
     * Change active property.
     * @param int $id
     * @param bool $act
    */
    public function active($id, $act)
    {
        $product = Product::find($id);
        if($product->active === 0){
            $product->active = $act;
            $product->save();
            return view('admin.products.active', compact('product', 'act'));
        }
        else{
            $product->active = $act;
            $product->save();
            return view('admin.products.active', compact('product', 'act'));
        }
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
        $data = Product::findOrFail($id);
        $data->description= $request->get('description');
        $data->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
