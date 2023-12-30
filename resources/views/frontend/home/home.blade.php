@extends('frontend.layouts.app')

@section('content')

<!--==main==============================-->
<section id="main">
 <div class="content">
  <!--text-->
  <div class="main-text">
   <strong>Explore Poultry World<i class="fas fa-globe-americas"></i></strong>
   <h1>Welcome to Sardar Zadran Poultry</h1>
   <p>
    we specialize in providing top-notch healthcare solutions for poultry, with a primary focus on chickens.
   </p>
   <a href="/contact">Let's Trade</a>
  </div>
  <!--img-->
  <div class="main-img">
   <img alt="Traveling" src="{{asset('frontend/images/checkens.png')}}" style="object-fit: cover; border-radius: 50%" />
  </div>
 </div>
</section>

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


<!--==Subscribe===========================-->
<section id="subscribe">
 <strong>Subscribe to our newsletter</strong>
 <p>Receive Latest News, Updates, and other things we update.</p>
 <form id="contact">
  <input type="email" name="email" placeholder="Enter Your Email Address" required />
  <button id="submit"><i class="fas fa-paper-plane"></i></button>
 </form>
</section>


<!-- start -->
<!-- end -->

@endsection


@section('script')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
<script>
let btnSubmit = document.querySelector('#submit');

// <!-- emailjs to mail contact form data -->
btnSubmit.addEventListener('click', (e) => {
 e.preventDefault();

 emailjs.init('Zeen5a6_kYS9kPmRF')

 emailjs
  .sendForm('service_an5png7', 'template_y071jzv', '#contact')
  .then(
   function(response) {
    console.log('SUCCESS!', response.status, response.text)
    document.getElementById('contact').reset()
    alert('Form Submitted Successfully')
   },
   function(error) {
    console.log('FAILED...', error)
    alert('Form Submission Failed! Try Again')
   }
  )
})
// <!-- emailjs to mail contact form data -->
</script>

@endsection