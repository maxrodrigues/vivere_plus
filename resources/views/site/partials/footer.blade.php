<footer id="footer" style="margin-top: 0;">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h5 class="text-3 mb-3">Escritório</h5>
                <ul class="list list-icons list-icons-lg">
                    <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">Rua Don Jorge de Menezes, 1173 , Prainha Vila Velha, ES 29.100-250</p></li>
                    <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(27) 997 333 555</a></p></li>
                    <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(27) 999 732 004</a></p></li>
                    <li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">contato@vivereplus.com</a></p></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3">LINKS</h5>
                <ul class="list">
                    <li class="mb-1"><a href="{{ route('forwarding_agent') }}">Despachante e Serviços Cartoriais</a></li>
                    <li class="mb-1"><a href="{{ route('international') }}">Internacional</a></li>
                    <li class="mb-1"><a href="{{ route('financing') }}">Financiamento</a></li>
                    <li class="mb-1"><a href="{{ route('pair') }}">Parceiros</a></li>
                    <li class="mb-1"><a href="{{ route('broker') }}">Contratando uma corretora de imóveis</a></li>
                    <li class="mb-1"><a href="{{ route('sustainability') }}">Sustentabilidade</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2">
                <h5 class="text-3 mb-3">SIGA-NOS</h5>
                <ul class="footer-social-icons social-icons m-0">
                    <li class="social-icons-facebook"><a href="https://www.facebook.com/viveremaisvivereplus" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                    <li class="social-icons-instagram"><a href="https://www.instagram.com/vivereplus/" target="_blank" title="Instagram"><i class="fab fa-instagram text-2"></i></a></li>
                    <li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UCruPhd2xqsunlzBYJNmY5Dw" target="_blank" title="Youtube"><i class="fab fa-youtube text-2"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3">NEWSLETTER</h5>
                <div class="alert alert-success d-none" id="newsletterSuccess">
                    <strong>Sucesso!</strong> Você foi adicionado à nossa lista de e-mail.
                </div>
                <div class="alert alert-danger d-none" id="newsletterError"></div>
                <form id="newsletterForm" action="{{ route('newsletter.store') }}" method="POST" class="mr-4 mb-3 mb-md-0">
                    @csrf
                    @method('post')
                    <div class="input-group input-group-rounded">
                        <input class="form-control form-control-sm bg-light" placeholder="Receba novidades" name="newsletterEmail" id="newsletterEmail" type="text">
                        <span class="input-group-append">
                            <button class="btn btn-light text-color-dark" type="submit"><strong>CADASTRE-SE</strong></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-lg-2 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                    <a href="index.html" class="logo pe-0 pe-lg-3">
                        <img alt="Vivere Plus website" src="{{ asset('img/logo-branca-pequena.png') }}" class="opacity-5" height="32">
                    </a>
                </div>
                <div class="col-lg-10 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <p>Todos os direitos reservados à Vivere Plus © 2021 |  All rights reserved to Vivere Plus© 2021 |  Registro CRECI-ES: 5524</p>
                </div>
            </div>
        </div>
    </div>
</footer>
