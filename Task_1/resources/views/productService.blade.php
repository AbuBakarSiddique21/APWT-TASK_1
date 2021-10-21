@extends('layouts.app')

@section('content')
    <h1> "Welcome to Product service Page" </h1>
    
    @foreach($productData as $product)
    {{ $product }} <br>
    @endforeach
    
@endsection