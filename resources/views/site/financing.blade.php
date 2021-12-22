@extends('site.page', ['active' => null])

@section('title', 'Vivere Plus - Financiamento')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Financiamento</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Financiamento</li>
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
                                A <span class="text-primary font-weight-bold alternative-font-2">Vivere Plus</span> consegue
                                facilidade de pagamento para você junto às construtoras
                                parceiras. É possível obter até 120 meses de financiamento direto com várias dessas
                                empresas, oferecendo as melhores taxas do mercado.
                            </p>
                            <p class="text-justify lead">
                                Também facilitamos seu acesso aos bancos credores, orientando sobre a documentação e o
                                trâmite necessários.
                            </p>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-lg-2 mx-3">
                                <a target="blank" href="https://www.bb.com.br/pbb/pagina-inicial/voce/produtos-e-servicos/financiamentos/bb-credito-imobiliario#/">
                                    <img class="img-fluid w-75" src="{{ asset('img/logos/logo-banco-do-brasil-icon-512.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 mx-3">
                                <a target="blank" href="https://banco.bradesco/html/classic/produtos-servicos/emprestimo-e-financiamento/encontre-seu-credito/simuladores-imoveis.shtm#box1-comprar">
                                    <img class="img-fluid w-75" src="{{ asset('img/logos/logo-bradesco-512.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 mx-3">
                                <a target="blank" href="http://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso">
                                    <img class="img-fluid w-75" src="{{ asset('img/logos/logo-caixa-economica-federal-512.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 mx-3">
                                <a target="blank" href="https://www.itau.com.br/emprestimos-financiamentos/credito-imobiliario/simulador/">
                                    <img class="img-fluid w-75" src="{{ asset('img/logos/logo-itau-512.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 mx-3">
                                <a target="blank" href="https://www.santander.com.br/emprestimo/casa">
                                    <img class="img-fluid w-75" src="{{ asset('img/logos/logo-santander-512.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-contents ms-0">
                            <p class="text-justify lead">
                                Contate-nos para simular o financiamento clicando <a href="{{ route('contact-us') }}">AQUI</a>!
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
