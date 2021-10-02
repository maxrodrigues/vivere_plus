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
                <a href="#propertyPictures" class="btn btn-primary" style="">
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
                <div class="col-12 p-0 mt-3 ml-3">
                    <div class="row">
                        @if($property->bedrooms > 0)
                        <div class="col-lg-2 border p-2 mx-1 text-center">
                            <i class="fas fa-bed"></i>
                            {{ $property->bedrooms }} Quartos
                        </div>
                        @endif
                        @if($property->suites > 0)
                        <div class="col-lg-2 border p-2 mx-1 text-center">
                            <i class="fas fa-bath"></i>
                            {{ $property->suites }} Suites
                        </div>
                        @endif
                        @if($property->bethrooms > 0)
                        <div class="col-lg-2 border p-2 mx-1 text-center">
                            <i class="fas fa-shower"></i>
                            {{ $property->bathrooms }} Banheiros
                        </div>
                        @endif
                        @if($property->garage > 0)
                        <div class="col-lg-2 border p-2 mx-1 text-center">
                            <i class="fas fa-car"></i>
                            {{ $property->garage }} Vagas
                        </div>
                        @endif
                        @if($property->area > 0)
                        <div class="col-lg-2 border p-2 mx-1 text-center">
                            <i class="fas fa-expand-arrows-alt"></i>
                            {{ $property->area }} m²
                        </div>
                        @endif
                    </div>
                </div>
                <hr class="gradient-to-left mb-2">
                <div class="card border-0">
                    <h2 class="card-title font-weight-bold text-4 mt-1">Sobre o Imóvel</h2>
                    <div class="card-body p-0 mr-3 mt-0 mb-4">
                        {!! $property->description !!}
                    </div>
                </div>
                <hr class="gradient-to-left mb-2">
                <div class="row mb-5">
                    <h2 class="text-4 w-100 mx-3 mt-2 mb-0 font-weight-bold">Mais sobre o imóvel</h2>
                    @php($delay = 0)
                    @foreach($property->attributes as $attribute)
                        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="{{ $delay }}">
                            {{ $attribute->name }}
                        </div>
                        @php($delay += 300)
                    @endforeach
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
                        <a href="https://api.whatsapp.com/send?phone=+5527997333555" class="btn w-100 btn-success">
                            <i class="fab fa-whatsapp"></i>
                            Enviar Whatsapp
                        </a>
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
    </div>
    <div id="propertyPictures" class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
        <div class="owl-carousel owl-theme full-width" data-plugin-options="{'items': 4, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayHoverPause': true, 'autoplaySpeed': 1500}">
            @foreach($images as $image)
                <a class="img-fluid" href="{{ $image->url }}" title="{{ $property->name }}">
                    <img class="img-fluid" src="{{ $image->url }}" width="110" height="110" alt="Project">
                </a>
            @endforeach
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
