@extends('frontend.layouts.app')
@section('style')
<style>
.title {
 margin: 50px 0;
}

.title h1 {

 font-family: 'ABeeZee', Helvetica, Arial, Lucida, sans-serif;
 font-weight: 700;
 font-size: 40px;
 letter-spacing: 5px;
 text-align: center;

}
</style>
@endsection
@section('content')
<section class="main">

 <article>
  <div class="title">
   <h1>{{$product->title}}</h1>
  </div>
  <div class="content">
   <div class="img">
    <img src="{{asset('backend/imgages/products/'.$product->image)}}" alt="">
   </div>
   <div class="Composition">
    <h2>Composition</h2>
    <h5>Each 100ml contains:</h5>
    <div class="composition-img">
     <img src="https://inshalpharma.com/wp-content/uploads/2021/05/Complishell-1.jpg" alt="">
    </div>
   </div>
   <div class="description">
    <div class="type">
     <h2>Type:</h2>
     <h5>{{$product->category}}</h5>
    </div>

    <div class="pack">
     <h2>Pack Size:</h2>
     <h5>500ml, 1Ltr</h5>
    </div>

   </div>
  </div>
 </article>
</section>
@endsection