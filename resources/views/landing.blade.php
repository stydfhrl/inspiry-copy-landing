@extends('layout.main')

@section('content')
<div class="container-fluid container-gallery">   
    <div class="gallery-title">
        <h1>GALLERY</h1>
    </div>
    <div class="gallery-card-container">
        <div class="gallery-card-top">
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery1.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>COMPANY PROFILE - PT. INSPIRY INDONESIA KONSULTAN</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery2.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>IT | TIME MANAGEMENT YANG BAIK</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery3.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>TEASER | INSPIRY HADIR DI INDO LIVESTOCK 2022 EXHIBITION</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery4.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>IT | MENTAL BAJA</h6>
                </div>
            </div>
        </div>
        <div class="gallery-card-bottom">
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery5.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>TEASER LEADERSHIP VIBES 26 MARET 2022 AT HOTEL ASTON PRIORITY SIMATUPANG & CONFERENCE CENTER</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery6.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>OBRAS | TIPS SUKSES BISNIS ALAT KESEHATAN EPISODE 2</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery7.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>OBRAS | TIPS SUKSES BISNIS ALAT KESEHATAN EPISODE 3</h6>
                </div>
            </div>
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="img/gallery8.jpeg" alt="">
                </div>
                <div class="gallery-content">
                    <h6>OBRAS | TIPS SUKSES DI BISNIS ALAT KESEHATAN PENGALAMAN EPISODE TESTIMONI PT MEGA GLOBAL PRATAMA</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid container-about-us text-end fw-bold" style="margin-top: 7vh; height:150vh;">
    <h1 style="font-size: 45px;letter-spacing: 8px;color:red;text-shadow: 2px 1px #ff0000da; font-weight:600; text-shadow:1px 1px 2px black">ABOUT</h1>
    <h1 style="font-size: 50px;letter-spacing: 8px;text-shadow: 2px 1px #2c2c2cda; font-weight:600; text-shadow:1px 1px 2px black">US</h1>
    <div class="circlenyaya position-relative mt-4" style="display: flex;gap: .6rem;float:right; margin-right:1rem">
        <div class="circle-1" style="width:6px; height:6px;border-radius:30px;background:rgb(0, 0, 0)"></div>
        <div class="circle-1" style="width:6px; height:6px;border-radius:30px;background:rgb(0, 0, 0)"></div>
        <div class="circle-1" style="width:6px; height:6px;border-radius:30px;background:rgb(0, 0, 0)"></div>
    </div>

    <div class="imgleft" style="position: relative;top:-7rem; right:2rem">
        <img src="{{ asset('circle-pink.png') }}" alt="" width="800px" >
        <img src="{{ asset('circle-red.png') }}" alt="" style="position:relative;right:40rem">
        <img src="img/logo.png" alt="" width="300px" style="position: relative;top:-34rem;right: 48rem">
    </div>

    <div class="text-right text-start position-relative" style="float: right;top:-64rem;">
        <p style=" letter-spacing: .3px;font-weight:400;font-size:18px">INSPIRY INDONESIA CONSULTANT Founded in September 2019 is one of the consulting </br> </p>
        <p style="font-weight:400;font-size:18px;margin-top:-1rem">companies that is present in order to improve the competitiveness of the company which </br></p>
        <p style=" letter-spacing: -.3px;font-weight:400;font-size:18px;margin-top:-1rem">concentrates on productive management, good company quality standards and a strong work</br></p><p style="font-weight:400;font-size:18px;margin-top:-1rem">team.</p> 

        <p style=" letter-spacing: -.3px;font-weight:400;font-size:18px">In productive management, the scope of the collaboration includes current condition analysis,</br> </p>
        <p style=" letter-spacing: -.2px;font-weight:400;font-size:18px;margin-top:-1rem">company grand design, business implementation plan, and breakthroughs needed in order to</br></p>
        <p style=" letter-spacing: -.3px;font-weight:400;font-size:18px;margin-top:-1rem">accelerate the achievement of targets in the work plan. This is a guideline so that the company</br></p>
        <p style=" letter-spacing: -.1px;font-weight:400;font-size:18px;margin-top:-1rem">runs according to what has been agreed by all shareholders, is easy to control, and can adapt</br></p>
        <p style="font-weight:400;font-size:18px;margin-top:-1rem">quickly.</p> 

        <p style=" letter-spacing: -.3px;font-weight:400;font-size:18px">The quality of the company’s standards is important in future competition so that the company’s</br> </p>
        <p style=" letter-spacing: -.2px;font-weight:400;font-size:18px;margin-top:-1rem">position in the market is more credible, competent and classy.</br></p>

        <p style=" letter-spacing: -.3px;font-weight:400;font-size:18px">We also have training modules that vary greatly according to the demands of the times and the</br> </p>
        <p style=" letter-spacing: .3px;font-weight:400;font-size:18px;margin-top:-1rem">company, which are expected to improve the performance of the work team as a whole,</br></p>
        <p style=" letter-spacing: .2px;font-weight:400;font-size:18px;margin-top:-1rem">standardized and sustainable. This can also support the creation of a productive climate in</br></p>
        <p style=" letter-spacing: -.1px;font-weight:400;font-size:18px;margin-top:-1rem">creating future leaders within the company.</br></p>

        <p style=" letter-spacing: -.1px;font-weight:400;font-size:18px">Part of our success stems from our motto “Your Trusted Partner”. This motto has become the</br> </p>
        <p style=" letter-spacing: -.2px;font-weight:400;font-size:18px;margin-top:-1rem">DNA in our daily life where we always strive to provide the best service and are responsible for</br></p>
        <p style=" letter-spacing: -.5px;font-weight:400;font-size:18px;margin-top:-1rem">all our customers. Customer satisfaction is very important to us which is why we are committed to</br></p>
        <p style=" letter-spacing: -.3px;font-weight:400;font-size:18px;margin-top:-1rem">always pushing our customer service standards and providing the right solution for your business</br></p>
        <p style=" letter-spacing: -.1px;font-weight:400;font-size:18px;margin-top:-1rem">needs.</br></p>
    </div>
