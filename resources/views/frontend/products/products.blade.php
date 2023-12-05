@extends('frontend.layouts.app')

@section('content')
<!--==Trending===========================-->
<section id="trending">
    <!--heading-container************-->
    <div class="trending-heading-container">
        <!--heading-->
        <div class="trending-heading">
            <h2>Our Products</h2>
            <p>We Offer The Best Ever Services for veterinarians medications & chicken Trade!</p>
        </div>
        <!--btns-->
    </div>

    <!--==trend-box-container==============-->
    <div class="trending-box-container">
        <!-- Swiper Slider -->

        @foreach($products as $product)

        <!--**Slide-1*******************-->

        <div class="">
            <!--box**********-->
            <div class="trending-box">
                <!--img-->
                <div class="t-b-img">
                    <img alt="Travel" src="{{asset('backend/imgages/products/'.$product->image)}}" />
                </div>
                <!--text-->
                <div class="t-b-text">
                    <a href="#">{{$product->title}}</a>
                    <span>{{$product->category}}</span>
                </div>
                <!--price-&-Book-->
                <div class="price-book">
                    <!-- <span class="t-price">200$</span> -->
                    <p> @php echo substr($product->description, 0, 15) @endphp ...</p>
                    <a href="{{route('allproducts.show', ['product'=> $product->id])}}" class="t-book-btn">Read More</a>
                </div>
                <!--agency-name-->
                <div class="agency-name" style="text-align: center; display: flex; align-items: center; justify-content: center;">
                    <!-- <img alt=" Agence Logo" src="images/Agency_Name.png" /> -->
                    <span>{{$product->company}}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection