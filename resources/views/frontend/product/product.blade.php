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
        <img alt="Travel" src="{{asset('backend/imgages/products/'.$product->image)}}"
            style="object-fit: scale-down;" />
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


        <p>{{$product->description}}
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro, sint tempore eaque deserunt
            debitis quasi voluptatum provident, repudiandae repellat, sit tenetur? Eligendi in itaque
            earum qui quam impedit ullam nihil.
        </p>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis cupiditate consequatur
            repellendus, vel accusantium fugit expedita. Corrupti eligendi nulla, quae reprehenderit
            accusamus aspernatur illo minus quod unde in commodi, eaque tempore, ad officia dolore
            similique a sequi vel modi! Minus accusamus, dolor delectus excepturi reprehenderit rerum
            cupiditate saepe nisi assumenda voluptatibus quo tenetur deleniti eveniet aperiam numquam
            voluptates incidunt harum! Libero dolore, asperiores sequi eum accusantium soluta pariatur
            rerum. Numquam accusantium illo dignissimos enim perferendis nihil, voluptatibus quasi
            eveniet id porro ab labore itaque voluptas reiciendis natus obcaecati veritatis aliquid,
            maiores pariatur aut magni blanditiis. Eius, adipisci. Quidem, expedita inventore!
        </p>

    </div>
</div>
@endsection