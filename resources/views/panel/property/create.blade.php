@extends('adminlte::page')

@section('title', 'Tipos de atributos para imóvel')

@section('content_header')
    <h1>Imóvel</h1>
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
                <form action="{{ route('panel.property.store') }}" method="post" autocomplete="off">
                    @csrf
                    @method('post')
                    <div class="card-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Nome <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="feedback-error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="bedrooms">Quartos</label>
                                    <input type="number" name="bedrooms" id="bedrooms" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="bathrooms">Banheiros</label>
                                    <input type="number" name="bathrooms" id="bathrooms" class="form-control">
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
                                    <label for="area">Área</label>
                                    <input type="text" name="area" id="area" class="form-control" placeholder="99,99 m²">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-6">
                                <div class="form-group">
                                    <label for="approximate_area">Área aproximada</label>
                                    <input type="text" name="approximate_area" id="approximate_area" class="form-control" placeholder="99,99 m²">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Descrição</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="price">Valor</label>
                                    <input type="text" name="price" id="price" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="condominium">Condomínio</label>
                                    <input type="text" name="condominium" id="condominium" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="tax">IPTU</label>
                                    <input type="text" name="tax" id="tax" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="zipcode">CEP</label>
                                    <input type="text" name="zipcode" id="zipcode" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-10 col-12">
                                <div class="form-group">
                                    <label for="street">Rua</label>
                                    <input type="text" name="street" id="street" class="form-control">
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
                                    <label for="neighborhood">Bairro</label>
                                    <input type="text" name="neighborhood" id="neighborhood" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="city">Cidade</label>
                                    <input type="text" name="city" id="city" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="state">Estado</label>
                                    <input type="text" name="state" id="state" class="form-control">
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
@stop
