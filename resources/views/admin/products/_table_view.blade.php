@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row ">
            <div class="col-12">
              <table width='100%'>
                  <col style="width:5%">
                  <col style="width:9%">
                  <col style="width:9%">
                  <col style="width:5%">
                  <col style="width:9%">
                  <col style="width:2%">
                  <col style="width:5%">
                  <col style="width:18%">
                  <col style="width:5%">
                  <col style="width:9%">
                  <col style="width:9%">
                  <col style="width:5%">
                  <col style="width:13%">
                    <thead>
                        <tr>
                        <col width="130">
                            <th> id </th>
                            <th> name </th>
                            <th> slug </th>
                            <th> price </th>
                            <th> spec price </th>
                            <th> active </th>
                            <th> unit </th>
                            <th> description </th>
                            <th> shop id </th>
                            <th> weight </th>
                            <th> image </th>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach($products as $product)
                          <tr>
                              <td> {{$product->id}} </td>
                              <td> {{$product->name}} </td>
                              <td> {{$product->slug}} </td>
                              <td> {{addCurrnecySymbol('$', $product->price)}} </td>
                              <td> {{addCurrnecySymbol('$', $product->special_price)}} </td>
                              <td> {{$product->active}} </td>
                              <td> {{$product->unit}} </td>
                              <td> {{$product->description}} </td>
                              <td> {{$product->shop_id}} </td>
                              <td> {{addWeightSymbol('kg', $product->weight)}} </td>
                              <td> {{$product->img}} </td>
                              <td><button>Edit</button>
                              <td><button>Temp delete</button></td>
                          </tr>
                         @endforeach
                   </tbody>
                </table>
            </div>
        </div>
    </div>
  @endsection