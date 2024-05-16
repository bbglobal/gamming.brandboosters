@extends('layouts.main')

@push('title')
    <title>Brandboosters - Portfolio</title>
@endpush
@section('main-section')
    <section class="hero-other hero-portfolio">
        <h1 class="animate__animated animate__jackInTheBox">
            <strong>Our Portfolio</strong>
        </h1>
    </section>

    <section id="body">
        <div class="container">
            <div class="row py-5" style="overflow-x: hidden;">
                <div class="col-12 text-center">
                    <h2>Table Of Content</h2>
                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                        <div class="table-of-content">
                            <a href="#logos">
                                Logos
                            </a>
                        </div>
                        <div class="table-of-content">
                            <a href="#emotes">
                                Emotes
                            </a>
                        </div>
                        {{-- <div class="table-of-content">
                            <a href="#animtaion">
                                Animation Emotes
                            </a>
                        </div> --}}
                        <div class="table-of-content">
                            <a href="#banners">
                                Banners
                            </a>
                        </div>
                        {{-- <div class="table-of-content">
                            <a href="#animtaion">
                                Static Overlay
                            </a>
                        </div> --}}
                        {{-- <div class="table-of-content">
                            <a href="#sub-banners">
                                Sub Badges
                            </a>
                        </div>
                        <div class="table-of-content">
                            <a href="#animtaion">
                                Montage
                            </a>
                        </div>
                        <div class="table-of-content">
                            <a href="#animtaion">
                                Vtubers
                            </a>
                        </div>
                        <div class="table-of-content">
                            <a href="#animtaion">
                                Animations
                            </a>
                        </div> --}}
                    </div>
                </div>

                <div class="col-12 text-center py-5 mt-5">
                    <h3 id="logos">Text Logos</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/text-logos/8.png" data-fancybox="gallery" style="width: 500px;">
                        <img src="assets/img/portfolio/text-logos/8.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/text-logos/5.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/text-logos/5.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/text-logos/4.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/text-logos/4.png" alt="image" width="100%">
                    </a>
                </div>

                <div class="col-12 text-center py-5 mt-5">
                    <h3>CHARACTER Logos</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/character-logo/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/character-logo/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/character-logo/2.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/character-logo/2.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/character-logo/3.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/character-logo/3.png" alt="image" width="100%">
                    </a>
                </div>

                <div class="col-12 text-center py-5 mt-5">
                    <h3>CARTOON ART Logos</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/cartoon-art/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/cartoon-art/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/cartoon-art/2.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/cartoon-art/2.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/cartoon-art/3.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/cartoon-art/3.png" alt="image" width="100%">
                    </a>
                </div>

                <div class="col-12 text-center py-5 mt-5">
                    <h3 id="emotes">EMOTES</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/emotes/4.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/emotes/4.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/emotes/5.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/emotes/5.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/emotes/3.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/emotes/3.png" alt="image" width="100%">
                    </a>
                </div>

                <div class="col-12 text-center py-5 mt-5">
                    <h3>CHIBBI EMOTES</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/chibbi-emotes/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/chibbi-emotes/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/chibbi-emotes/2.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/chibbi-emotes/2.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/chibbi-emotes/3.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/chibbi-emotes/3.png" alt="image" width="100%">
                    </a>
                </div>

                <div class="col-12 text-center py-5 mt-5">
                    <h3 id="banners">Text Banners</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/text-banners/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/text-banners/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/text-banners/2.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/text-banners/2.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/text-banners/3.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/text-banners/3.png" alt="image" width="100%">
                    </a>
                </div>

                <div class="col-12 text-center py-5 mt-5">
                    <h3>Cartoon Art Banners</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/cartoon-banner/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/cartoon-banner/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/cartoon-banner/2.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/cartoon-banner/2.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/cartoon-banner/3.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/cartoon-banner/3.png" alt="image" width="100%">
                    </a>
                </div>
                

                <div class="col-12 text-center py-5 mt-5">
                    <h3>Character Banners</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/character-banner/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/character-banner/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/character-banner/2.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/character-banner/2.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/character-banner/3.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/character-banner/3.png" alt="image" width="100%">
                    </a>
                </div>

                <div class="col-12 text-center py-5 mt-5">
                    <h3>Panels</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/panels/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/panels/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/panels/2.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/panels/2.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/panels/3.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/panels/3.png" alt="image" width="100%">
                    </a>
                </div>

                {{-- <div class="col-12 text-center py-5 mt-5">
                    <h3>Static Overlay</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div> --}}

                <div class="col-12 text-center py-5 mt-5">
                    <h3>Sub Badges</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/sub-badges/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/sub-badges/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/sub-badges/2.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/sub-badges/2.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/sub-badges/3.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/sub-badges/3.png" alt="image" width="100%">
                    </a>
                </div>

                <div class="col-12 text-center py-5 mt-5">
                    <h3>Digita Art</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/digital-art/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/digital-art/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/digital-art/2.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/digital-art/2.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/digital-art/4.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/digital-art/4.png" alt="image" width="100%">
                    </a>
                </div>

                {{-- <div class="col-12 text-center py-5 mt-5">
                    <h3>Montages</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div>

                <div class="col-12 text-center py-5 mt-5">
                    <h3>VTubers</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div>

                <div class="col-12 text-center py-5 mt-5">
                    <h3>Animations</h3>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-4 pt-5">
                    <a href="assets/img/portfolio/1.png" data-fancybox="gallery">
                        <img src="assets/img/portfolio/1.png" alt="image" width="100%">
                    </a>
                </div> --}}
                
            </div>
        </div>
    </section>
@endsection
