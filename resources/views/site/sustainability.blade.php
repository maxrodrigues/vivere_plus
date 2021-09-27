@extends('site.page', ['active' => null])

@section('title', 'Vivere Plus - Sustentabilidade')

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url(img/page-header/page-header-services.jpg);">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Sustentabilidade</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Sustentabilidade</li>
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
                                Uma das missões da <span class="text-primary font-weight-bold alternative-font-2">Vivere
                                    Plus</span> é promover o desenvolvimento sustentável da sociedade. (consulte “<span
                                    class="text-primary font-weight-bold alternative-font-2">A
                                    Vivere</span>” para conhecer os valores da nossa empresa)
                            </p>
                            <p class="text-justify lead">
                                A construção civil é um dos setores produtivos que mais consomem recursos hídricos,
                                energéticos e minerais. Conforme o Conselho Internacional da Construção (CIB), pode gerar
                                mais de 50% dos resíduos sólidos produzidos pela sociedade. Ciente de sua responsabilidade
                                social, a <span class="text-primary font-weight-bold alternative-font-2">Vivere Plus</span>
                                está comprometida com o equilíbrio em todos os processos da
                                construção. Priorizamos o respeito ao meio ambiente, a saúde da população, e a otimização
                                dos recursos econômicos e sociais.
                            </p>
                            <p class="text-justify lead">
                                Comercializamos imóveis concebidos e construídos de acordo com as exigências da
                                sociedade. Isso inclui consumo consciente de matérias-primas, água e energia elétrica,
                                além do reaproveitamento de resíduos e da redução de desperdícios. Essa política de
                                sustentabilidade <u>diminui o custo final dos imóveis</u> para você, cliente <span
                                    class="text-primary font-weight-bold alternative-font-2">Vivere Plus</span>.
                            </p>
                            <p class="text-justify lead">
                                Quem vive, trabalha ou estuda em imóveis ambientalmente corretos usufrui de:
                            <ol class="list list-ordened list-ordened-style-3 lead m-0 p-0">
                                <li class="appear-animation animated fadeInUp appear-animation-visible mb-4"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                                    <span class="text-primary font-weight-bold alternative-font-2">Mais</span> conforto,
                                    devido aos cuidados arquitetônicos com controle térmico, otimização da luz natural,
                                    reaproveitamento de água de chuva e utilização de materiais não tóxicos;
                                </li>
                                <li class="appear-animation animated fadeInUp appear-animation-visible mb-4"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                                    <span class="text-primary font-weight-bold alternative-font-2">Mais</span> beleza e
                                    conforto visual;
                                </li>
                                <li class="appear-animation animated fadeInUp appear-animation-visible mb-4"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                                    <span class="text-primary font-weight-bold alternative-font-2">Mais</span> facilidade de
                                    comercialização, devido à valorização das tecnologias sustentáveis.
                                </li>
                            </ol>
                            </p>
                            <p class="text-justify lead">
                                As ações sustentáveis reduzem impactos ambientais antes, durante e após a construção
                                dos imóveis. E, por outro lado, essas mesmas ações aumentam a viabilidade econômica
                                e a qualidade de vida das gerações atuais e futuras.
                            </p>
                            <p class="text-justify lead">
                                No Brasil ainda são poucos os incentivos fiscais destinados às chamadas “construções
                                verdes”. As obras ecologicamente corretas podem contar com alguns tipos de
                                financiamento e desconto em impostos. Saiba mais em nosso <a
                                    href="{{ route('blog') }}">blog</a> ou consulte-nos em
                                contato para obter detalhes. Ao redor do mundo, principalmente em países desenvolvidos,
                                há uma série de incentivos econômicos para construções verdes. Um exemplo é a
                                Alemanha, que remunera os cidadãos que produzem um excedente de energia obtida por
                                placas fotovoltaicas (de energia solar)
                            </p>
                            <p class="text-justify lead">
                                Em nosso país, os incentivos podem não ser suficientes e tão eficientes, mas já ajudam a
                                reduzir a carga tributária das construções. Um dos incentivos fiscais que existem em
                                diversas cidades brasileiras é o <strong class="text-quaternary">IPTU Verde</strong>,
                                desconto que é dado no IPTU para obras de
                                construção ou reforma que implementam sistemas ecoeficientes.
                                Cada cidade que utiliza o IPTU Verde determina o valor dos descontos, que variam de 5%
                                a 20%. Alguns sistemas ecoeficientes são:
                            <ul class="list list-icons list-primary">
                                <li class="appear-animation animated fadeInUp appear-animation-visible"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                                    <i class="fas fa-check"></i>Captação da chuva, reaproveitamento e diminuição do
                                    consumo de água;
                                </li>
                                <li class="appear-animation animated fadeInUp appear-animation-visible"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                                    <i class="fas fa-check"></i>Eficiência energética e adoção de energias limpas, como a
                                    fotovoltaica (sol) e a eólica (vento) para geração de eletricidade e aquecimento de
                                    água;
                                </li>
                                <li class="appear-animation animated fadeInUp appear-animation-visible"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                                    <i class="fas fa-check"></i>Utilização de materiais ecológicos, como madeira
                                    certificada e produtos recicláveis;
                                </li>
                                <li class="appear-animation animated fadeInUp appear-animation-visible"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                                    <i class="fas fa-check"></i>Manejo correto de resíduos, para que sejam totalmente
                                    reaproveitados na cadeia produtiva.
                                </li>
                            </ul>
                            </p>
                            <p class="text-justify lead">
                                De acordo com o Sebrae, as construções sustentáveis podem alcançar:
                            <ul class="list list-icons list-primary">
                                <li class="appear-animation animated fadeInUp appear-animation-visible"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                                    <i class="fas fa-check"></i>30% no consumo de energia elétrica;
                                </li>
                                <li class="appear-animation animated fadeInUp appear-animation-visible"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                    <i class="fas fa-check"></i>35% na emissão de gases de efeito estufa;
                                </li>
                                <li class="appear-animation animated fadeInUp appear-animation-visible"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="600">
                                    <i class="fas fa-check"></i>50% no consumo de água;
                                </li>
                                <li class="appear-animation animated fadeInUp appear-animation-visible"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="900">
                                    <i class="fas fa-check"></i>50 a 80% no descarte de resíduos;
                                </li>
                                <li class="appear-animation animated fadeInUp appear-animation-visible"
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="1200">
                                    <i class="fas fa-check"></i>8 a 9% no custo operacional total da obra.
                                </li>
                            </ul>
                            Um projeto de construção sustentável pode ficar de 1% a 7% mais caro durante a
                            implantação, mas valoriza o preço do imóvel em aproximadamente 10%.
                            </p>
                            <p class="text-justify lead">
                                Esperando por Mais
                                No ano de 2018, o Senado brasileiro aprovou o <strong class="text-quaternary">Projeto de Lei
                                    (PLS 252/2014)*</strong>, criado
                                em 2014, para oferecer incentivos econômicos às construções que reduzem o consumo de água e
                                aumentam a eficiência energética. Mas o projeto ainda precisa ter o aval da
                                Câmara dos Deputados, onde há mais de três anos aguarda para ser votado.
                                <br>
                                <small>*www25.senado.leg.br/web/atividade/materias/-/materia/118455</small>
                            </p>
                            <p class="text-justify lead">
                                A <span class="text-primary font-weight-bold alternative-font-2">Vivere Plus</span> fica na
                                torcida para os parlamentares federais aprovarem o projeto, criando
                                a lei que promoverá <span
                                    class="text-primary font-weight-bold alternative-font-2">mais</span> respeito ao meio
                                ambiente, reduzindo o preço dos imóveis.
                            </p>
                            <p class="text-justify lead">
                                Clique <a href="{{ route('blog') }}">aqui</a> para saber <span
                                    class="text-primary font-weight-bold alternative-font-2">mais</span> sobre materiais
                                sustentáveis na construção civil
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
