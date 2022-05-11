
@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btn-success" href="{{ route('Product/register') }}" role="button"> {{ __('New Product') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Product LIST') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 ID
 </th>
<th>
 name
 </th>
<th>
 unit
 </th>
 <th>price</th>
 <th>quantity</th>
 </tr>
 </thead>
 <tbody>
 @foreach($Product as $Product)
 <tr>
 <td> {{ $Product->id }}</td>
 <td> {{ $Product->name }}</td>
 <td> {{ $Product->unit }}</td>
 <td> {{ $Product->price }}</td>
 <td> {{ $Product->quantity }}</td>
 <td>
 
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection