@extends('site.page', ['active' => false])

@section('title', 'Vivere Plus - Galwan - Lançamentos')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md mb-0 overlay overlay-show overlay-color-dark overlay-op-3"
        style="background-image: url('{{ asset('img/pairs/galwan/empreendimentos/fachada_mar_dourado.jpg') }}'); background-position: center">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Residencial Mar Dourado</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href={{ route('pair') }}>Parceiros</a></li>
                        <li><a href={{ route('pair.galwan') }}>Galwan</a></li>
                        <li><a href={{ route('pair.galwan.entregues') }}>Entregues</a></li>
                        <li class="active">Residencial Mar Dourado</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 m-0 border-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="pr-5">
                        <span class="d-block font-weight-light negative-ls-1 text-5 mb-1">
                            <em class="text-2 opacity-8">This is a</em></span>
                        <h2 class="font-weight-extra-bold text-color-dark negative-ls-3 line-height-1 text-7 mb-3"><em>RIGHT BIG IMAGE SECTION</em></h2>
                        <span class="d-block alternative-font text-color-primay text-5 mb-4 pb-2">Enjoy the power</span>
                        <p class="lead mb-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec finibus orci, id luctus est. Phasellus tristique libero id rhoncus tincidunt. Aliquam luctus.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list list-icons list-style-none text-4 pl-none mb-2 pb-2 pr-3">
                                    <li class="text-1 text-color-primary mb-3"><i class="fa fa-check text-primary text-4 mr-1"></i> HTML5+JS+CSS+SCSS</li>
                                    <li class="text-1 text-color-primary mb-3"><i class="fa fa-check text-primary text-4 mr-1"></i> Wide &amp; Boxed</li>
                                    <li class="text-1 text-color-primary mb-3"><i class="fa fa-check text-primary text-4 mr-1"></i> Dark &amp; Light</li>
                                    <li class="text-1 text-color-primary mb-0 mb-md-3"><i class="fa fa-check text-primary text-4 mr-1"></i> RTL Support</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list list-icons list-style-none text-4 pl-none mb-2 pb-2 pr-3">
                                    <li class="text-1 text-color-primary mb-3"><i class="fa fa-check text-primary text-4 mr-1"></i> Bootstrap 4+</li>
                                    <li class="text-1 text-color-primary mb-3"><i class="fa fa-check text-primary text-4 mr-1"></i> SEO Optimized</li>
                                    <li class="text-1 text-color-primary mb-3"><i class="fa fa-check text-primary text-4 mr-1"></i> Blog Pages</li>
                                    <li class="text-1 text-color-primary mb-3"><i class="fa fa-check text-primary text-4 mr-1"></i> Shop Pages</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fluid-col-lg-6">
                    <div class="fluid-col">
                        <img src="img/right-section-image.jpg" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
