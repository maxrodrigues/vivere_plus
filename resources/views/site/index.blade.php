@extends('site.page', ['active' => 'home'])

@section('title', 'Vivere Plus')

@section('content')
    {{-- slider 1 --}}
    <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider
            data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
            <ul>
            <li data-transition="fade">
                    <img src="img/slides/slide-61.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg">

                    <div class="tp-caption text-color-light font-weight-normal" data-x="center"
                        data-voffset="['-50','-105','-105','-205']" data-y="center" data-voffset="['0','0','0','0']"
                        data-start="700" data-fontsize="['32','32','32','60']" data-lineheight="['25','25','25','45']"
                        data-width="['1300','1000','1000','1000']" data-transform_in="y:[-50%];opacity:0;s:500;">
                        Conheça o Taj Home Resort
                    </div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 ws-normal"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['0','-30','-30','0']"
                        data-width="['1300','1000','1000','1000']" data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">
                        A sua história começa agora.
                    </div>

                    <a class="tp-caption font-weight-extra-bold text-light"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hash
                        data-hash-offset="85"
                        href="https://tajresorthome.com/"
                        data-x="left" data-hoffset="['-120','30', '30','-30]"
                        data-y="center" data-voffset="['60','60', '60','255']"
                        data-whitespace="nowrap"
                        data-fontsize="['22','18','24','33']"
                        data-paddingtop="['15','15','15','40']"
                        data-paddingright="['45','45','45','110']"
                        data-paddingbottom="['15','15','15','40']"
                        data-paddingleft="['45','45','45','110']">{{ __('home.slide_button') }}</a>
                </li>
                <li data-transition="fade">
                    <img src="img/slides/01.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg">

                    <div class="tp-caption text-color-light font-weight-normal" data-x="center"
                        data-voffset="['-50','-105','-105','-205']" data-y="center" data-voffset="['0','0','0','0']"
                        data-start="700" data-fontsize="['32','32','32','60']" data-lineheight="['25','25','25','45']"
                        data-width="['1300','1000','1000','1000']" data-transform_in="y:[-50%];opacity:0;s:500;">
                        {{ __('home.title_first_slide') }}</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 ws-normal"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['0','-30','-30','0']"
                        data-width="['1300','1000','1000','1000']" data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">{{ __('home.text_first_slide') }}</div>

                    {{-- <a class="tp-caption font-weight-extra-bold text-light"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hash
                        data-hash-offset="85"
                        href="#projects"
                        data-x="left" data-hoffset="['-120','30', '30','-30]"
                        data-y="center" data-voffset="['60','60', '60','255']"
                        data-whitespace="nowrap"
                        data-fontsize="['22','18','24','33']"
                        data-paddingtop="['15','15','15','40']"
                        data-paddingright="['45','45','45','110']"
                        data-paddingbottom="['15','15','15','40']"
                        data-paddingleft="['45','45','45','110']">{{ __('home.slide_button') }}</a> --}}
                </li>
                <li data-transition="fade">
                    <img src="img/slides/02.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg">

                    <div class="tp-caption text-color-light font-weight-normal" data-x="center"
                        data-voffset="['-50','-105','-105','-205']" data-y="center" data-voffset="['0','0','0','0']"
                        data-start="700" data-fontsize="['32','32','32','60']" data-lineheight="['25','25','25','45']"
                        data-width="['1300','1000','1000','1000']" data-transform_in="y:[-50%];opacity:0;s:500;">
                        {{ __('home.title_second_slide') }}</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 ws-normal"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['0','-30','-30','0']"
                        data-width="['1300','1000','1000','1000']" data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">{{ __('home.text_second_slide') }}</div>


                    {{-- <a class="tp-caption font-weight-extra-bold text-light"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hash
                        data-hash-offset="85"
                        href="#projects"
                        data-x="left" data-hoffset="['-120','30', '30','-30]"
                        data-y="center" data-voffset="['60','30', '30','130']"
                        data-whitespace="nowrap"
                        data-fontsize="['22','18','24','33']"
                        data-paddingtop="['15','15','15','40']"
                        data-paddingright="['45','45','45','110']"
                        data-paddingbottom="['15','15','15','40']"
                        data-paddingleft="['45','45','45','110']">{{ __('home.slide_button') }}</a> --}}
                </li>
                <li data-transition="fade">
                    <img src="img/slides/05.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg">

                    <div class="tp-caption text-color-light font-weight-normal" data-x="center"
                        data-voffset="['-50','-105','-105','-205']" data-y="center" data-voffset="['0','0','0','0']"
                        data-start="700" data-fontsize="['32','32','32','60']" data-lineheight="['25','25','25','45']"
                        data-width="['1300','1000','1000','1000']" data-transform_in="y:[-50%];opacity:0;s:500;">
                        {{ __('home.title_third_slide') }}</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 ws-normal"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['0','-30','-30','0']"
                        data-width="['1300','1000','1000','1000']" data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">{{ __('home.text_third_slide') }}</div>

                    {{-- <a class="tp-caption font-weight-extra-bold text-light"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hash
                        data-hash-offset="85"
                        href="#projects"
                        data-x="left" data-hoffset="['-120','30', '30','-30]"
                        data-y="center" data-voffset="['60','30', '30','130']"
                        data-whitespace="nowrap"
                        data-fontsize="['22','18','24','33']"
                        data-paddingtop="['15','15','15','40']"
                        data-paddingright="['45','45','45','110']"
                        data-paddingbottom="['15','15','15','40']"
                        data-paddingleft="['45','45','45','110']">{{ __('home.slide_button') }}</a> --}}
                </li>
                <li data-transition="fade">
                    <img src="img/slides/terceira-ponte.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg">

                    <div class="tp-caption text-color-light font-weight-normal" data-x="center"
                        data-voffset="['-100','-105','-125','-245']" data-y="center" data-voffset="['0','0','0','0']"
                        data-start="700" data-fontsize="['32','32','32','60']" data-lineheight="['25','25','25','45']"
                        data-width="['1300','1000','1000','1000']" data-transform_in="y:[-50%];opacity:0;s:500;">
                        {{ __('home.title_fourth_slide') }}</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 ws-normal"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['0','-30','-30','0']"
                        data-width="['1300','1000','1000','1000']" data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">{{ __('home.text_fourth_slide') }}</div>

                    {{-- <a class="tp-caption font-weight-extra-bold text-light"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hash
                        data-hash-offset="85"
                        href="#projects"
                        data-x="left" data-hoffset="['-120','30', '30','-30]"
                        data-y="center" data-voffset="['90','60', '80','250']"
                        data-whitespace="nowrap"
                        data-fontsize="['22','18','24','33']"
                        data-paddingtop="['15','15','15','40']"
                        data-paddingright="['45','45','45','110']"
                        data-paddingbottom="['15','15','15','40']"
                        data-paddingleft="['45','45','45','110']">{{ __('home.slide_button') }}</a> --}}
                </li>
            </ul>
        </div>
    </div>

    {{-- Sobre --}}
    <section class="section section-height-3 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-8 col-md-6 col-lg-5 order-md-2 mb-4 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInRightShorter">
                    <img src="img/upload/empresa.png" class="img-fluid mb-2" alt="">
                </div>
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-7 mb-2 text-center">
                        <strong class="font-weight-extra-bold">
                            {{ __('home.about_title') }}
                        </strong>
                    </h2>
                    <p class="lead text-dark">{!! __('home.about_first_paragraph') !!}</p>
                    <p class="lead text-dark">{!! __('home.about_second_paragraph') !!}</p>
                    <p class="lead text-dark">{!! __('home.about_third_paragraph') !!}</span>!</p>
                </div>
            </div>
        </div>
    </section>

    {{-- slider 2 --}}
    <section class="section section-height-3 m-0 border-0">
        <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider
                data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
                <ul>
                    <li data-transition="fade">
                        <img src="img/slides/05.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption text-color-light font-weight-normal" data-x="center"
                            data-voffset="['-80','-105','-105','-205']" data-y="center" data-voffset="['0','0','0','0']"
                            data-start="700" data-fontsize="['32','32','32','60']" data-lineheight="['25','25','25','45']"
                            data-width="['1300','1000','1000','1000']" data-transform_in="y:[-50%];opacity:0;s:500;">
                            {!! __('home.title_first_slide_2') !!}</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 ws-normal"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-y="center" data-voffset="['0','-30','-30','0']"
                            data-width="['1300','1000','1000','1000']" data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">{!! __('home.text_first_slide_2') !!}</div>

                        {{-- <a class="tp-caption font-weight-extra-bold text-light"
                            data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-hash data-hash-offset="85" href="#projects" data-x="left"
                            data-hoffset="['-120','30', '30','-40]" data-y="center" data-voffset="['80','60', '60','190']"
                            data-whitespace="nowrap" data-fontsize="['22','18','24','33']"
                            data-paddingtop="['15','15','15','40']" data-paddingright="['45','45','45','110']"
                            data-paddingbottom="['15','15','15','40']"
                            data-paddingleft="['45','45','45','110']">{!! __('home.slide_button') !!}</a> --}}

                    </li>
                    <li data-transition="fade">
                        <img src="img/slides/fazenda.png" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption text-color-light font-weight-normal" data-x="center"
                            data-voffset="['-50','-85','-85','-185']" data-y="center" data-voffset="['0','0','0','0']"
                            data-start="700" data-fontsize="['32','32','32','60']" data-lineheight="['25','25','25','45']"
                            data-width="['1300','1000','1000','1000']" data-transform_in="y:[-50%];opacity:0;s:500;">
                            {!! __('home.title_second_slide_2') !!}</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 ws-normal"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-y="center" data-voffset="['0','-30','-30','0']"
                            data-width="['1300','1000','1000','1000']" data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">{!! __('home.text_second_slide_2') !!}</div>

                        {{-- <a class="tp-caption font-weight-extra-bold text-light"
                            data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-hash data-hash-offset="85" href="#projects" data-x="left"
                            data-hoffset="['-120','30', '30','-40]" data-y="center" data-voffset="['60','30', '30','160']"
                            data-whitespace="nowrap" data-fontsize="['22','18','24','33']"
                            data-paddingtop="['15','15','15','40']" data-paddingright="['45','45','45','110']"
                            data-paddingbottom="['15','15','15','40']"
                            data-paddingleft="['45','45','45','110']">{!! __('home.slide_button') !!}</a> --}}
                    </li>
                    <li data-transition="fade">
                        <img src="img/slides/07.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption text-color-light font-weight-normal" data-x="center"
                            data-voffset="['-50','-85','-85','-185']" data-y="center" data-voffset="['0','0','0','0']"
                            data-start="700" data-fontsize="['32','32','32','60']" data-lineheight="['25','25','25','45']"
                            data-width="['1300','1000','1000','1000']" data-transform_in="y:[-50%];opacity:0;s:500;">
                            {!! __('home.title_third_slide_2') !!}</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 ws-normal"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-y="center" data-voffset="['0','-30','-30','0']"
                            data-width="['1300','1000','1000','1000']" data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">{!! __('home.text_third_slide_2') !!}</div>

                        {{-- <a class="tp-caption font-weight-extra-bold text-light"
                            data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-hash data-hash-offset="85" href="#projects" data-x="left"
                            data-hoffset="['-120','30', '30','-40]" data-y="center" data-voffset="['60','30', '30','160']"
                            data-whitespace="nowrap" data-fontsize="['22','18','24','33']"
                            data-paddingtop="['15','15','15','40']" data-paddingright="['45','45','45','110']"
                            data-paddingbottom="['15','15','15','40']"
                            data-paddingleft="['45','45','45','110']">{!! __('home.slide_button') !!}</a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Vivere tem história --}}
    <section class="section section-height-3 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-8 col-md-6 col-lg-5 order-md-1 mb-4 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInRightShorter">
                    <img src="img/upload/img-home4-copyright.jpg" class="img-fluid w-75 mb-2" alt="">
                </div>
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0 order-md-2">
                    <h2 class="text-color-dark font-weight-normal text-7 mb-2 text-center">
                        <strong class="font-weight-extra-bold">
                            {!! __('home.history_title') !!}
                        </strong>
                    </h2>
                    <p class="lead text-dark">{!! __('home.history_first_paragraph') !!}</p>
                    <p class="lead text-dark">{!! __('home.history_second_paragraph') !!}</p>
                    <p class="lead text-dark">{!! __('home.history_third_paragraph') !!}</p>
                </div>

            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="parallax section section-text-light section-parallax section-center mt-0 mb-0" data-plugin-parallax
        data-plugin-options="{'speed': 1.5}" data-image-src="img/slides/07.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav"
                        data-plugin-options="{'items': 1, 'loop': true}">
                        @foreach ($testimonials as $testimony)
                            <div>
                                <div class="testimonial testimonial-style-8 testimonial-with-quotes mb-0">
                                    <blockquote>
                                        <p class="mb-0">
                                            {{ $testimony->description }}
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong class="font-weight-extra-bold">{{ $testimony->name }}</strong>
                                            <span>
                                                {{ $testimony->age ? "{$testimony->age} anos de idade " : '' }}
                                                {{ $testimony->profession ? "{$testimony->profession}" : '' }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to action --}}
    <section class="call-to-action call-to-action-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-8">
                    <div class="call-to-action-content">
                        <h3>{!! __('home.whatsapp_cta') !!}</h3>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="call-to-action-btn">
                        <a href="https://api.whatsapp.com/send?phone=5527997333555&text=Ol%C3%A1%2C%20gostaria%20de%20agendar%20uma%20visita."
                            target="_blank" class="btn btn-modern text-2 btn-light border-0">
                            {!! __('home.whatsapp_button') !!}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
