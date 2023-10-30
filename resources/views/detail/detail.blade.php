{{-- @vite(['resources/sass/order.scss']) --}}
@extends('layout.layout')
@section('content')
  <div id="product_detail">
    <img src="{{ url('storage/images/Channay.png') }}" alt=""/>
  </div>
  <div id="navbar">
    <a href="{{route('home')}}"><img src="{{ url('storage/images/Home.png') }}"></a>
    <a href=""><img src="{{ url('storage/images/Search.png') }}"></a>
    <a href="{{route('order')}}"><img src="{{ url('storage/images/Shopping Cart.png') }}"></a>
    <a href=""><img src="{{ url('storage/images/User.png') }}"></a>
  </div>
@endsection