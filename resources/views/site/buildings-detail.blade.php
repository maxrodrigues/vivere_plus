{{-- @php($formatter = new \NumberFormatter('pt_BR',  NumberFormatter::CURRENCY)) --}}
@extends('site.page', ['active' => 'buildings'])

@section('title', 'Vivere Plus')

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url({{ $imageHeaderBackground }});">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>{{ $property->name }}</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('buildings') }}">Empreendimentos</a></li>
                        <li class="active">{{ $property->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row mb-3">
            <div class="col-12 mb-5">
                <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#largeModal">
                    <i class="fas fa-image"></i>
                    Ver fotos
                </a>

                <a class="popup-gmaps btn btn-primary" href="https://maps.google.com/maps?q={{ $property->street }},{{ $property->number }}-{{ $property->neighborhood }}-{{ $property->city }}/{{ $property->state }}">
                    <i class="fas fa-map-marked"></i>
                    Ver No Mapa
                </a>
            </div>
            <div class="col-lg-8">
                <h1 class="mb-0">{{ $property->name }}</h1>
                <span class="text-4">
                    <i class="fas fa-map-marker-alt"></i>
                    {{ $property->street }}, {{ $property->number }} - {{ $property->neighborhood }} - {{ $property->city }}/{{ $property->state }}
                </span>

                    <hr class="gradient-to-left">

                <div class="col-12 p-0 mt-3 ml-3">
                    <div class="row">
                        <div class="col-lg-2 border p-2 mx-1 text-center">
                            <i class="fas fa-bed"></i>
                            {{ $property->bedrooms }} Quartos
                        </div>
                        <div class="col-lg-2 border p-2 mx-1 text-center">
                            <i class="fas fa-bath"></i>
                            {{ $property->suites }} Suites
                        </div>
                        <div class="col-lg-2 border p-2 mx-1 text-center">
                            <i class="fas fa-shower"></i>
                            {{ $property->bathrooms }} Banheiros
                        </div>
                        <div class="col-lg-2 border p-2 mx-1 text-center">
                            <i class="fas fa-car"></i>
                            {{ $property->garage }} Vagas
                        </div>
                        <div class="col-lg-2 border p-2 mx-1 text-center">
                            <i class="fas fa-expand-arrows-alt"></i>
                            {{ $property->area }} m²
                        </div>
                    </div>
                </div>

                <div class="card border-1 border-solid my-3">
                    <h2 class="card-title font-weight-bold text-4 mx-3 mt-3">Sobre o Imóvel</h2>
                    <div class="card-body p-0 mx-3 mb-4">
                        <p class="card-text">{{ $property->description }}</p>
                    </div>
                </div>

                <div class="card border-1 border-solid my-3">
                    <h2 class="card-title font-weight-bold text-4 mx-3 mt-3"></h2>
                    <div class="card-body p-0 mx-3 mb-4">
                        <div class="masonry-loader masonry-loader-showing">
                            <div class="masonry" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}">
                                <div class="masonry-item">
                                    <a href="portfolio-single-wide-slider.html">
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="thumb-info-wrapper">
                                                <img src="img/blog/square/blog-11.jpg" class="img-fluid" alt="">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Project Title</span>
                                                    <span class="thumb-info-type">Project Type</span>
                                                </span>
                                                <span class="thumb-info-action">
                                                    <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="masonry-item">
                                    <a href="portfolio-single-wide-slider.html">
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="thumb-info-wrapper">
                                                <img src="img/blog/medium/blog-2.jpg" class="img-fluid" alt="">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Project Title</span>
                                                    <span class="thumb-info-type">Project Type</span>
                                                </span>
                                                <span class="thumb-info-action">
                                                    <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="masonry-item">
                                    <a href="portfolio-single-wide-slider.html">
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="thumb-info-wrapper">
                                                <img src="img/blog/square/blog-4.jpg" class="img-fluid" alt="">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Project Title</span>
                                                    <span class="thumb-info-type">Project Type</span>
                                                </span>
                                                <span class="thumb-info-action">
                                                    <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="masonry-item">
                                    <a href="portfolio-single-wide-slider.html">
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="thumb-info-wrapper">
                                                <img src="img/blog/medium/blog-9.jpg" class="img-fluid" alt="">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Project Title</span>
                                                    <span class="thumb-info-type">Project Type</span>
                                                </span>
                                                <span class="thumb-info-action">
                                                    <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="masonry-item">
                                    <a href="portfolio-single-wide-slider.html">
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="thumb-info-wrapper">
                                                <img src="img/blog/medium/blog-38.jpg" class="img-fluid" alt="">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Project Title</span>
                                                    <span class="thumb-info-type">Project Type</span>
                                                </span>
                                                <span class="thumb-info-action">
                                                    <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="masonry-item">
                                    <a href="portfolio-single-wide-slider.html">
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="thumb-info-wrapper">
                                                <img src="img/blog/medium/blog-24.jpg" class="img-fluid" alt="">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Project Title</span>
                                                    <span class="thumb-info-type">Project Type</span>
                                                </span>
                                                <span class="thumb-info-action">
                                                    <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="masonry-item">
                                    <a href="portfolio-single-wide-slider.html">
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="thumb-info-wrapper">
                                                <img src="img/blog/medium/blog-34.jpg" class="img-fluid" alt="">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Project Title</span>
                                                    <span class="thumb-info-type">Project Type</span>
                                                </span>
                                                <span class="thumb-info-action">
                                                    <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="masonry-item">
                                    <a href="portfolio-single-wide-slider.html">
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                            <span class="thumb-info-wrapper">
                                                <img src="img/blog/medium/blog-42.jpg" class="img-fluid" alt="">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Project Title</span>
                                                    <span class="thumb-info-type">Project Type</span>
                                                </span>
                                                <span class="thumb-info-action">
                                                    <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- side form --}}
            <div class="col-lg-4 divider-left-border">
                <div class="card">
                    <h2 class="card-title font-weight-bold text-center text-7 m-2 p-0">
                        Quer mais informações?
                    </h2>
                    <hr class="solid p-0 m-2">
                    <div class="card-body m-0 p-2">
                        <button class="btn w-100 btn-success">
                            <i class="fab fa-whatsapp"></i>
                            Enviar Whatsapp
                        </button>
                        <form action="#" method="post">
                            <div class="form-group mt-4">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Seu nome completo">
                            </div>
                            <div class="form-group mt-4">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Seu melhor e-mail">
                            </div>
                            <div class="form-group mt-4">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Seu telefone">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- side form --}}
        </div>
        <div class="row">
            <div class="col">
                <hr class="solid my-5">

                <h4>Masonry</h4>

                <div class="masonry-loader masonry-loader-showing">
                    <div class="masonry" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}">
                        <div class="masonry-item">
                            <a href="portfolio-single-wide-slider.html">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="img/blog/square/blog-11.jpg" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Project Title</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="masonry-item">
                            <a href="portfolio-single-wide-slider.html">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="img/blog/medium/blog-2.jpg" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Project Title</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="masonry-item">
                            <a href="portfolio-single-wide-slider.html">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="img/blog/square/blog-4.jpg" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Project Title</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="masonry-item">
                            <a href="portfolio-single-wide-slider.html">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="img/blog/medium/blog-9.jpg" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Project Title</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="masonry-item">
                            <a href="portfolio-single-wide-slider.html">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="img/blog/medium/blog-38.jpg" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Project Title</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="masonry-item">
                            <a href="portfolio-single-wide-slider.html">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="img/blog/medium/blog-24.jpg" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Project Title</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="masonry-item">
                            <a href="portfolio-single-wide-slider.html">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="img/blog/medium/blog-34.jpg" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Project Title</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="masonry-item">
                            <a href="portfolio-single-wide-slider.html">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="img/blog/medium/blog-42.jpg" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Project Title</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Large Modal Title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                        @foreach($images as $image)
                            <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon mb-1 mr-1" href="{{ $image->url }}">
                                <img class="img-fluid" src="{{ $image->url }}" alt="Project Image" width="110" height="110">
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>
@endsection

@section('js')
    <script src="{{ asset('js/examples/examples.lightboxes.js') }}"></script>
    <script src="{{ asset('js/examples/examples.gallery.js') }}"></script>
@endsection
