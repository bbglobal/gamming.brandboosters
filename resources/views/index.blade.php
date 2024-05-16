@extends('layouts.main')

@push('title')
    <title>Brandboosters - Home</title>
@endpush
@section('main-section')
    <section id="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto; z-index:2;">
                    <h1>Animating <strong>Your</strong> Imaginations <strong>into</strong> Reality.</h1>
                    <p>At Brand Boosters Gaming, we understand the importance of design and its impact on the success of your brand. We have the creative firepower to make your vision a reality, whether you're a streamer, gamer, or a business looking to improve your online presence.</p>
                    <div>
                        <div class="btn-brandboosters">
                            <a href="{{route('contact')}}">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img class="hero-img" src="assets/img/hero-img.png" alt="hero image">
                </div>
            </div>
        </div>
        <div class="gradient">
            <img src="assets/img/gradient.png" alt="image">
        </div>
    </section>

    <section id="services" class="offer">
        <div class="container py-3">
            <div class="row">
                <div class="col-12 py-3">
                    <h2>
                        <strong>What We Offer ?</strong>
                    </h2>
                </div>
                <div class="card-wrapper py-3">
                    <div class="card card-graphics" data-aos="fade-up" data-aos-duration="1000">
                        <h5>Graphics DesigninG &
                            Brand Advertising</h5>
                        <p>Our graphic design services are a pixel-perfect blend of creativity and strategy. We create eye-catching visuals and compelling brand advertising materials to help your gaming brand stand out from the crowd. We create visuals that leave a lasting impression, from stunning logo designs to captivating banners and social media assets.</p>
                    </div>
                    <div class="card card-animation" data-aos="fade-up" data-aos-duration="1200">
                        <h5>2D And 3D
                            Animation</h5>
                        <p>Dive into the world of immersive animation with us. Our talented animators bring your ideas to life by creating captivating 2D and 3D animations that resonate with your audience. Whether it's animated intros, character animations, or motion graphics, we bring your vision to life in the most dynamic way possible.</p>
                    </div>
                    <div class="card card-web" data-aos="fade-up" data-aos-duration="1400">
                        <h5>Website Designing &
                            Development</h5>
                        <p>Your website is your digital home, and we make it welcoming and engaging. Our expert web designers and developers create visually appealing and responsive websites that provide an exceptional user experience. We create websites that get results, whether you need an online portfolio or an e-commerce platform.</p>
                    </div>
                </div>
                <div class="btn-brandboosters mt-5" style="margin:0 auto">
                    <a href="{{route('services')}}">View More</a>
                </div>
            </div>
        </div>
    </section>

    
    <section id="about">
        <div class="container py-3">
            <div class="row">
                <div class="col-12 text-center py-3">
                    <h2>
                        <strong>About Us</strong>
                    </h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <span>Who We Are ?</span>
                    <br /><br />
                    <p>Welcome to Brand Boosters Gaming, a passionate team of gamers, designers, and tech enthusiasts who live and breathe creativity. We are committed to pushing the boundaries of the design world and assisting you in achieving your goals.</p>
                    <div class="btn-brandboosters mt-5">
                        <a href="{{route("about")}}">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/about-img.png" alt="image" width="100%">
                </div>
            </div>
        </div>
    </section>

    <section id="services-2" class="services">
        <div class="container py-3">
            <div class="row">
                <div class="col-12 text-center py-3">
                    <span>What we do ?</span>
                    <h2>
                        <strong>Our Services</strong>
                    </h2>
                </div>
                <div class="card-wrapper card-services py-3">
                    <div class="card design my-3" data-aos="fade-up" data-aos-duration="1000">
                        <h5>Design</h5>
                        <p>Our design team, like our imagination, knows no bounds. Our designers have the creative prowess to make your brand stand out in the crowded gaming world, from eye-catching logos to breathtaking artwork.</p>
                    </div>
                    <div class="card animation my-3" data-aos="fade-up" data-aos-duration="1200">
                        <h5>Animation</h5>
                        <p>Use our captivating animations to bring your brand to life. Our animations will leave a lasting impression on your audience, whether it's a logo animation, in-game graphics, or promotional videos.</p>
                    </div>
                    <div class="card web my-3" data-aos="fade-up" data-aos-duration="1400">
                        <h5>Website Development</h5>
                        <p>Your website is frequently the first point of contact between gamers and your brand. Our website design professionals create visually appealing, user-friendly websites that are tailored to the specific needs of the gaming industry.</p>
                    </div>
                    <div class="card gaming my-3" data-aos="fade-up" data-aos-duration="1600">
                        <h5>Gamming Overlay</h5>
                        <p> Enhance your streams with eye-catching overlays. Our gaming overlays enhance the viewer experience by adding a professional touch to your live broadcasts.</p>
                    </div>
                    <div class="card emotes my-3" data-aos="fade-up" data-aos-duration="1800">
                        <h5>Emotes</h5>
                        <p>Emotes are the language of Twitch and other gaming platforms. Our emote designs are customized to your brand, so your audience will see a collection of emotes that truly represent your community.</p>
                    </div>
                    <div class="card mascot my-3" data-aos="fade-up" data-aos-duration="2000">
                        <h5>Mascot Logo</h5>
                        <p>Mascots give your brand a recognizable face. Our mascot designs are instantly recognizable, making your brand stand out.</p>
                    </div>
                </div>
                <div class="btn-brandboosters mt-5" style="margin:0 auto">
                    <a href="{{route('packages')}}">Read More</a>
                </div>
            </div>
        </div>
    </section>

    
    <section id="stream">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <h2>
                        <strong>
                            We Design Everything You Want For Your Streaming Channel
                        </strong>
                    </h2>
                    <p>Brand Boosters Gaming is your one-stop shop for creating an enthralling streaming channel. We have the expertise to take your gaming content to the next level, from unique stream graphics and Twitch overlays to mesmerizing animations and gaming logos. We have you covered whether you want a cool and unique look or something truly extraordinary.</p>
                    <div class="btn-brandboosters mt-5" style="margin:0 auto">
                        <a href="{{route('portfolio')}}">View More</a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row stream" data-aos="fade-right" data-aos-duration="1500">
                        <div class="col-12 col-md-6 col-lg-4 text-center">
                            <div class="img-container"><img src="assets/img/twitch.png" alt="image" width="100%"></div>
                            <div class="img-container"><img src="assets/img/streamlabs.png" alt="image" width="100%"></div>
                            <div class="img-container"><img src="assets/img/discord.png" alt="image" width="100%"></div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 text-center">
                            <div class="img-container"><img src="assets/img/fb-gamming.png" alt="image" width="100%"></div>
                            <div class="img-container"><img src="assets/img/youtube.png" alt="image" width="100%"></div>
                            <div class="img-container"><img src="assets/img/wirecast.png" alt="image" width="100%"></div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 text-center">
                            <div class="img-container"><img src="assets/img/vidBlaster.png" alt="image" width="100%"></div>
                            <div class="img-container"><img src="assets/img/vMix.png" alt="image" width="100%"></div>
                            <div class="img-container"><img src="assets/img/OBS-Studio.png" alt="image" width="100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-us">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <span>Why Choose Us</span>
                    <h2>We make your business look good.</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6 why-bg" data-aos="flip-right" data-aos-duration="1000">
                    <h4>Unparalleled Creativity</h4>
                    <p>We're not just designers; we're gamers who understand your world. Our imagination knows no bounds, ensuring your brand’s success and visibility.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 why-bg" data-aos="flip-right" data-aos-duration="1200">
                    <h4>Custom Solutions</h4>
                    <p>Because every project is unique, we tailor our services to meet your specific requirements. Our mission is to help you realize your vision.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 why-bg" data-aos="flip-left" data-aos-duration="1400">
                    <h4>Quality Assurance</h4>
                    <p>We're obsessed with it. Expect nothing less than pixel-perfect designs, smooth animations, and error-free websites.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 why-bg" data-aos="flip-left" data-aos-duration="1600">
                    <h4>Timely Delivery</h4>
                    <p>We value your time. Your projects are delivered on time and with high quality.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <h3>We believe that our work can contribute to a better Digital world.</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row why-bg">
                        <div class="col-2">
                            <img src="assets/img/folder.png" alt="image" width="100%">
                        </div>
                        <div class="col-10" style="margin: auto;">
                            <p>Piloting your idea to life in the face of 2D and 3D animated videos</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6" data-aos="fade-right" data-aos-duration="1200">
                    <div class="row why-bg">
                        <div class="col-2">
                            <img src="assets/img/impact.png" alt="image" width="100%">
                        </div>
                        <div class="col-10" style="margin: auto;">
                            <p>Impactful changes and supreme audience</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6" data-aos="fade-right" data-aos-duration="1400">
                    <div class="row why-bg">
                        <div class="col-2">
                            <img src="assets/img/cost-effective.png" alt="image" width="100%">
                        </div>
                        <div class="col-10" style="margin: auto;">
                            <p>Cost-effective and time-saving</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6" data-aos="fade-right" data-aos-duration="1600">
                    <div class="row why-bg">
                        <div class="col-2">
                            <img src="assets/img/guarantee.png" alt="image" width="100%">
                        </div>
                        <div class="col-10" style="margin: auto;">
                            <p>Guaranteed quality work and budget-friendly packages</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6" data-aos="fade-right" data-aos-duration="1800">
                    <div class="row why-bg">
                        <div class="col-2">
                            <img src="assets/img/impact.png" alt="image" width="100%">
                        </div>
                        <div class="col-10" style="margin: auto;">
                            <p>Updated features of 2D and 3D animation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section id="portfolio" class="services">
        <div class="container py-3">
            <div class="row">
                <div class="col-12 text-center py-3">
                    <h2>
                        <strong>Our Portfolio</strong>
                    </h2>
                </div>
                <div class="card-wrapper py-3">
                    <div class="card design my-3">
                        <h5>Design</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore </p>
                    </div>
                    <div class="card animation my-3">
                        <h5>Animation</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore </p>
                    </div>
                    <div class="card web my-3">
                        <h5>Website Development</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore </p>
                    </div>
                    <div class="card gaming my-3">
                        <h5>Gamming Overlay</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore </p>
                    </div>
                    <div class="card emotes my-3">
                        <h5>Emotes</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore </p>
                    </div>
                    <div class="card mascot my-3">
                        <h5>Mascot Logo</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore </p>
                    </div>
                </div>
                <div class="btn-brandboosters mt-5" style="margin:0 auto">
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
