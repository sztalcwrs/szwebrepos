@extends('frontend.layouts.master')

@section('content')


<div class="isolate bg-mygreenlight px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true"></div>
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            Contact Form
        </h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">
            Fill the form below to get in touch with our team
        </p>
    </div>
    <form id="contact-form" class="mx-auto mt-16 max-w-xl sm:mt-20">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
                <label for="first" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
                <div class="mt-2.5">
                    <input type="text" name="first" id="first" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>
            <div>
                <label for="last" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
                <div class="mt-2.5">
                    <input type="text" name="last" id="last" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
                <div class="mt-2.5">
                    <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                <div class="mt-2.5">
                    <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900">Phone
                    number</label>
                <div class="relative mt-2.5">
                    <input type="tel" name="phone" id="phone" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                <div class="mt-2.5">
                    <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>

        </div>
        <div class="mt-10">
            <button id="btn-submit" type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Let's talk
            </button>
        </div>
    </form>
</div>
@endsection

@section('script')

<script>
    // let btn = document.querySelector('#btn');
    // let terms = document.querySelector('#terms');


    // btn.addEventListener('click', () => {
    //     btn.classList.toggle('bg-indigo-600');
    //     terms.classList.toggle('translate-x-3.5');
    // });


    let btnSubmit = document.querySelector('#btn-submit');

    // <!-- emailjs to mail contact form data -->
    btnSubmit.addEventListener('click', (e) => {
        e.preventDefault();

        emailjs.init('obL17FZiVvINkgkPZ')

        emailjs
            .sendForm('service_4fo4xcn', 'template_l3qdfyd', '#contact-form')
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