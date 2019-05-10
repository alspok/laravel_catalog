<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use DB;

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

        return redirect(route('cars.index'));
    }

    public function update(Request $request)
    {   

        $task = Find::find($id);
        $car = $request->all();
        $task->fill($car)->save();
        
        return redirect()->route('cars.index');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        DB::table('cars')->delete($id);

        return redirect()->route('cars.index');
    }

}