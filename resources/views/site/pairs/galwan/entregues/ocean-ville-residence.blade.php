@extends('site.page', ['active' => false])

@section('title', 'Vivere Plus - Galwan - Ocean Ville Residence')

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md mb-0 overlay overlay-show overlay-color-dark overlay-op-5"
        style="background-image: url('{{ asset('img/pairs/galwan/empreendimentos/ocean-ville-residence/banner.jpg') }}'); background-position: center">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Ocean Ville Residence</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('pair') }}">Parceiros</a></li>
                        <li><a href="{{ route('pair.galwan') }}">Galwan</a></li>
                        <li><a href="{{ route('pair.galwan.entregues') }}">Entregues</a></li>
                        <li class="active">Ocean Ville Residence</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 m-0 border-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="pr-3">
                        <h2 class="font-weight-bold text-color-light negative-ls-3 line-height-2 text-9 mb-1">
                            União da modernidade, luxo e conforto, localizado na quadra do mar da Praia da Costa
                        </h2>
                        <div class="divider mt-1 mb-2">
                            <hr class="bg-light">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list list-icons list-style-none text-4 pl-none mb-2 pb-2 pr-3">
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        3 quartos & 1 suíte
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Apertamentos de 91,56 m²
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Plantas diferenciadas
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        2 vagas de garagem
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Churrasqueira
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Brinquedoteca
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Playgound
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Espaço Fitness
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Piscina Adulto e Infantil
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Sauna
                                    </li>
                                    <li class="text-1 text-color-light mb-1">
                                        <i class="fa fa-check text-light text-4 mr-1"></i>
                                        Salão Multi-uso
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#galery" class="btn btn-light btn-rounded text-3 font-weight-bold mr-3"
                            style="color: #2c247b">
                            <i class="fa fa-plus mr-1"></i>
                            Informações
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=+5527997333555" target="_blank"
                            class="btn btn-success btn-rounded text-3 font-weight-bold mr-3">
                            <i class="fab fa-whatsapp mr-1"></i>
                            Contate-nos
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 fluid-col-lg-6 mb-3">
                    <div class="fluid-col w-100">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_ocean_ville_residence.jpg') }}"
                            class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section section-height-3 m-0 border-0" id="galery">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="font-weight-bold text-center negative-ls-3 line-height-2 text-9 mb-3" style="color: #2c247b">
                        Galeria
                    </h4>

                    <div class="mt-4 pt-2 lightbox"
                        data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                        <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-1.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-1.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-2.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-2.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-3.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-3.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-4.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-4.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-5.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-5.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-6.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-6.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-7.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-7.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-8.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-8.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-9.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-9.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-10.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-10.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-11.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-11.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-12.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-12.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-13.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-13.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-14.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-14.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-15.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-15.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-16.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-16.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-17.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-17.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-18.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-18.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-19.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-19.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-20.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-20.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-21.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-21.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                                <div class="portfolio-item">
                                    <a
                                        href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-22.jpg') }}">
                                        <span class="thumb-info thumb-info-lighten border-radius-0">
                                            <span class="thumb-info-wrapper border-radius-0">
                                                <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/mar-dourado-22.jpg') }}"
                                                    class="img-fluid border-radius-0" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="section sectin-height-3 m-0 border-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row">
                <h4 class="font-weight-bold text-center text-color-light negative-ls-3 line-height-2 text-9 mb-3 w-100">
                    Plantas
                </h4>
                <div class="mt-4 pt-2 lightbox"
                    data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/plantas/coluna-1-2-md.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/plantas/coluna-1-2-md.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/plantas/coluna-3-4-md.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/plantas/coluna-3-4-md.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/plantas/coluna-5-6-md.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/plantas/coluna-5-6-md.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item">
                            <div class="portfolio-item">
                                <a
                                    href="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/plantas/coluna-7-8-md.jpg') }}">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('img/pairs/galwan/empreendimentos/mar-dourado/plantas/coluna-7-8-md.jpg') }}"
                                                class="img-fluid border-radius-0" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="section section-height-3 m-0 border-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-color-light negative-ls-3 line-height-2 text-9 mb-3">
                        Interessado? Preencha o formulário.
                    </h2>
                    <div class="row">
                        <div class="col-12">
                            <form class="contact-form" action="{{ route('contact-us.sendMail') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nome"
                                        style="border-radius: 0; height: 50px; padding: 10px; font-size: 15px; color: #777;">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Telefone"
                                        style="border-radius: 0; height: 50px; padding: 10px; font-size: 15px; color: #777;">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"
                                        style="border-radius: 0; height: 50px; padding: 10px; font-size: 15px; color: #777;">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensagem"
                                        class="form-control"
                                        style="border-radius: 0; padding: 10px; font-size: 15px; color: #777;"></textarea>
                                </div>
                                <button class="btn btn-danger btn-rounded w-25">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-color-light negative-ls-3 line-height-2 text-9 mb-3 mt-0">
                        Ou entre em contato diretamente com um consultor.
                    </h2>
                    <div class="row">
                        <div class="col">
                            <a target="_blank" rel="noopener noreferrer"
                                href="https://api.whatsapp.com/send?phone=+5527997333555" class="btn btn-light ml-2"
                                style="border-radius: 100%; width: 50px; height: 50px; padding: 13px 0;">
                                <i class="fab fa-whatsapp text-6"></i>
                            </a>
                            {{-- <a href="#" class="btn btn-light ml-2" style="border-radius: 100%; width: 50px; height: 50px; padding: 13px 0;">
                                <i class="fab fa-whatsapp mr-1"></i>
                            </a> --}}
                            <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/vivereplus/"
                                class="btn btn-light ml-2"
                                style="border-radius: 100%; width: 50px; height: 50px; padding: 13px 0;">
                                <i class="fab fa-instagram text-6"></i>
                            </a>
                            <a target="_blank" rel="noopener noreferrer"
                                href="https://www.facebook.com/viveremaisvivereplus" class="btn btn-light ml-2"
                                style="border-radius: 100%; width: 50px; height: 50px; padding: 13px 0;">
                                <i class="fab fa-facebook text-6"></i>
                            </a>
                            <a target="_blank" rel="noopener noreferrer"
                                href="https://www.youtube.com/channel/UCruPhd2xqsunlzBYJNmY5Dw" class="btn btn-light ml-2"
                                style="border-radius: 100%; width: 50px; height: 50px; padding: 13px 0;">
                                <i class="fab fa-youtube text-6"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
