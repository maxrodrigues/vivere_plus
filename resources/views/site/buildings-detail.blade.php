{{-- @php($formatter = new \NumberFormatter('pt_BR',  NumberFormatter::CURRENCY)) --}}
@extends('site.page', ['active' => 'buildings'])

@section('title', 'Vivere Plus')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{ asset('img/building.jpg') }});">
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
        <div class="row">
            <div class="col-lg-8">
                <h1 class="mb-0">{{ $property->name }}</h1>
                <span class="text-4">
                    <i class="fas fa-map-marker-alt"></i>
                    {{ $property->street }}, {{ $property->number }} - {{ $property->neighborhood }} - {{ $property->city }}/{{ $property->state }}
                </span>
                <div class="col-12 p-0 mt-5 ml-3">
                    <div class="row">
                        <div class="col-lg-2 border p-2 mx-1 text-center">
                            <i class="fas fa-bed"></i>
                            {{ $property->bedrooms }} Quartos
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
                    <h2 class="card-title font-weight-bold text-4 mx-3 mt-3">Descrição</h2>
                    <div class="card-body p-0 mx-3 mb-4">
                        <p class="card-text">{{ $property->description }}</p>
                    </div>
                </div>

                <div class="card border-1 border-solid my-3">
                    <h2 class="card-title font-weight-bold text-4 mx-3 mt-3"></h2>
                    <div class="card-body p-0 mx-3 mb-4">

                    </div>
                </div>
            </div>
            {{-- side form --}}
            <div class="col-lg-4">
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


    </div>


@endsection
