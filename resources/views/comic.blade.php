@extends('layouts.main')

@push('title')
    <title>Brandboosters - Comic Services</title>
@endpush
@section('main-section')
    <section class="hero-other hero-services">
        <h1 class="animate__animated animate__jackInTheBox">
            <strong>Comic Services</strong>
        </h1>
    </section>

    <section id="body">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 pb-5 text-center">
                    <h2>Unleash the Power of Imagination with Our Comic Services</h2>
                    <p style="font-size: 20px;">Are you ready for an epic journey through the world of comics and graphic novels? Brand Boosters Gaming is your one-stop shop for all things comic-related. Our creative team is ready to bring your wildest comic fantasies to life. We have something for everyone, whether you like superheroes, slice-of-life drama, humor, non-fiction, science fiction/fantasy, or horror.</p>
                </div>


                <div class="col-12 text-center">
                    <span>COMIC STRIP</span>
                    <h2>Book Designs</h2>
                    <div class="row py-5">
                        <div class="why-bg col-12 col-md-12 col-lg-3 x-5" data-aos="fade-up" data-aos-duration="1000">
                            <div class="col-12 text-center">
                                <img src="assets/img/pen.png" alt="image" width="100px">
                            </div>
                            <div class="col-12 text-center">
                                <h4 class="pt-3">Superhero</h4 class="pt-3">
                            </div>
                            <div class="col-12 text-center">
                                <p>Enter the thrilling world of caped crusaders, vigilantes, and superpowers. With each turn of the page, you'll feel like you're saving the world thanks to our superhero comic designs.</p>
                                <div class="btn-brandboosters" style="margin: auto;">
                                    <a href="{{ route('graphics') }}">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="why-bg col-12 col-md-12 col-lg-3 x-5" data-aos="fade-up" data-aos-duration="1200">
                            <div class="col-12 text-center">
                                <img src="assets/img/slice.png" alt="image" width="100px">
                            </div>
                            <div class="col-12 text-center">
                                <h4 class="pt-3">Slice-of-Life</h4 class="pt-3">
                            </div>
                            <div class="col-12 text-center">
                                <p>Immerse yourself in the everyday adventures and dramas of ordinary people in extraordinary ways. Our slice-of-life comics capture the essence of the human experience through heartwarming storytelling.</p>
                                <div class="btn-brandboosters" style="margin: auto;">
                                    <a href="{{ route('animation') }}">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="why-bg col-12 col-md-12 col-lg-3 x-5" data-aos="fade-up" data-aos-duration="1400">
                            <div class="col-12 text-center">
                                <img src="assets/img/humor.png" alt="image" width="100px">
                            </div>
                            <div class="col-12 text-center">
                                <h4 class="pt-3">Humor</h4 class="pt-3">
                            </div>
                            <div class="col-12 text-center">
                                <p>GLaughter is the best medicine, and our humor comics are the medicine you need. Prepare for a hilarious journey filled with witty punchlines and comedic genius.</p>
                                <div class="btn-brandboosters" style="margin: auto;">
                                    <a href="{{ route('animation') }}">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="why-bg col-12 col-md-12 col-lg-3 x-5" data-aos="fade-up" data-aos-duration="1600">
                            <div class="col-12 text-center">
                                <img src="assets/img/fiction.png" alt="image" width="100px">
                            </div>
                            <div class="col-12 text-center">
                                <h4 class="pt-3">Non-fiction</h4 class="pt-3">
                            </div>
                            <div class="col-12 text-center">
                                <p>With our non-fiction comic designs, you can delve into the realms of reality. From historical accounts to informative narratives, we transform facts into visually compelling stories.</p>
                                <div class="btn-brandboosters" style="margin: auto;">
                                    <a href="{{ route('animation') }}">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="why-bg col-12 col-md-12 col-lg-3 x-5" data-aos="fade-up" data-aos-duration="1800">
                            <div class="col-12 text-center">
                                <img src="assets/img/science.png" alt="image" width="70px">
                            </div>
                            <div class="col-12 text-center">
                                <h4 class="pt-3">Fantasy/Science Fiction</h4 class="pt-3">
                            </div>
                            <div class="col-12 text-center">
                                <p>Travel to distant galaxies, magical realms, and alternate dimensions. Our science fiction and fantasy comics transport you to unknown worlds where anything is possible.</p>
                                <div class="btn-brandboosters" style="margin: auto;">
                                    <a href="{{ route('contact') }}">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="why-bg col-12 col-md-12 col-lg-3 x-5" data-aos="fade-up" data-aos-duration="2000">
                            <div class="col-12 text-center">
                                <img src="assets/img/horror.png" alt="image" width="100px">
                            </div>
                            <div class="col-12 text-center">
                                <h4 class="pt-3">Horror</h4 class="pt-3">
                            </div>
                            <div class="col-12 text-center">
                                <p>Thrill seekers, brace yourselves. As you explore the darkest corners of your imagination, our horror comics will send shivers down your spine.</p>
                                <div class="btn-brandboosters" style="margin: auto;">
                                    <a href="{{ route('graphics') }}">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-6">
                    <h3>Graphic
                        Novel Designs</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row why-bg" data-aos="fade-right" data-aos-duration="1000">
                        <div class="col-2">
                            <img src="assets/img/folder.png" alt="image" width="100%">
                        </div>
                        <div class="col-10" style="margin: auto;">
                            <p> Use our graphic novel designs to take your superhero stories to the next level. Experience the evolution of your favorite heroes like never before.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row why-bg" data-aos="fade-right" data-aos-duration="1200">
                        <div class="col-2">
                            <img src="assets/img/impact.png" alt="image" width="100%">
                        </div>
                        <div class="col-10" style="margin: auto;">
                            <p>Immerse yourself in the enchanting world of manga, where intricate art meets captivating storytelling. Our manga designs capture the essence of this popular Japanese art form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row why-bg" data-aos="fade-right" data-aos-duration="1400">
                        <div class="col-2">
                            <img src="assets/img/cost-effective.png" alt="image" width="100%">
                        </div>
                        <div class="col-10" style="margin: auto;">
                            <p>Using our graphic novel designs, you can share your personal stories with the world. We turn your life into a visual masterpiece, whether it's a memoir or an autobiography.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row why-bg" data-aos="fade-right" data-aos-duration="1600">
                        <div class="col-2">
                            <img src="assets/img/guarantee.png" alt="image" width="100%">
                        </div>
                        <div class="col-10" style="margin: auto;">
                            <p>Our nonfiction graphic novels educate and inspire. From educational content to biographies, we make learning visually engaging.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row why-bg" data-aos="fade-right" data-aos-duration="1800">
                        <div class="col-2">
                            <img src="assets/img/impact.png" alt="image" width="100%">
                        </div>
                        <div class="col-10" style="margin: auto;">
                            <p>Break away from the typical superhero narrative. Our graphic novel designs bring to life unique and diverse stories that demonstrate the breadth of human experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h2 class="py-5">Manga Desing</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-3 x-5 why-bg" data-aos="fade-up" data-aos-duration="1000">
                    <img src="assets/img/folder.png" alt="image">
                    <span>Shonen</span>
                    <p> For the action-packed adventures and battles that keep you on the edge of your seat, our Shonen manga design is your gateway to excitement and friendship.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-3 x-5 why-bg" data-aos="fade-up" data-aos-duration="1200">
                    <img src="assets/img/folder.png" alt="image">
                    <span>Shoujo</span>
                    <p>Our shoujo manga design allows you to experience the magic of romance, friendship, and personal growth. These stories are filled with heartwarming moments and emotional depth.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-3 x-5 why-bg" data-aos="fade-up" data-aos-duration="1400">
                    <img src="assets/img/folder.png" alt="image">
                    <span>Kodomomuke manga</span>
                    <p>Introduce your children to the world of manga with our kodomomuke designs. These kid-friendly stories encourage imagination and creativity in young minds.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
