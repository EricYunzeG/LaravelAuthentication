@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    @foreach($products as $product)
        <p>{{$product->productName}}</p>
    @endforeach
@endsection