<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    protected $user;

    public function __construct()
    {
        // $this->middleware('auth');
        // var_dump($this->middleware('auth'));
    }

    public function index()
    {
        $data['cars'] = Car::all();

        return view('admin/cars/cars_view', $data);
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->model = $request->model;
        $car->slug = $request->slug;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->special_price = $request->special_price;
        $car->img = $request->img;

        $car->save();

        return redirect(route('cars'));
    }

    public function update(Request $request, $id)
    {   

        $task = Find::find($id);
        $car = $request->all();
        $task->fill($car)->save();
        
        return redirect()->route('products.index')->with('success','Product updated successfully');
    }
}