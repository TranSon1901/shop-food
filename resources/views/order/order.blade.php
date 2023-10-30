@extends('layout.layout')
@section('content')
  <div id="detail_product">
    <span class="heart"><img src="{{ url('storage/images/heart-fill.png') }}" alt=""/></span>
    <img src="{{ url('storage/images/Channay_detail.png') }}" alt=""/>
    <div class="detail_price_star">
      <div class="star">
        <img src="{{ url('storage/images/Star 2.png') }}"/>
        <span>4.8</span>
      </div>
      <span class="price">$2</span>
    </div>
  </div>
  <div id="quantity">
    <div class="info">
      <p class="name">Channay</p>
      <p class="des">Homemade Channay</p>
    </div>
    <div class="action">
      <span class="up"><img src="{{ url('storage/images/action-down.png') }}" alt=""/></span>
      <span class="number">1</span>
      <span class="down"><img src="{{ url('storage/images/action-up.png') }}" alt=""/></span>
    </div>
  </div>

  <div id="detail_product_list">
    <p>One add</p>
    <div class="list">
      <div class="item"><img src="{{ url('storage/images/Addon-1.png') }}" alt=""/></div>
      <div class="item"><img src="{{ url('storage/images/Addon-2.png') }}" alt=""/></div>
      <div class="item"><img src="{{ url('storage/images/Addon-2.png') }}" alt=""/></div>
    </div>
  </div>
  <button id="btn_add">Add to cart</button>
  <div id="navbar">
    <a href="{{route('home')}}"><img src="{{ url('storage/images/Home.png') }}"></a>
    <a href=""><img src="{{ url('storage/images/Search.png') }}"></a>
    <a href="{{route('order')}}"><img src="{{ url('storage/images/Shopping Cart.png') }}"></a>
    <a href=""><img src="{{ url('storage/images/User.png') }}"></a>
  </div>
@endsection