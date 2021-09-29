@extends('site.page', ['active' => 'about'])

@section('title', 'Vivere Plus - A Vivere')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>A Vivere</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="javascript:void(0)">Home</a></li>
                        <li class="active">A Vivere</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 bg-color-white m-0 border-0 py-5">
        <div class="container">
            <h2 class="font-weight-normal text-6 mb-2"><strong class="font-weight-extra-bold">Vivere Plus é Garantia de Qualidade nos Mercados Brasileiro e Norte-Americano.</strong></h2>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                    <p class="lead text-justify">Nossa especialidade são os estados do Espírito Santo, no Brasil, e da Flórida, nos Estados Unidos. Fluente em português e inglês, nossa equipe cuidadosa garante alto padrão de atendimento a clientes exigentes.</p>
                    <p class="lead text-justify">Nossos profissionais são certificados pelo CRECI - Conselho Regional de Corretores de Imóveis. São mais de 15 anos de experiência nos mercados imobiliários brasileiro e norte-americano.</p>
                    <p class="lead text-justify">A sua satisfação é a nossa missão!</p>
                    <p class="lead text-justify">Por isso, oferecemos tratamento diferenciado, personalizado, que considera todos os detalhes para você ter a melhor qualidade de vida onde deseja morar, trabalhar e investir.</p>
                    <p class="lead text-justify">Porque você é Plus ! Você é Mais!</p>
                    <p class="lead"><i class="fa fa-plus text-primary mr-2"></i> <strong class="font-weight-bold text-dark">Respeito Plus</strong> - mais respeito pelo dinheiro e pelo sonho de quem compra e vende.</p>
                    <p class="lead"><i class="fa fa-plus text-primary mr-2"></i> <strong class="font-weight-bold text-dark">Profissionalismo Plus</strong> - pontualidade, honestidade, transparência e agilidade em todas as etapas dos processos de compra, venda e locação.</p>
                    <p class="lead"><i class="fa fa-plus text-primary mr-2"></i> <strong class="font-weight-bold text-dark">Garantia Plus</strong> - certificação de qualidade dos imóveis, e acompanhamento de todos os trâmites bancários e cartoriais até a emissão da escritura.</p>
                    <p class="lead"><i class="fa fa-plus text-primary mr-2"></i> <strong class="font-weight-bold text-dark">Satisfação Plus</strong> - centenas de clientes satisfeitos com o atendimento personalizado, educado e cuidadoso do princípio ao fim.</p>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
                    <img src="img/img-home4-copyright-277x300.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
                    <img src="img/empresa-300x216.png" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                    <img src="img/a-vivere.png" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row align-items-center bg-color-grey">
            {{-- Valores --}}
            <div class="col-lg-6 p-0">
                <section class="section section-no-border h-100 m-0">
                    <div class="row m-0">
                        <div class="col-half-section col-half-section-left">
                            <div class="overflow-hidden">
                                <h4 class="mb-0">
                                    <a href="javascript:void(0)" class="text-4 font-weight-bold pt-2 d-block text-primary text-decoration-none pb-1">
                                        Valores
                                    </a>
                                </h4>
                            </div>
                            <p class="mb-0">
                                <span class="text-3 lead"> - Ética;</span><br />
                                <span class="text-3 lead"> - Inovação;</span><br />
                                <span class="text-3 lead"> - Custo-benefício perfeito;</span><br />
                                <span class="text-3 lead"> - Excelência em todas as etapas do processo de compra, venda e locação, incluindo captação, negociação, assinatura da escritura e posse do imóvel.</span>
                            </p>
                        </div>
                    </div>
                </section>
            </div>

            {{-- Misssão --}}
            <div class="col-lg-6 p-0">
                <div class="col-half-section col-half-section-right custom-text-align-right">
                    <div class="overflow-hidden">
                        <h4 class="mb-0">
                            <a href="javascript:void(0)" class="text-4 font-weight-bold pt-2 d-block text-primary text-decoration-none pb-1">
                                Missão
                            </a>
                        </h4>
                    </div>
                    <p class="mb-0">
                        <span class="text-3 lead"> - Realizar o sonho dos nossos clientes, respeitando suas exigências e seus limites de investimento;</span><br />
                        <span class="text-3 lead"> - Garantir a melhor experiência de compra, venda e locação, satisfazendo o cliente;</span><br />
                        <span class="text-3 lead"> - Facilitar o acordo entre comprador, vendedor, locador, locatário, atendendo aos interesses de todas as partes envolvidas;</span><br />
                        <span class="text-3 lead"> - Promover o desenvolvimento sustentável da sociedade.</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-color-grey">
            {{-- Visão --}}
            <div class="col-lg-6 p-0">
                <section class="section section-no-border h-100 m-0">
                    <div class="row m-0">
                        <div class="col-half-section col-half-section-left">
                            <div class="overflow-hidden">
                                <h4 class="mb-0">
                                    <a href="javascript:void(0)" class="text-4 font-weight-bold pt-2 d-block text-primary text-decoration-none pb-1">
                                        Visão
                                    </a>
                                </h4>
                            </div>
                            <p class="mb-0">
                                <span class="text-3 lead"> - Ser uma das mais confiáveis e rentáveis empresas de negócios imobiliários e mobiliários do mercado, agregando valor positivo a todos os envolvidos na transação comercial;</span>
                                <span class="text-3 lead"> - Ser sinônimo de saúde, bem-estar, conforto, credibilidade, respeito à natureza e retorno financeiro para clientes, parceiros, investidores e colaboradores.</span>
                            </p>
                        </div>
                    </div>
                </section>
            </div>

            {{-- Principios Corporativos --}}
            <div class="col-lg-6 p-0">
                <div class="col-half-section col-half-section-right custom-text-align-right">
                    <div class="overflow-hidden">
                        <h4 class="mb-0">
                            <a href="javascript:void(0)" class="text-4 font-weight-bold pt-2 d-block text-primary text-decoration-none pb-1">
                                Princípios Corporativos
                            </a>
                        </h4>
                    </div>
                    <p class="mb-0">
                        <span class="text-3 lead"> - Satisfação do cliente;</span><br />
                        <span class="text-3 lead"> - Segurança total nos ambientes internos e externos de trabalho</span><br />
                        <span class="text-3 lead"> - Comprometimento com o mais elevado padrão de qualidade em todos os seus processos operacionais;</span><br />
                        <span class="text-3 lead"> - Meritocracia, humildade e conhecimento multidisciplinar;</span>
                        <span class="text-3 lead"> - Responsabilidade social, integridade, crescimento e rentabilidade.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
