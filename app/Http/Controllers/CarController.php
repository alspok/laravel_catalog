<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use DB;

class CarController extends Controller
{
    protected $data;

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
        $id = $request->id;
        $car = Car::find($id);
        return view('admin/cars/cars_update')->with('car', $car);
        
        // return redirect()->route('cars.index');
    }

    public function up_store(Request $request, $id)
    {
        $task = Car::find($id);
        $data = $request->all();
        $token = array_shift($data);
        var_dump($data);
        die();
        // $data = [
        //     // 'id' => $request->id,
        //     'model' => $request->model,
        //     // 'slug' => $request->slug,
        //     // 'year' => $request->year,
        //     // 'price' => $request->price,
        //     // 'special_price' => $request->special_price,
        //     // 'img' => $request->img
        // ];

        $task->fill($data)->save();
        // var_dump($data);
        // die();
        // DB::table('cars')->where('id', $id)->update($data);

        return redirect(route('cars.index'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        DB::table('cars')->delete($id);

        return redirect()->route('cars.index');
    }

}