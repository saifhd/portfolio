<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Saiful Islam</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    {{-- <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' /> --}}

    <!-- script
    ================================================== -->
    <script defer src="{{ asset('js/vendor/fontawesome/all.min.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    {{-- <link rel="manifest" href="site.webmanifest"> --}}

</head>

<body id="top" class="ss-preload">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">
        <div class="row s-header__nav-wrap">
            <nav class="s-header__nav">
                <ul>
                    <li class="current"><a class="smoothscroll" href="#hero">Home</a></li>
                    <li><a class="smoothscroll" href="#about">About</a></li>
                    <li><a class="smoothscroll" href="#resume">Resume</a></li>
                    <li><a class="smoothscroll" href="#portfolio">Works</a></li>
                    <li><a class="smoothscroll" href="#contact">Say Hello</a></li>
                </ul>
            </nav>
        </div> <!-- end row -->

        <a class="s-header__menu-toggle" href="#0" title="Menu">
            <span class="s-header__menu-icon"></span>
        </a>
    </header> <!-- end s-header -->


    <!-- hero
    ================================================== -->
    <section id="hero" class="s-hero target-section">

        <div class="s-hero__bg rellax" data-rellax-speed="-7"></div>

        <div class="row s-hero__content">
            <div class="column">

                <div class="s-hero__content-about">

                    <h1>I'm {{ $user->name }}</h1>

                    <h3>
                        {{ $user->description }}
                        <br>
                        Let's <a class="smoothscroll" href="#about">start scrolling</a>
                        and learn more <a class="smoothscroll" href="#about">about me</a>

                    </h3>

                    <div class="s-hero__content-social">
                        @if($user->facebook)
                            <a href="{{ $user->facebook }}" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                        @endif
                        @if($user->twitter)
                            <a href="{{ $user->twitter }}" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        @endif
                        @if($user->instagram)
                            <a href="{{ $user->instagram }}" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        @endif
                        @if($user->linkedin)
                            <a href="{{ $user->linkedin }}" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                        @endif
                        @if($user->github)
                            <a href="{{ $user->github }}" target="_blank"><i class="fab fa-github" aria-hidden="true"></i></a>
                        @endif
                        @if($user->bitbucket)
                            <a href="{{ $user->bitbucket }}" target="_blank"><i class="fab fa-bitbucket"></i></a>
                        @endif

                    </div>

                </div> <!-- end s-hero__content-about -->

            </div>
        </div> <!-- s-hero__content -->

        <div class="s-hero__scroll">
            <a href="#about" class="s-hero__scroll-link smoothscroll">
                <span class="scroll-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                        <path
                            d="M18.707 12.707L17.293 11.293 13 15.586 13 6 11 6 11 15.586 6.707 11.293 5.293 12.707 12 19.414z">
                        </path>
                    </svg>
                </span>
                <span class="scroll-text">Scroll Down</span>
            </a>
        </div> <!-- s-hero__scroll -->

    </section> <!-- end s-hero -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row">
            <div class="column large-3 tab-12">
                <img class="s-about__pic" src="{{ $user->avatar }}" alt="">
            </div>
            <div class="column large-9 tab-12 s-about__content">
                <h3>About Me</h3>
                <p>
                    {{ $user->about }}
                </p>

                <hr>

                <div class="row s-about__content-bottom">
                    <div class="column w-1000-stack">
                        <h3>Contact Details</h3>

                        <p>
                            {{ $user->name }} <br>
                            {{ $user->address_line_1 }} <br>
                            {{ $user->address_line_2 }} <br>
                            <a href="tel:{{ $user->mobile }}">{{ $user->mobile }}</a> <br>
                            <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                        </p>

                    </div>
                    <div class="column w-1000-stack">
                        <a href="{{ route('resume.download') }}" class="btn btn--download">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                <path d="M12 16L16 11 13 11 13 4 11 4 11 11 8 11z"></path>
                                <path d="M20,18H4v-7H2v7c0,1.103,0.897,2,2,2h16c1.103,0,2-0.897,2-2v-7h-2V18z"></path>
                            </svg>
                            Download CV
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->

    </section> <!-- end s-about -->


    <!-- resume
    ================================================== -->
    <section id="resume" class="s-resume target-section">

        <div class="row s-resume__section">
            <div class="column large-3 tab-12">
                <h3 class="section-header-allcaps">Career</h3>
            </div>
            <div class="column large-9 tab-12">
                @forelse ($careers as $career)
                    <div class="resume-block">

                        <div class="resume-block__header">
                            <h4 class="h3">{{ $career->company_name }}</h4>
                            <p class="resume-block__header-meta">
                                <span>{{ $career->title }}</span>
                                <span class="resume-block__header-date">
                                    {{ \Carbon\Carbon::parse($career->start_date)->isoFormat('LL') }} -
                                    {{ isset($career->end_date) ? \Carbon\Carbon::parse($career->end_date)->isoFormat('LL') : 'Present' }}
                                </span>
                            </p>
                        </div>

                        <p>
                            {{ $career->description }}
                        </p>

                    </div> <!-- end resume-block -->
                @empty

                @endforelse


            </div>
        </div> <!-- s-resume__section -->


        {{-- <div class="row s-resume__section">
            <div class="column large-3 tab-12">
                <h3 class="section-header-allcaps">Education</h3>
            </div>
            <div class="column large-9 tab-12">
                <div class="resume-block">

                    <div class="resume-block__header">
                        <h4 class="h3">University of Life</h4>
                        <p class="resume-block__header-meta">
                            <span>Master in Graphic Design</span>
                            <span class="resume-block__header-date">
                                April 2015
                            </span>
                        </p>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore
                        vero quidem nobis maxime dolorem aliquam quisquam eum ipsum amet. Vitae
                        aut atque fuga dolorem. Vel voluptatibus fugiat nam. Impedit aperiam
                        nesciunt facilis! Porro architecto dicta inventore tempora ratione quia odio.
                    </p>

                </div> <!-- end resume-block -->

                <div class="resume-block">

                    <div class="resume-block__header">
                        <h4 class="h3">School of Cool Designers</h4>
                        <p class="resume-block__header-meta">
                            <span>B.A. Degree in Graphic Design</span>
                            <span class="resume-block__header-date">
                                August 2012
                            </span>
                        </p>
                    </div>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore
                        vero quidem nobis maxime dolorem aliquam quisquam eum ipsum amet. Vitae
                        aut atque fuga dolorem. Vel voluptatibus fugiat nam. Impedit aperiam
                        nesciunt facilis! Porro architecto dicta inventore tempora ratione quia odio.
                    </p>

                </div> <!-- end resume-block -->
            </div>
        </div> --}}
        <div class="row s-resume__section">
            <div class="column large-3 tab-12">
                <h3 class="section-header-allcaps">Education</h3>
            </div>
            <div class="column large-9 tab-12">
                @forelse ($educations as $education)
                    <div class="resume-block">

                        <div class="resume-block__header">
                            <h4 class="h3">{{ $education->institute }}</h4>
                            <p class="resume-block__header-meta">
                                <span>{{ $education->course }}</span>
                                <span class="resume-block__header-meta">
                                    <span>{{ $education->title }}</span>
                                    <span class="resume-block__header-date">
                                        {{ \Carbon\Carbon::parse($education->start_date)->isoFormat('LL') }} -
                                        {{ isset($education->end_date) ? \Carbon\Carbon::parse($education->end_date)->isoFormat('LL') : 'Present' }}
                                    </span>
                                </span>
                            </p>
                        </div>

                        <p>
                            {{ $education->description }}
                        </p>

                    </div> <!-- end resume-block -->
                @empty

                @endforelse
            </div>
        </div>
        <!-- s-resume__section -->


        <div class="row s-resume__section">
            <div class="column large-3 tab-12">
                <h3 class="section-header-allcaps">Skills</h3>
            </div>
            <div class="column large-9 tab-12">
                <div class="resume-block">

                    {{-- <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore
                        vero quidem nobis maxime dolorem aliquam quisquam eum ipsum amet. Vitae
                        aut atque fuga dolorem. Vel voluptatibus fugiat nam. Impedit aperiam
                        nesciunt facilis! Porro architecto dicta inventore tempora ratione quia odio.
                    </p> --}}

                    <ul class="skill-bars-fat">
                        @forelse ($skills as $skill)
                            <li>
                                <div class="progress percent{{ $skill->percentage }}"></div>
                                <strong>{{ $skill->title }}</strong>
                            </li>
                        @empty

                        @endforelse
                        {{-- <li>
                            <div class="progress percent85"></div>
                            <strong>CSS</strong>
                        </li>
                        <li>
                            <div class="progress percent65"></div>
                            <strong>Javascript</strong>
                        </li>
                        <li>
                            <div class="progress percent90"></div>
                            <strong>Figma</strong>
                        </li>
                        <li>
                            <div class="progress percent75"></div>
                            <strong>Illustrator</strong>
                        </li>
                        <li>
                            <div class="progress percent60"></div>
                            <strong>Photoshop</strong>
                        </li> --}}
                    </ul>

                </div> <!-- end resume-block -->

            </div>
        </div> <!-- s-resume__section -->

    </section> <!-- end s-resume -->


    <!-- portfolio
    ================================================== -->
    <section id="portfolio" class="s-portfolio target-section">

        <div class="row s-portfolio__header">
            <div class="column large-12">
                <h3>Personal Projects</h3>
            </div>
        </div>

        <div class="row collapse block-large-1-4 block-medium-1-3 block-tab-1-2 block-500-stack folio-list">
            @forelse ($projects as $project)
                <div class="column folio-item">
                    <a href="#modal-0{{ $loop->iteration }}" class="folio-item__thumb">
                        <img src="{{ $project->image }}" srcset="{{ $project->image }} 1x,
                                    {{ $project->image }} 2x" alt="" style="height: 294.99px; width:294.99px;">
                    </a>
                </div> <!-- end folio-item -->

            @empty

            @endforelse



        </div> <!-- end folio-list -->


        <!-- Modal Templates Popup
        =========================================================== -->
        @forelse ($projects as $project)
        <div id="modal-0{{ $loop->iteration }}" hidden>
            <div class="modal-popup">
                <img src="{{ $project->image }}" alt="" style="width: 680px;" />

                <div class="modal-popup__desc">
                    <h5>{{ $project->name }}</h5>
                    {!! $project->details !!}

                </div>
                @if($project->source_link)
                    <a href="{{ $project->source_link }}" class="modal-popup__details">Project Source link</a>
                @endif
                @if($project->live_link)
                    <a href="{{ $project->live_link }}" class="modal-popup__details" style="margin-top:60px">Project Live link</a>
                @endif
            </div>
        </div> <!-- end modal -->
        @empty

        @endforelse



    </section> <!-- end s-portfolio -->





    <!-- testimonials
    ================================================== -->
    {{-- <section id="testimonials" class="s-testimonials target-section">

        <div class="s-testimonials__bg"></div>

        <div class="row s-testimonials__header">
            <div class="column large-12">
                <h3>Hear What My Clients Says</h3>
            </div>
        </div>

        <div class="row s-testimonials__content">

            <div class="column">

                <div class="swiper-container testimonial-slider">

                    <div class="swiper-wrapper">

                        <div class="testimonial-slider__slide swiper-slide">
                            <div class="testimonial-slider__author">
                                <img src="images/avatars/user-02.jpg" alt="Author image"
                                    class="testimonial-slider__avatar">
                                <cite class="testimonial-slider__cite">
                                    <strong>Tim Cook</strong>
                                    <span>CEO, Apple</span>
                                </cite>
                            </div>
                            <p>
                                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem.
                                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat
                                fuga rem nihil nostrum.
                                Laudantium quia consequatur molestias delectus culpa.
                            </p>
                        </div> <!-- end testimonial-slider__slide -->

                        <div class="testimonial-slider__slide swiper-slide">
                            <div class="testimonial-slider__author">
                                <img src="images/avatars/user-03.jpg" alt="Author image"
                                    class="testimonial-slider__avatar">
                                <cite class="testimonial-slider__cite">
                                    <strong>Sundar Pichai</strong>
                                    <span>CEO, Google</span>
                                </cite>
                            </div>
                            <p>
                                Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat
                                voluptas animi adipisci.
                                Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                                Quasi voluptas eius distinctio. Atque eos maxime.
                            </p>
                        </div> <!-- end testimonial-slider__slide -->

                        <div class="testimonial-slider__slide swiper-slide">
                            <div class="testimonial-slider__author">
                                <img src="images/avatars/user-04.jpg" alt="Author image"
                                    class="testimonial-slider__avatar">
                                <cite class="testimonial-slider__cite">
                                    <strong>Satya Nadella</strong>
                                    <span>CEO, Microsoft</span>
                                </cite>
                            </div>
                            <p>
                                Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia
                                nesciunt. Ducimus aut sed ipsam.
                                Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius
                                distinctio.
                                Voluptatem dignissimos ut.
                            </p>
                        </div> <!-- end testimonial-slider__slide -->

                        <div class="testimonial-slider__slide swiper-slide">
                            <div class="testimonial-slider__author">
                                <img src="images/avatars/user-05.jpg" alt="Author image"
                                    class="testimonial-slider__avatar">
                                <cite class="testimonial-slider__cite">
                                    <strong>Jeff Bezos</strong>
                                    <span>CEO, Amazon</span>
                                </cite>
                            </div>
                            <p>
                                Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In
                                ac felis
                                quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti
                                expedita voluptas odit.
                                Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                            </p>
                        </div> <!-- end testimonial-slider__slide -->

                    </div> <!-- end testimonial slider swiper-wrapper -->

                    <div class="swiper-pagination"></div>

                </div> <!-- end swiper-container -->

            </div> <!-- end column -->

        </div> <!-- end row -->

    </section> <!-- end s-testimonials --> --}}


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact target-section">

        <div class="row s-contact__header">
            <div class="column large-12">
                <h3 class="section-header-allcaps">Say Hello</h3>
            </div>
        </div>

        <div class="row s-contact__content">

            <div class="column large-7 medium-12">

                <h4 class="huge-text">
                    Have a new project in mind? Let's collaborate and build something awesome.
                    Let's turn that idea to an even greater product :)
                </h4>

            </div>

            <div class="column large-4 medium-12">

                <div class="row contact-infos">
                    <div class="column large-12 medium-6 tab-12">
                        <div class="contact-block">
                            <h5 class="contact-block__header">
                                Email
                            </h5>
                            <p class="contact-block__content">
                                <a class="mailtoui" href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                            </p>
                        </div> <!-- end contact-block -->
                    </div>
                    <div class="column large-12 medium-6 tab-12">
                        <div class="contact-block">
                            <h5 class="contact-block__header">
                                Phone
                            </h5>
                            <p class="contact-block__content">
                                <a href="tel:{{ $user->mobile }}">{{ $user->mobile }}</a>
                            </p>
                        </div> <!-- end contact-block -->
                    </div>

                    <div class="column large-12">
                        <a href="mailto:{{ $user->email }}" class="mailtoui btn btn--primary h-full-width">Let's
                            Talk</a>
                    </div>
                </div> <!-- end contact-infos -->

            </div>
        </div> <!-- s-contact__content -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer">
        <div class="row">
            <div class="column large-4 medium-6 w-1000-stack s-footer__social-block">
                <ul class="s-footer__social">
                    @if($user->facebook)
                        <li><a href="{{ $user->facebook }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    @endif
                    @if($user->twitter)
                        <li><a href="{{ $user->twitter }}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($user->instagram)
                        <li><a href="{{ $user->instagram }}"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($user->linkedin)
                        <li><a href="{{ $user->linkedin }}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($user->github)
                        <li><a href="#0"><i class="fab fa-github" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($user->bitbucket)
                        <li><a href="#0"><i class="fab fa-bitbucket" aria-hidden="true"></i></a></li>
                    @endif
                </ul>
            </div>

            <div class="column large-7 medium-6 w-1000-stack ss-copyright" style="color:white;">
                <span>© Copyright Saiful Islam {{ date('Y') }}</span>
            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z" />
                </svg>
            </a>
        </div> <!-- end ss-go-top -->
    </footer>




    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