</div>

<div class="container-fluid container-handshake">
    <div class="handshake-overlay">
        <div class="handshake-content">
            <h3>YOUR</h3>
            <h3>TRUSTED PARTNER</h3>
            <div class="handshake-dot">
                <div class="dot-1"></div>
                <div class="dot-1"></div>
                <div class="dot-1"></div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid container-culture">
    <div class="culture">
        <div class="culture-title">
            
        </div>
        <div class="culture-card">
            
        </div>
    </div>


<div class="container-fluid container-our-team">
    <div class="our-team-title d-flex">
        <h1 class="text-white fw-bold position-relative" style="font-size: 55px;text-shadow:1px 3px rgba(0, 0, 0, 0.534);padding-left: 31rem; ">OUR </h1>
        <h1 class="text-white fw-bold position-relative ms-4" style="font-size: 55px;text-shadow:1px 3px rgba(0, 0, 0, 0.534);">TEAM</h1>
    </div>

    <div class="img-1 position-absolute text-white" style="padding-left: 6rem;padding-top: 2rem">
        <img src="{{ asset('img/Pak-Lukman.png') }}" alt="" class="paklukman" width="210px" style="top: -12rem;">
        <div class="textnya mt-5">
        <h4 style="text-shadow:2px 1px rgb(59, 59, 59);margin-left:.5rem;letter-spacing: 2.4px;font-weight:600">Lukmanul Hakim</h4>
        <p style="font-size:15px;margin-left:1.1rem;letter-spacing: 1px;">OPERATIONAL DIRECTOR</p>
        </div>
    </div>

    <div class="img-2 position-absolute text-white" style="padding-left: 21rem;padding-top: 5rem">
        <img src="{{ asset('img/Pak-Sony.png') }}" alt="" style="" width="210px" style="top: -12rem;">
        <div class="textnya mt-5">
        <h4 style="text-shadow:2px 1px rgba(80, 80, 80, 0.959);margin-left:.5rem;letter-spacing: 2.4px;font-weight:600">Marsono Mardi</h4>
        <p style="font-size:15px;margin-left: .1rem;letter-spacing: 1px;width:80%;text-align:center">PROGRAM DEVELOPMENT DIRECTOR</p>
        </div>
    </div>

    <div class="img-3 position-absolute text-white" style="padding-left: 34rem;padding-top: -5rem">
        <img src="{{ asset('img/Pak-Asrul.png') }}" alt="" style="" width="230px" style="top: -12rem;">
        <div class="textnya mt-5">
        <h4 style="text-shadow:2px 1px rgba(80, 80, 80, 0.959);margin-left:3.5rem;letter-spacing: 2.4px;font-weight:600">Asrul Sani</h4>
        <p style="font-size:15px;margin-left: .2rem;letter-spacing: 1px;text-align:center">PRESIDENT COMMISSIONER</p>
        </div>
    </div>

    
    <div class="img-4 position-absolute text-white" style="padding-left:49rem;padding-top: 5rem">
        <img src="{{ asset('img/Pak-Tanto.png') }}" alt="" style="" width="220px" style="top: -12rem;">
        <div class="textnya mt-5">
        <h4 style="text-shadow:2px 1px rgba(80, 80, 80, 0.959);margin-left:3.5rem;letter-spacing: 2.4px;font-weight:600">Hartanto</h4>
        <p style="font-size:15px;margin-left:2.5rem;letter-spacing: 1px;">PRESIDENT DIRECTOR</p>
        </div>
    </div>

    <div class="img-5 position-absolute text-white" style="padding-left:62rem;padding-top: 2rem">
        <img src="{{ asset('img/Pak-Pri.png') }}" alt="" style="" width="220px" style="top: -12rem;">
        <div class="textnya mt-5">
        <h4 style="text-shadow:2px 1px rgba(80, 80, 80, 0.959);margin-left:2.5rem;letter-spacing: 1.5px;font-weight:600">Supriya Lelana</h4>
        <p style="font-size:15px;margin-left:2rem;letter-spacing: 1px;">BOARD OF COMMISSIONER</p>
        </div>
    </div>

</div>

@endsection