@extends('frontend.layouts.master')



@section('content')

<div class="home min-h-screen bg-mygreenlight">
    <div class="products bg-mygreenlight text-black mb-4 pb-3" style="display: flex; flex-direction: column;">
        <section class=" p-5">
            <article class="product">
                <div class="product-header img-container">
                    <img src="{{asset('backend/imgages/products/'.$product->image)}}" width="400" alt="" />
                </div>
                <div class="prodcut-body">
                    <div class="product-title">
                        <h1>{{$product->title}}</h1>
                        <h2>{{$product->company}}</h2>
                    </div>
                    <h3>{{$product->category}}</h3>
                    <div class="product-details">
                        <p>
                            {{$product->description}}
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
            </article>
        </section>
    </div>
</div>

@endsection