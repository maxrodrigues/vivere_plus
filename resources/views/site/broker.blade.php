@extends('site.page', ['active' => null])

@section('title', 'Vivere Plus - Contratando uma corretora de imóveis')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Contratando uma corretora de imóveis</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Contratando uma corretora de imóveis</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-contents ms-0">
                            <p class="text-justify lead">
                                É preciso ter muito cuidado quando contratar os serviços de uma corretora de imóveis. É o
                                velho ditado: “evite comprar gato por lebre!”
                            </p>
                            <p class="text-justify lead">
                                Infelizmente, os órgãos de defesa do consumidor têm registrado inúmeras reclamações sobre os
                                maus profissionais do setor, como, por exemplo: não cumprimento de prazos, cobrança indevida
                                de taxas extras, falta de itens nos imóveis, falta de documentos para consolidar o negócio e
                                obter a escritura.
                            </p>
                            <p class="text-justify lead">
                                É fundamental verificar se a empresa e/ou o corretor está devidamente registrado no CRECI –
                                Conselho Regional de Corretores de Imóveis. A <span
                                    class="text-primary font-weight-bold alternative-font-2">Vivere Plus</span> é cadastrada
                                com o número 5524 no
                                CRECI-ES, na pessoa de seu proprietário e corretor Luiz Costa Junior.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

@endsection
