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
                                    <label for="type_immobile_id">Tipo de Imóvel <span class="text-danger">*</span></label>
                                    <select name="type_immobile_id" id="type_immobile_id" class="form-control @error('type_immobile_id') is-invalid @enderror">
                                        <option value="">.: SELECIONE :.</option>
                                        @forelse ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @empty
                                            <option value="">Nenhum tipo de imóvel foi encontrado</option>
                                        @endforelse
                                    </select>
                                    @error('type_immobile_id')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Nome <span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
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
                                    <input type="number" name="bedrooms" id="bedrooms" class="form-control @error('bedrooms') is-invalid @enderror" value="{{ old('bedrooms') }}">
                                    @error('bedrooms')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="bathrooms">Banheiros <span class="text-danger">*</span></label>
                                    <input type="number" name="bathrooms" id="bathrooms" class="form-control @error('bathrooms') is-invalid @enderror" value="{{ old('bathrooms') }}">
                                    @error('bathrooms')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="suites">Suítes</label>
                                    <input type="number" name="suites" id="suites" class="form-control" value="{{ old('suites') }}">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="garage">Vagas de garagem</label>
                                    <input type="number" name="garage" id="garage" class="form-control" value="{{ old('garage') }}">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="area">Área <span class="text-danger">*</span></label>
                                    <input type="text" name="area" id="area" class="form-control area @error('area') is-invalid @enderror" placeholder="99,99 m²" value="{{ old('area') }}">
                                    @error('area')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="approximate_area">Área aproximada <span class="text-danger">*</span></label>
                                    <input type="text" name="approximate_area" id="approximate_area" class="form-control area @error('approximate_area') is-invalid @enderror" placeholder="99,99 m²" value="{{ old('approximate_area') }}">
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
                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
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
                                    <input type="text" name="price" id="price" class="form-control mask @error('price') is-invalid @enderror" value="{{ old('price') }}">
                                    @error('price')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="condominium">Condomínio</label>
                                    <input type="text" name="condominium" id="condominium" class="form-control mask @error('condominium') is-invalid @enderror" value="{{ old('condominium') }}">
                                    @error('condominium')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="tax">IPTU <span class="text-danger">*</span></label>
                                    <input type="text" name="tax" id="tax" class="form-control mask @error('tax') is-invalid @enderror" value="{{ old('tax') }}">
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
                                    <input type="text" name="zipcode" id="zipcode" class="form-control @error('zipcode') is-invalid @enderror" value="{{ old('zipcode') }}">
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
                                    <input type="text" name="street" id="street" class="form-control @error('street') is-invalid @enderror" value="{{ old('street') }}">
                                    @error('street')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-12">
                                <div class="form-group">
                                    <label for="number">Número</label>
                                    <input type="text" name="number" id="number" class="form-control" value="{{ old('number') }}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="complement">Complemento</label>
                                    <input type="text" name="complement" id="complement" class="form-control" value="{{ old('complement') }}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="neighborhood">Bairro <span class="text-danger">*</span></label>
                                    <input type="text" name="neighborhood" id="neighborhood" class="form-control @error('neighborhood') is-invalid @enderror" value="{{ old('neighborhood') }}">
                                    @error('neighborhood')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="city">Cidade <span class="text-danger">*</span></label>
                                    <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}">
                                    @error('city')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="state">Estado <span class="text-danger">*</span></label>
                                    <input type="text" name="state" id="state" class="form-control @error('state') is-invalid @enderror" value="{{ old('state') }}">
                                    @error('state')
                                        <span class="feedback-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-3 p-2 text-center">Escrever algo que separe os proximos itens</h5>
                        <div class="row">
                            @forelse ($typeAttributes as $typeAttribute)
                                <div class="col-12">
                                    <h5>{{ $typeAttribute->name }}</h5>
                                    <div class="row">
                                        @forelse ($typeAttribute->attributes as $attribute)
                                            <div class="form-group mx-2">
                                                <div class="icheck-primary d-inline">
                                                    <input type="checkbox" name="attribute[]" value="{{$attribute->id}}" id="attribute-{{$attribute->id}}" class="form-control">
                                                    <label for="attribute-{{$attribute->id}}">{{ $attribute->name }}</label>
                                                </div>
                                            </div>
                                        @empty
                                            Nenhum item encontrado
                                        @endforelse
                                    </div>
                                </div>
                            @empty
                                Nenhum item encontrado
                            @endforelse
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

@section('plugins.iCheckBootstrap', true)

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
                let area = $('#area').maskMoney('unmasked')[0];
                let approximate_area = $('#approximate_area').maskMoney('unmasked')[0];
                let price = $('#price').maskMoney('unmasked')[0];
                let condominium = $('#condominium').maskMoney('unmasked')[0];
                let tax = $('#tax').maskMoney('unmasked')[0];

                $('#area').val(area);
                $('#approximate_area').val(approximate_area);
                $('#price').val(price);
                $('#condominium').val(condominium);
                $('#tax').val(tax);
            })

            $('#new-zipcode').on('click', function () {
                $('#zipcode').removeAttr('readonly', 'readonly').val('')
                $('#street').removeAttr('readonly', 'readonly').val('')
                $('#neighborhood').removeAttr('readonly', 'readonly').val('')
                $('#city').removeAttr('readonly', 'readonly').val('')
                $('#state').removeAttr('readonly', 'readonly').val('')
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

                        $('#zipcode').attr('readonly', 'readonly').val(data.cep)
                        $('#street').attr('readonly', 'readonly').val(data.logradouro)
                        $('#neighborhood').attr('readonly', 'readonly').val(data.bairro)
                        $('#city').attr('readonly', 'readonly').val(data.localidade)
                        $('#state').attr('readonly', 'readonly').val(data.uf)
                    })
            })
        })
    </script>
@endsection
