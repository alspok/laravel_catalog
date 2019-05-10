<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use DateTime;
use DateTimeZone;

class ProductController extends Controller
{
    protected $user;

    public function __construct()
    {
        // $this->middleware('auth');
        // var_dump($this->middleware('auth'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['products'] = Product::all();

        // $dateTime = new DateTime;
        // $data['current'] = $dateTime->format('Y M d, H:i');
        // $data['last'] = Product::latest('updated_at')->first();

        // return view('admin.products.table_view', $data);
        return redirect('/home');
    }

    public function admin_index()
    {
        $data['products'] = Product::all();

        // $dateTime = new DateTime;
        // $data['current'] = $dateTime->format('Y M d, H:i');
        // $data['last'] = Product::latest('updated_at')->first();

        return view('admin.products.table_view_admin', $data);
    }

    public function guest_index()
    {
        $data['products'] = Product::all();

        $dateTime = new DateTime;
        $data['current'] = $dateTime->format('Y M d, H:i');
        $data['last'] = Product::latest('updated_at')->first();

        return view('admin.products.table_view_guest', $data);
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
        if(Auth::user()->check && ($this->user == 'admin')){
        return view('admin.products.create');
        }
        else return view('resources.views.dashboard');
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
        $product->unit = $request->unit;
        $product->price = $request->price;
        $product->special_price = $request->special_price;
        $product->active = $request->active;
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
        $product = Product::find($id);
        // var_dump($data);
        // return;
        
        return view('admin.products.edit')->with('product', $product);
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
        // $request->validate([
        //     'name' => 'required',
        //     'weight' => 'required',
        //     'unit' => 'required',
        //     'price' => 'required',
        //     'active' => 'required',
        //     'category' => 'required',
        //     'share_qty' => 'required'
        // ]);

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

     public function softDelete($id)
     {
        $product = Product::find($id);
        if($product->active == 1) $product->active = 0;
           else $product->active = 1;
        $product->save();
        
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
