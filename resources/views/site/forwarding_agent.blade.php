@extends('site.page', ['active' => null])

@section('title', 'Vivere Plus - Despachante e Serviços Cartoriais')

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url(img/page-header/page-header-services.jpg);">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Despachante e Serviços Cartoriais</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Despachante e Serviços Cartoriais</li>
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
                                Não é à toa que nosso nome é <span
                                    class="text-primary font-weight-bold alternative-font-2">Plus</span>. Damos <span
                                    class="text-primary font-weight-bold alternative-font-2">Mais</span> atenção à suas
                                necessidades, garantindo o
                                melhor custo-benefício do mercado.
                            </p>
                            <p class="text-justify lead">
                                Conosco, você tem facilidade em obter todos os documentos necessários para consolidar seu
                                negócio. Resolvemos pendências cartoriais, que vão desde impostos e reconhecimento de firmas
                                a averbações, retificações, registros e escrituração.
                            </p>
                            <p class="text-justify lead">
                                O exercício de assessoria imobiliária, ou o despachante imobiliário, foi regulamentado no
                                ano de 2011. Essa atividade profissional facilita a consolidação do negócio, desde a análise
                                antes da compra compra até a transmissão da propriedade, seja por meio de financiamento ou
                                de escritura pública. O despachante faz requerimentos, encaminhamentos e agiliza os trâmites
                                burocráticos junto ao poder público.
                            </p>
                            <p class="text-justify lead">
                                A assessoria cartorial da <span
                                    class="text-primary font-weight-bold alternative-font-2">Vivere Plus</span> facilita a
                                sua vida na obtenção de:
                            </p>
                            <p class="lead">
                                <i class="fa fa-plus text-primary mr-2"></i>
                                RGI - Registro Geral de Imóveis nas cidades de Vitória, Serra e Vila Velha/ES
                            </p>
                            <p class="lead">
                                <i class="fa fa-plus text-primary mr-2"></i>
                                Averbações em prefeituras e cartórios.
                            </p>
                            <p class="lead">
                                <i class="fa fa-plus text-primary mr-2"></i>
                                Escrituras
                            </p>
                            <p class="lead">
                                <i class="fa fa-plus text-primary mr-2"></i>
                                Encaminhamento de escrituras públicas
                            </p>
                            <p class="lead">
                                <i class="fa fa-plus text-primary mr-2"></i>
                                Análise documental e orientação processual
                            </p>
                            <p class="lead">
                                <i class="fa fa-plus text-primary mr-2"></i>
                                Emissão de certidões
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
