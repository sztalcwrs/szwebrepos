@extends('frontend.layouts.master')

@section('content')

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

</div>

@endsection