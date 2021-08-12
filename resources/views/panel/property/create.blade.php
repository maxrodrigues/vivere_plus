@extends('adminlte::page')

@section('title', 'Cadastro de Imóvel')

@section('content_header')
    <h1>Cadastro de Imóvel</h1>
@stop

@section('content')
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <a href="{{ route('panel.property.index') }}" class="btn btn-primary">
                <i class="fas fa-fw fa-arrow-circle-left"></i>
                Voltar
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar novo imóvel</h3>
                </div>
                <form id="store-property" action="{{ route('panel.property.store') }}" method="post" autocomplete="on">
                    @csrf
                    @method('post')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Nome <span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="bedrooms">Quartos <span class="text-danger">*</span></label>
                                    <input type="number" name="bedrooms" id="bedrooms" class="form-control @error('bedrooms') is-invalid @enderror">
                                    @error('bedrooms')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="bathrooms">Banheiros <span class="text-danger">*</span></label>
                                    <input type="number" name="bathrooms" id="bathrooms" class="form-control @error('bathrooms') is-invalid @enderror">
                                    @error('bathrooms')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="suites">Suítes</label>
                                    <input type="number" name="suites" id="suites" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="garage">Vagas de garagem</label>
                                    <input type="number" name="garage" id="garage" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="area">Área <span class="text-danger">*</span></label>
                                    <input type="text" name="area" id="area" class="form-control area @error('area') is-invalid @enderror" placeholder="99,99 m²">
                                    @error('area')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="approximate_area">Área aproximada <span class="text-danger">*</span></label>
                                    <input type="text" name="approximate_area" id="approximate_area" class="form-control area @error('approximate_area') is-invalid @enderror" placeholder="99,99 m²">
                                    @error('approximate_area')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Descrição <span class="text-danger">*</span></label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"></textarea>
                                    @error('description')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="price">Valor <span class="text-danger">*</span></label>
                                    <input type="text" name="price" id="price" class="form-control mask @error('price') is-invalid @enderror">
                                    @error('price')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="condominium">Condomínio</label>
                                    <input type="text" name="condominium" id="condominium" class="form-control mask @error('condominium') is-invalid @enderror">
                                    @error('condominium')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="tax">IPTU <span class="text-danger">*</span></label>
                                    <input type="text" name="tax" id="tax" class="form-control mask @error('tax') is-invalid @enderror">
                                    @error('tax')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="zipcode">CEP <span class="text-danger">*</span></label>
                                    <input type="text" name="zipcode" id="zipcode" class="form-control @error('zipcode') is-invalid @enderror">
                                    <small>
                                        <a href="javascript:void(0)" id="new-zipcode">
                                            Adicionar um cep diferente
                                        </a>
                                    </small>
                                    @error('zipcode')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-10 col-12">
                                <div class="form-group">
                                    <label for="street">Rua <span class="text-danger">*</span></label>
                                    <input type="text" name="street" id="street" class="form-control @error('street') is-invalid @enderror">
                                    @error('street')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-12">
                                <div class="form-group">
                                    <label for="number">Número</label>
                                    <input type="text" name="number" id="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="complement">Complemento</label>
                                    <input type="text" name="complement" id="complement" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="neighborhood">Bairro <span class="text-danger">*</span></label>
                                    <input type="text" name="neighborhood" id="neighborhood" class="form-control @error('neighborhood') is-invalid @enderror">
                                    @error('neighborhood')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="city">Cidade <span class="text-danger">*</span></label>
                                    <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror">
                                    @error('city')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="state">Estado <span class="text-danger">*</span></label>
                                    <input type="text" name="state" id="state" class="form-control @error('state') is-invalid @enderror">
                                    @error('state')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('vendor/maskMoney/jquery.maskMoney.min.js') }}"></script>
    <script>
        $(function () {
            $('.mask').maskMoney({
                thousands: '.',
                decimal: ',',
                allowZero: true,
                prefix: "R$"
            })

            $('.area').maskMoney({
                thousands: '.',
                decimal: ',',
                allowZero: true,
                suffix: "m²"
            })

            $('#store-property').on('submit', function(e) {
                e.preventDefault();
                $('.mask').maskMoney('destroy');

                // $('.area').maskMoney({thousands:'', decimal:'.'})
                $('.mask').maskMoney({thousands:'', decimal:'.'})
                $('.mask').maskMoney('mask');
                return false;
            })

            $('#new-zipcode').on('click', function () {
                $('#zipcode').removeAttr('disabled', 'disabled').val('')
                $('#street').removeAttr('disabled', 'disabled').val('')
                $('#neighborhood').removeAttr('disabled', 'disabled').val('')
                $('#city').removeAttr('disabled', 'disabled').val('')
                $('#state').removeAttr('disabled', 'disabled').val('')
            })

            $('#zipcode').on('focusout', function (e){
                e.preventDefault();
                let zipcode = $(this).val()

                fetch(`https://viacep.com.br/ws/${zipcode}/json/unicode/`)
                    .then(response => {
                        return response.json();
                    })
                    .then(data => {
                        if(data.erro){
                            return false;
                        }

                        $('#zipcode').attr('disabled', 'disabled').val(data.cep)
                        $('#street').attr('disabled', 'disabled').val(data.logradouro)
                        $('#neighborhood').attr('disabled', 'disabled').val(data.bairro)
                        $('#city').attr('disabled', 'disabled').val(data.localidade)
                        $('#state').attr('disabled', 'disabled').val(data.uf)
                    })
            })
        })
    </script>
@endsection
