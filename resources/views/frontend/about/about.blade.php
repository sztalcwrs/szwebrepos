@extends('frontend.layouts.app')



@section('style')

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(100, 110, 0, 0.7);
        margin: 8px;

    }

    .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
    }

    .container {
        padding: 0 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #25d366;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }

    h1 {
        margin-bottom: 20px;
    }

    p {
        text-align: left;
        margin-bottom: 10px;
    }

    h2 {
        margin-top: 30px;
        font-size: 20px;
    }

    .imgBox {
        display: flex;
        align-items: center;
        justify-content: center;

    }
</style>
@endsection

@section('content')
<div class="about-section">
    <h1>About Our Company</h1>
    <p>
        Welcome to Sardar Zadran Trade & Agriculture, Live Stock Company! Based in Afghanistan, we specialize in providing
        top-notch healthcare solutions for poultry, with a primary focus on chickens.
    </p>
    <p>
        At Sardar Zadran, we import specialized medications exclusively designed for the well-being of chickens. Our imported
        veterinary medicines are trusted by poultry farmers across Afghanistan, ensuring the health and vitality of their
        feathered flocks. From easy-to-administer drugs to specially formulated chicken feed for all stages of life, we are
        committed to promoting the strength and happiness of poultry.
    </p>
    <p>
        Our mission is clear: to contribute to the thriving life of every chicken in Afghanistan. By collaborating closely
        with poultry farmers and veterinarians, we aim to deliver the best possible care to every bird under our wing.
    </p>
    <p>

        Join us on our journey to make Afghanistan a better place for our poultry friends. Together, we can make a significant
        impact on the well-being of chickens and the poultry industry as a whole!
    </p>


</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
    <div class="column">
        <div class="card">
            <div class="imgBox">
                <img src="{{asset('backend/imgages/profile/ceo.jpg')}}" alt="Jane" style="width:70%">
            </div>
            <div class="container">
                <h2>Mohammad Sardar Hamdard</h2>
                <p class="title button">CEO & Founder</p>
                <!-- <p><a href="mailto:" ceo@szpoultry.com">ceo@szpoultry.com</a></p>
    <p><a class="button" href="https://wa.me/93788803262" target="_blank"><i class="fab fa-whatsapp"></i>
                        Whatsapp</a></p> -->
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <div class="imgBox">
                <img src="{{asset('backend/imgages/profile/qaseem.jpg')}}" alt="Jane" style="width:70%">
            </div>
            <div class="container">
                <h2>Muhammad Qaseem Hakimi</h2>
                <p class="title button">Program Director</p>
                <!-- <p><a href="mailto:" muhammad_qaseem@szpoultry.com">muhammad_qaseem@szpoultry.com</a></p>
                <p><a class="button" href="https://wa.me/93799301828" target="_blank"><i class="fab fa-whatsapp"></i>
                        Whatsapp</a></p> -->
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <div class="imgBox">
                <img src="{{asset('backend/imgages/profile/niazy.jpg')}}" alt="Jane" style="width:70%">
            </div>
            <div class="container">
                <h2>Abdul Jabar Niazy</h2>
                <p class="title button">Data Entry Officer</p>
                <!-- <p><a href="mailto:" abduljabarniazy@szpoultry.com">abduljabarniazy@szpoultry.com</a></p>
                <p><a class="button" href="https://wa.me/93782060215" target="_blank"><i class="fab fa-whatsapp"></i>
                        Whatsapp</a></p> -->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="column">
        <div class="card">
            <div class="imgBox">
                <img src="{{asset('backend/imgages/profile/fazal.jpg')}}" alt="Jane" style="width:70%">
            </div>
            <div class="container">
                <h2>Fazal Rahman Azizi</h2>
                <p class="title button">Doctor</p>
                <!-- <p><a href="mailto:" fazalrahman_azizi@szpoultry.com">fazalrahman_azizi@szpoultry.com</a></p>
                <p><a class="button" href="https://wa.me/93731459023" target="_blank"><i class="fab fa-whatsapp"></i>
                        Whatsapp</a></p> -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="imgBox">
                    <img src="{{asset('backend/imgages/profile/abdullah.jpeg')}}" alt="Jane" style="width:70%">
                </div>
                <div class="container">
                    <h2>Abdullah Zadran</h2>
                    <p class="title button">Sale Manager</p>
                    <!-- <p><a href="mailto:" abdullah@szpoultry.com">abdullah@szpoultry.com</a></p>
                    <p><a class="button" href="https://wa.me/93731426658" target="_blank"><i
                                class="fab fa-whatsapp"></i> Whatsapp</a></p> -->
                </div>
            </div>
        </div>
    </div>

</div>
@endsection