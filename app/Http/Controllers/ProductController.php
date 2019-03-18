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
        $data['products'] = Product::all();
        return view('admin.products.table_view', $data);
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
        $data = Product::all()->toArray();
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
        // $validation = $request->validate([
        //     'name' => 'required',
        //     'weight' => 'required',
        //     'unit' => 'required',
        //     'price' => 'required',
        //     'active' => 'required',
        //     'category' => 'required',
        //     'share_qty' => 'required'
        // ]);
        
        // var_dump($validation);
        // return;

        $task = Product::find($id);
        $product = $request->all();

        $task->fill($product)->save();
        
        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function softDelete(Request $request, $id)
     {
         $task = Product::find($id);

         var_dump($task);
         return;
         $product = $request->all();
        // var_dump($product);
        // return;
         if($product['active']) $product['active'] = 0;
            else $product['active'] = 1;
        $product->fill($product)->save();
        
        return redirect()->route('products.index')->with('success','Product updated successfully');
     }


    /**
     * Soft delete specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */

     public function delete($id)
     {
         echo 'in soft delete';
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'in destroy';
        //
    }
}
