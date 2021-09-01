@extends('site.page', ['active' => 'home'])

@section('title', 'Vivere Plus')

@section('content')
    <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
            <ul>
                <li data-transition="fade">
                    <img src="img/slides/01.jpg"
                        alt=""
                        data-bgposition="center center"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption text-color-light font-weight-normal"
                        data-x="left"
                        data-y="center" data-voffset="['-80','-80','-80','-105']"
                        data-start="700"
                        data-fontsize="['26','16','16','40']"
                        data-lineheight="['25','25','25','45']"
                        data-transform_in="y:[-50%];opacity:0;s:500;">Condominios Capixabas</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 ws-normal"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="left"
                        data-y="center" data-voffset="['0','-30','-30','-30']"
                        data-width="['730','530','530','1100']"
                        data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">Morando com segurança, conforto e bons vizinhos.</div>

                    <a class="tp-caption btn btn-light font-weight-semibold"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hash
                        data-hash-offset="85"
                        href="#projects"
                        data-x="left"
                        data-y="center" data-voffset="['133','133','133','255']"
                        data-whitespace="nowrap"
                        data-fontsize="['14','14','14','33']"
                        data-paddingtop="['15','15','15','40']"
                        data-paddingright="['45','45','45','110']"
                        data-paddingbottom="['15','15','15','40']"
                        data-paddingleft="['45','45','45','110']">Ver agora!</a>

                </li>
                <li data-transition="fade">
                    <img src="img/slides/02.jpg"
                        alt=""
                        data-bgposition="center center"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption"
                        data-x="center" data-hoffset="['-170','-170','-170','-350']"
                        data-y="center" data-voffset="['-50','-50','-50','-75']"
                        data-start="1000"
                        data-transform_in="x:[-300%];opacity:0;s:500;"
                        data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption text-color-light font-weight-normal"
                        data-x="left"
                        data-y="center" data-voffset="['-50','-50','-50','-75']"
                        data-start="700"
                        data-fontsize="['26','16','16','40']"
                        data-lineheight="['25','25','25','45']"
                        data-transform_in="y:[-50%];opacity:0;s:500;">Montanhas Capixabas</div>

                    <div class="tp-caption"
                        data-x="center" data-hoffset="['170','170','170','350']"
                        data-y="center" data-voffset="['-50','-50','-50','-75']"
                        data-start="1000"
                        data-width="['730','530','530','1100']"
                        data-transform_in="x:[300%];opacity:0;s:500;"
                        data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="left"
                        data-y="center"
                        data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">Lar de Saúde, Paz e Beleza.</div>

                    <a class="tp-caption btn btn-light font-weight-semibold"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hash
                        data-hash-offset="85"
                        href="#projects"
                        data-x="left"
                        data-y="center" data-voffset="['133','133','133','255']"
                        data-whitespace="nowrap"
                        data-fontsize="['14','14','14','33']"
                        data-paddingtop="['15','15','15','40']"
                        data-paddingright="['45','45','45','110']"
                        data-paddingbottom="['15','15','15','40']"
                        data-paddingleft="['45','45','45','110']">Ver agora!</a>
                </li>
                <li data-transition="fade">
                    <img src="img/slides/05.jpg"
                        alt=""
                        data-bgposition="center center"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption"
                        data-x="center" data-hoffset="['-145','-145','-145','-320']"
                        data-y="center" data-voffset="['-80','-80','-80','-130']"
                        data-start="1000"
                        data-transform_in="x:[-300%];opacity:0;s:500;"
                        data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption text-color-light font-weight-normal"
                        data-x="left"
                        data-y="center" data-voffset="['-80','-80','-80','-130']"
                        data-start="700"
                        data-fontsize="['26','16','16','40']"
                        data-lineheight="['25','25','25','45']"
                        data-transform_in="y:[-50%];opacity:0;s:500;">Litoral Capixaba</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="left"
                        data-y="center"
                        data-width="['730','530','530','1100']"
                        data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">Mansões em Ilhas, Praias e Encostas.</div>

                    <a class="tp-caption btn btn-light font-weight-semibold"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hash
                        data-hash-offset="85"
                        href="#projects"
                        data-x="left"
                        data-y="center" data-voffset="['133','133','133','255']"
                        data-whitespace="nowrap"
                        data-fontsize="['14','14','14','33']"
                        data-paddingtop="['15','15','15','40']"
                        data-paddingright="['45','45','45','110']"
                        data-paddingbottom="['15','15','15','40']"
                        data-paddingleft="['45','45','45','110']">Ver agora!</a>
                </li>
                <li data-transition="fade">
                    <img src="img/slides/07.jpg"
                        alt=""
                        data-bgposition="center center"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption"
                        data-x="center" data-hoffset="['-145','-145','-145','-320']"
                        data-y="center" data-voffset="['-80','-80','-80','-130']"
                        data-start="1000"
                        data-transform_in="x:[-300%];opacity:0;s:500;"
                        data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption text-color-light font-weight-normal"
                        data-x="left"
                        data-y="center" data-voffset="['-80','-80','-80','-130']"
                        data-start="700"
                        data-fontsize="['26','16','16','40']"
                        data-lineheight="['25','25','25','45']"
                        data-transform_in="y:[-50%];opacity:0;s:500;">Qualidade e Praticidade Capixabas</div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 ws-normal"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="left"
                        data-y="center"
                        data-width="['830','530','530','1100']"
                        data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']">Apartamentos e Casas para todos os gostos e necessidades.</div>

                    <a class="tp-caption btn btn-light font-weight-semibold"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hash
                        data-hash-offset="85"
                        href="#projects"
                        data-x="left"
                        data-y="center" data-voffset="['133','133','133','255']"
                        data-whitespace="nowrap"
                        data-fontsize="['14','14','14','33']"
                        data-paddingtop="['15','15','15','40']"
                        data-paddingright="['45','45','45','110']"
                        data-paddingbottom="['15','15','15','40']"
                        data-paddingleft="['45','45','45','110']">Ver agora!</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end slider -->

    <section class="section section-height-3 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-8 col-md-6 col-lg-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <img src="img/upload/empresa.png" class="img-fluid mb-2" alt="">
                </div>
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">Obrigado Por Sua Visita</strong></h2>
                    <p class="lead">A <span class="alternative-font">Vivere Plus</span> é uma empresa de negócios imobiliários que realiza seu sonho, de forma rápida e profissional. Temos a propriedade que você quer!</p>
                    <p class="lead">Priorizamos seu bem-estar, dando um <span class="alternative-font">Plus</span> em sua vida! Compartilhamos com nossos clientes a filosofia de viver mais e melhor.</p>
                    <p class="lead">Por isso, somos <span class="alternative-font">Vivere Plus</span>!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 m-0 border-0">
        <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
                <ul>
                    <li data-transition="fade">
                        <img src="img/slides/05.jpg"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="left"
                            data-y="center" data-voffset="['-80','-80','-80','-105']"
                            data-start="700"
                            data-fontsize="['26','16','16','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">Sítios</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1 ws-normal"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="left"
                            data-y="center" data-voffset="['0','-30','-30','-30']"
                            data-width="['730','530','530','1100']"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">Encontro perfeito entre natureza, familia e amigos.</div>

                        <a class="tp-caption btn btn-light font-weight-semibold"
                            data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-hash
                            data-hash-offset="85"
                            href="#projects"
                            data-x="left"
                            data-y="center" data-voffset="['133','133','133','255']"
                            data-whitespace="nowrap"
                            data-fontsize="['14','14','14','33']"
                            data-paddingtop="['15','15','15','40']"
                            data-paddingright="['45','45','45','110']"
                            data-paddingbottom="['15','15','15','40']"
                            data-paddingleft="['45','45','45','110']">Ver agora!</a>

                    </li>
                    <li data-transition="fade">
                        <img src="img/slides/fazenda.png"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-170','-170','-170','-350']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="left"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="700"
                            data-fontsize="['26','16','16','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">Fazendas</div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['170','170','170','350']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-width="['730','530','530','1100']"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="left"
                            data-y="center"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">Cenário ideal para lucro certo.</div>

                        <a class="tp-caption btn btn-light font-weight-semibold"
                            data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-hash
                            data-hash-offset="85"
                            href="#projects"
                            data-x="left"
                            data-y="center" data-voffset="['133','133','133','255']"
                            data-whitespace="nowrap"
                            data-fontsize="['14','14','14','33']"
                            data-paddingtop="['15','15','15','40']"
                            data-paddingright="['45','45','45','110']"
                            data-paddingbottom="['15','15','15','40']"
                            data-paddingleft="['45','45','45','110']">Ver agora!</a>
                    </li>
                    <li data-transition="fade">
                        <img src="img/slides/07.jpg"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-145','-145','-145','-320']"
                            data-y="center" data-voffset="['-80','-80','-80','-130']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="left"
                            data-y="center" data-voffset="['-80','-80','-80','-130']"
                            data-start="700"
                            data-fontsize="['26','16','16','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">Imóveis Comerciais</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="left"
                            data-y="center"
                            data-width="['730','530','530','1100']"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">Pontos nobres no campo e na cidade.</div>

                        <a class="tp-caption btn btn-light font-weight-semibold"
                            data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-hash
                            data-hash-offset="85"
                            href="#projects"
                            data-x="left"
                            data-y="center" data-voffset="['133','133','133','255']"
                            data-whitespace="nowrap"
                            data-fontsize="['14','14','14','33']"
                            data-paddingtop="['15','15','15','40']"
                            data-paddingright="['45','45','45','110']"
                            data-paddingbottom="['15','15','15','40']"
                            data-paddingleft="['45','45','45','110']">Ver agora!</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-height-3 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0 order-md-1">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">A Vivere Tem História</strong></h2>
                    <p class="lead">Nosso propósito é maior do que comercializar imóveis. Trabalhamos para realizar sonhos e fazer cada cliente feliz.</p>
                    <p class="lead">Desde 2005, ajudamos centenas de pessoas a comprar, vender e alugar apartamentos, casas, sítios, fazendas, terrenos, escritórios, lojas, restaurantes, galpões e instalações industriais.</p>
                    <p class="lead">Boa vontade e conhecimento técnico são as nossas principais ferramentas profissionais. Porque cada cliente é especial e merecemais do que atenção: merece tratamento plus.</p>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <img src="img/upload/img-home4-copyright.jpg" class="img-fluid mb-2" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="parallax section section-text-light section-parallax section-center mt-0 mb-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/slides/07.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false}">
                        @foreach ($testimonials as $testimony)
                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                    <blockquote>
                                        <p class="mb-0">
                                            {{ $testimony->description }}
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong class="font-weight-extra-bold">{{ $testimony->name }}</strong>
                                            <span>
                                                {{ $testimony->age ?? '?' }} anos de idade, profissão {{ $testimony->profession ?? '?' }}
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

    <section class="call-to-action call-to-action-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-8">
                    <div class="call-to-action-content">
                        <h3>Agende uma visita à Vivere Plus. Fazemos mais pelo seu sonho!</h3>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="call-to-action-btn">
                        <a href="javascript:void(0)" target="_blank" class="btn btn-modern text-2 btn-light border-0">Agende uma visita por Whatsapp</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
