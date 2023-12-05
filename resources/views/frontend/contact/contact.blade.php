@extends('frontend.layouts.app')

@section('style')

<style>
.container {
    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 30px 150px;
}

h3 {
    text-align: center;
}

input[type=text],
select,
textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

@media (max-width: 768px) {
    .container {
        padding: 5px 20px;
    }
}
</style>
@endsection


@section('content')


<div class="container">
    <form id="contact-form">
        <h3>Contact Form</h3>
        <label for="name">First Name</label>
        <input type="text" id="name" name="firstname" placeholder="Your first name..">

        <label for="last">Last Name</label>
        <input type="text" id="last" name="last" placeholder="Your last name..">

        <label for="company">Company</label>
        <input type="text" id="company" name="company" placeholder="Your company name..">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email name..">

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Your phone name..">

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write your message.." style="height:200px"></textarea>

        <input type="submit" value="Submit" id="btn-submit">
    </form>
</div>






@endsection

@section('script')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
<script>
let btnSubmit = document.querySelector('#btn-submit');

// <!-- emailjs to mail contact form data -->
btnSubmit.addEventListener('click', (e) => {
    e.preventDefault();

    emailjs.init('Zeen5a6_kYS9kPmRF')

    emailjs
        .sendForm('service_an5png7', 'template_y071jzv', '#contact-form')
        .then(
            function(response) {
                console.log('SUCCESS!', response.status, response.text)
                document.getElementById('contact-form').reset()
                alert('Form Submitted Successfully')
            },
            function(error) {
                console.log('FAILED...', error)
                alert('Form Submission Failed! Try Again')
            }
        )
})
// <!-- emailjs to mail contact form data -->

console.log('wwelcome ot pos sdjflksjdf')
</script>

@endsection