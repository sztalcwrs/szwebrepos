@extends('frontend.layouts.app')
@section('style')
<style>
    .trending-boxx {
        display: flex;
        flex-direction: column;
        gap: 30px;
        align-items: center;
        align-items: center;
        max-width: 1200px;
        width: 90%;
        margin: auto;
        padding: 35px 0px;
    }
</style>
@endsection
@section('content')
<div class="trending-boxx">
    <!--img-->
    <div class="t-b-img">
        <img alt="Travel" src="{{asset('backend/imgages/products/'.$product->image)}}" style="object-fit: scale-down;" />
    </div>
    <!--text-->
    <div class="t-b-text">
        <a href="#">{{$product->title}}</a>
        <span>{{$product->category}}</span>
    </div>
    <!--price-&-Book-->
    <div class="price-book">

        <span class="t-price"></span>
    </div>
    <!--agency-name-->
    <div class="agency-name" style="text-align: center; display: flex; align-items: center; justify-content: center;">
        <!-- <img alt=" Agence Logo" src="images/Agency_Name.png" /> -->
        <span>{{$product->company}}</span>
    </div>

    <div class="description">


        <pre>{{$product->description}}

        </pre>


    </div>
</div>
@endsection