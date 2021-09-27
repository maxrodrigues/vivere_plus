@extends('site.page', ['active' => null])

@section('title', 'Vivere Plus - Internacional')

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url(img/page-header/page-header-services.jpg);">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Internacional</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Internacional</li>
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
                                Somente quem viveu, ou vive, no exterior sabe das dificuldades da vida de imigrante e da
                                vontade de investir em seu país de origem. Você, brasileiro, que trabalhou e trabalha duro
                                para realizar seu sonho, pode contar integralmente com a <span
                                    class="text-primary font-weight-bold alternative-font-2">Vivere Plus</span>.
                            </p>
                            <p class="text-justify lead">
                                Estamos aqui para ajudá-lo(a) no que for necessário.


                            </p>
                            <p class="text-justify lead">
                                Luiz Costa Junior, proprietário e corretor da <span
                                    class="text-primary font-weight-bold alternative-font-2">Vivere Plus</span>, já morou na
                                Europa e conhece o
                                anseio de comprar a casa própria e investir em sua terra natal. Nosso atendimento em
                                português e inglês também proporciona aos estrangeiros realizar o sonho de morar e
                                fazer negócios no Brasil.
                            </p>
                            <p class="text-justify lead">
                                Usamos a diferença cambial em benefício dos nossos clientes. Orientamos o melhor
                                caminho para comprar, vender e alugar, valorizando o seu dinheiro.
                            </p>
                            <p class="text-justify lead">
                                Aguardamos por seu contato para encaminhar sua demanda, de acordo com o seu perfil.
                                Basta informar-nos a natureza do seu interesse (moradia, trabalho, investimento) e o perfil
                                do imóvel procurado (compra, venda, locação). É só clicar aqui e preencher sua
                                solicitação.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
