@extends('frontend.layouts.master')

@section('content')

<!-- start hero -->

<div class=" p-5 flex  bg-mygreenlight text-black  mb-3">
    <div class="my-auto flex-1">
        <h1 class=" text-[34px]">Welcome to Sardar Zadran veterinarians medications & chicken Trade</h1>
        <h1 class=" text-[34px] mt-7">We provide custom pet-friendly compounded medications for over
            80% of the veterinarians in Afghanistan.
        </h1>
    </div>
    <div class="my-auto flex-1">
        <img src="{{asset('frontend/images/products/product01.png')}}" alt="">
    </div>
</div>
<!-- end hero -->

<!-- start company -->
<div class="flex justify-start align-middle bg-mygray mb-3">
    <div class="px-5 ">
        <h1 class=" text-[40px] text-black">We Are <span class="text-myyellowcolor">Truested</span> By</h1>
        <h1 class=" text-[40px] text-black">Major Global Brands</h1>
    </div>


    <div class="flex align-middle">

        <img class="" src="{{asset('frontend/images/logos/inshal.png')}}" width="150" height="50" alt="">

        <img class="" src="{{asset('frontend/images/logos/alternative.png')}}" width="150" height="50" alt="">

        <img class="" src="{{asset('frontend/images/logos/rx.png')}}" width="150" height="50" alt="">

    </div>
</div>
<!-- end company -->


<!-- start products -->

<div class="products bg-mygreenlight text-black mb-4 pb-3" style="display: flex; flex-direction: column;">
    <div class=" p-5">

        <h2 class=" text-[40px] text-black mb-4">What We <span class="text-myyellowcolor">Offer</span></h2>
        <p class=" text-[20px] ">We Offer The Best Ever Services for veterinarians medications
        </p>
        <p class=" text-[20px] "> & chicken Trade</p>
    </div>
    <section class="products p-5">
        @foreach($products as $product)
        <article class="product">
            <div class="product-header">
                <img src="{{asset('backend/imgages/products/'.$product->imag)}}" alt="" />
            </div>
            <div class="prodcut-body">
                <div class="product-title">
                    <h1>{{$product->title}}</h1>
                    <h2>{{$product->company}}</h2>
                </div>
                <h3>{{$product->category}}</h3>
                <div class="product-details">
                    <p>
                        @php echo substr($product->description, 0, 100) @endphp
                    </p>
                </div>

                <a class="btn-readmore" href="{{route('product.show', ['product'=> $product->id])}}">Read More</a>
            </div>
        </article>


        @endforeach
    </section>
    <div class="mt-6 flex mx-auto justify-center">
        <a href="/allproducts" class="px-5 py-4 bg-mygreenlight rounded-xl text-black font-bold hover:text-mygray">
            Show All Products
        </a>
    </div>
</div>




<!-- end products -->

<!-- <div class="mt-5 w-full h-screen bg-no-repeat bg-cover bg-left-bottom bg-fixed"
    style="background-image: url('https://images.pexels.com/photos/7245251/pexels-photo-7245251.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load');">

</div>

<div class="h-screen">
    aaa
</div> -->

<!-- start -->
<!-- end -->


<!-- start -->
<!-- end -->

@endsection

@foreach($products as $product)

<!-- <div class="trending-box">
    <!--img-->
<div class="t-b-img">
    <img alt="Travel" src="{{asset('backend/imgages/products/'.$product->imag)}}" />
</div>
<!--text-->
<div class="t-b-text">
    <a href="#">{{$product->title}}</a>
    <span>{{$product->category}} | {{$product->company}}</span>
</div>
<!--price-&-Book-->
<div class="price-book">
    <span class="t-price">200$</span>
    <a href="#" class="t-book-btn">Read More</a>
</div>
<!--agency-name-->
<div class="agency-name">
    <img alt="Agence Logo" src="images/Agency_Name.png" />
    <span>Agence Name</span>
</div>
</div>
@endforeach -->