@extends('site.page', ['active' => false])

@section('title', 'Vivere Plus - Galwan')

@section('content')
    {{-- slider 1 --}}
    <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider
            data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
            <ul>
                <li data-transition="fade">
                    <img src="{{ asset('img/pairs/galwan/banners/brinquedoteca_pig.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg">

                    <div class="tp-caption font-weight-extra-bold negative-ls-1 ws-normal"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-hoffset="['350','0', '0','0]"
                        data-y="center" data-voffset="['0','0', '0','0']"
                        data-width="['1300','1000','1000','1000']"
                        data-fontsize="['50','50','50','90']"
                        data-lineheight="['55','55','55','95']"
                        style="color: #2c247b; "
                        >
                        Seu sonho ao seu alcance
                    </div>

                    <a class="btn btn-primary btn-rounded text-center tp-caption font-weight-bold text-light px-5 py-3"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hash
                        data-hash-offset="85"
                        href="https://tajresorthome.com/"
                        data-x="center" data-hoffset="['0','0', '0','0]"
                        data-y="center" data-voffset="['100','0', '0','0']"
                        data-whitespace="nowrap"
                        data-fontsize="['22','18','24','33']"
                        data-paddingtop="['15','15','15','40']"
                        data-paddingright="['45','45','45','110']"
                        data-paddingbottom="['15','15','15','40']"
                        data-paddingleft="['45','45','45','110']"
                        style="background-color: #2c247b; border:none;"
                        >Empreendimentos</a>

                </li>
            </ul>
        </div>
    </div>

    <section class="section section-height-3 m-0 border-0" style="background-color: #2c247b">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="font-weight-bold text-light mb-0">Empreendimentos</h2>
                    <div class="divider divider-small mt-2 mb-5">
                        <hr style="background: #fff; margin: 0 auto;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 text-center">
                    <div class="col-12" style="width: 300px; height:270px;margin: 0 auto 20px;">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_jazz.png') }}" alt="" class="d-block w-100 rounded-circle" style="height:100%;">
                    </div>
                    <h3 class="text-5 text-light text-center font-weight-bold m-0">
                        Lançamentos
                    </h2>
                    <p class="text-light">
                        Confira nossos mais recentes empreendimentos!
                    </p>
                    <a href="{{ route('pair.galwan.lancamentos') }}" class="btn btn-danger btn-rounded text-center w-50">
                        Saiba Mais
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <div class="col-12" style="width: 300px; height:270px;margin: 0 auto 20px;">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_mar_dourado.jpg') }}" alt="" class="d-block w-100 rounded-circle" style="height:100%;">
                    </div>
                    <h3 class="text-5 text-light text-center font-weight-bold m-0">
                        Entregues
                    </h2>
                    <p class="text-light">
                        Conheça os empreendimentos entregues pela nossa construtora.
                    </p>
                    <a href="{{ route('pair.galwan.entregues') }}" class="btn btn-danger btn-rounded text-center w-50">
                        Saiba Mais
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                {{-- <div class="col-12 col-lg-4 text-center">
                    <div class="col-12" style="width: 300px; height:270px;margin: 0 auto 20px;">
                        <img src="{{ asset('img/pairs/galwan/empreendimentos/fachada_prof_pig.jpg') }}" alt="" class="d-block w-100 rounded-circle" style="height:100%;">
                    </div>
                    <h3 class="text-5 text-light text-center font-weight-bold m-0">
                        Em Obras
                    </h2>
                    <p class="text-light">
                        Fique de olho nas novidades que estão por vir!
                    </p>
                    <a href="{{ route('pair.galwan.em-obras') }}" class="btn btn-danger btn-rounded text-center w-50">
                        Saiba Mais
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="section section-height-3 m-0 border-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h3 class="text-5 font-weight-bold" style="color: #2c247b">
                        Conheça um dos nossos consultores
                        <div class="divider divider-small">
                            <hr style="background: #2c247b">
                        </div>
                    </h3>
                    <p class="text-justify">
                        Luiz Costa Junior, dono e diretor da Vivere Plus Negócios imobiliários, se graduou em marketing e gestão de vendas na universidade de Vila Velha (UVV). No Business Behavior Institute - BBI of Chicago, Estados Unidos, fez pós-graduação em gestão de negócios, com foco em competêcias comportamentais e agora com 15 anos de experiência, continua realizando inúmeros sonhos dos seus clientes.
                    </p>
                    <a href="#" class="btn btn-rounded text-light" style="background-color: #2c247b">Saiba Mais</a>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('img/pairs/galwan/consultor_de_vendas.jpg') }}" alt="" class="d-block w-50" style="margin: 0 auto">
                </div>
            </div>
        </div>
    </section>
@endsection
