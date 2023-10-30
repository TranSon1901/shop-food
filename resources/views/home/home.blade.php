@extends('layout.layout')
@section('content')
  <div id="home">
    <div id="profile">
      <img src="{{url('storage/images/profile.png') }}" alt="" title="" />
    </div>
    <div id="menu">
      <p>Menu</p>
      <div id="menu_search">
        <img src="{{url('storage/images/vector.png') }}" alt="" title="" />
        <input type="text" placeholder="search"/>
      </div>
    </div>
    <div id="catagories">
      <p>Catagories</p>
      <div id="list">
        <div> <img src="{{url('storage/images/alldishes.png')}}" alt="" title="" /></div>
        <div> <img src="{{url('storage/images/rice.png') }}" alt="" title="" /></div>
        <div> <img src="{{url('storage/images/salan.png') }}" alt="" title="" /></div>
        <div> <img src="{{url('storage/images/vegetable.png') }}" alt="" title="" /></div>
      </div>
    </div>
    <div id="promotions">
      <p>Promotions</p>
      <div class="content">
        <div>
          <p class="text_one">Today’s Offer</p>
          <p class="text_tow">Best Selling in your area</p>
          <p class="text_three">Homemade Fries</p>
        </div>
        <img src="{{url('storage/images/French-fries.png')}}" alt="">
      </div>
    </div>
    <div id='product'>
      <p class="title">Product</p>
      <div class="list">

        {{-- begin: product item --}}
        <div class="item">
          <img src="{{url('storage/images/Channay.png')}}" alt="">
          <p>Channay</p>
          <div class="item_bottom">
            <span class="price">$2</span>
            <img src="{{url('storage/images/Add circle.png')}}" alt="">
          </div>
        </div>
        {{-- end: product item --}}
        <div class="item">
          <img src="{{url('storage/images/Daal Picture.png')}}" alt="">
          <p>Daal Moong</p>
          <div class="item_bottom">
            <span class="price">$5</span>
            <img src="{{url('storage/images/Add circle.png')}}" alt="">
          </div>
        </div>

        {{-- begin: product item --}}
        <div class="item">
          <img src="{{url('storage/images/Channay.png')}}" alt="">
          <p>Channay</p>
          <div class="item_bottom">
            <span class="price">$2</span>
            <img src="{{url('storage/images/Add circle.png')}}" alt="">
          </div>
        </div>
        {{-- end: product item --}}

        {{-- begin: product item --}}
        <div class="item">
          <img src="{{url('storage/images/Channay.png')}}" alt="">
          <p>Channay</p>
          <div class="item_bottom">
            <span class="price">$2</span>
            <img src="{{url('storage/images/Add circle.png')}}" alt="">
          </div>
        </div>
        {{-- end: product item --}}
      </div>
    </div>
    <div id="navbar">
      <a href="{{route('home')}}"><img src="{{ url('storage/images/Home.png') }}"></a>
      <a href=""><img src="{{ url('storage/images/Search.png') }}"></a>
      <a href="{{route('order')}}"><img src="{{ url('storage/images/Shopping Cart.png') }}"></a>
      <a href=""><img src="{{ url('storage/images/User.png') }}"></a>
    </div>
  </div>
@endsection

