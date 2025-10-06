@extends('index.index')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center ">
        <a href="{{ url('/home') }}">
            <button class="mt-5 align-start btn btn-primary">Voltar</button>
        </a>
        <h1 class="mt-5 text-center text-white mx-auto">Adicionar projeto</h1>
    </div>
    <div class="project-form-div w-50 mx-auto">
        <div class="row mx-auto mt-3">
            <div class="col">
                <label for="" class="col-form-label">N° do projeto:</label>
                <input type="text" class="form-control" name="project_number" value="{{ old('project_number') }}">
            </div>
            <div class="col">
                <label for="" class="col-form-label">Cliente:</label>
                <input type="text" class="form-control" name="client" value="{{ old('client') }}">
            </div>
            <div class="col">
                <label for="" class="col-form-label">Contato:</label>
                <input type="text" class="form-control" name="contact" value="{{ old('contact') }}">
            </div>
        </div>
        <div class="row mx-auto mt-3">
            <div class="col">
                <label for="" class="col-form-label">Nome do projeto:</label>
                <input type="text" class="form-control" name="project_name" value="{{ old('project_name') }}">
            </div>
        </div>
        <div class="row mx-auto mt-3">
            <div class="col">
                <label for="" class="col-form-label">Nivel de curto circuito:</label>
                <select class="form-select" name="short-circuit_level">
                    <option value="" selected disabled hidden>-- Selecione --</option>
                    <option value="36kA-220V">36kA-220V</option>
                    <option value="25kA-380V">25kA-38V</option>
                    <option value="16kA-440V">16kA-440V</option>
                    <option value="55kA-220V">55kA-220V</option>
                    <option value="36kA-380V">36kA-38V</option>
                    <option value="36kA-440V">36kA-440V</option>
                    <option value="70kA-220V">70kA-220V</option>
                    <option value="55kA-380V">55kA-38V</option>
                    <option value="55kA-440V">55kA-440V</option>
                </select>
            </div>
            <div class="col">
                <label for="" class="col-form-label">Classe DPS:</label>
                <select class="form-select" name="dps_class">
                    <option value="" selected disabled hidden>-- Selecione --</option>
                    <option value="classe I">Classe I</option>
                    <option value="classe II">Classe II</option>
                    <option value="classe I+II">Classe I+II</option>
                </select>
            </div>
            <div class="col">
                <label for="" class="col-form-label">Chaparia:</label>
                <select class="form-select" name="enclosure_type">
                    <option value="" selected disabled hidden>-- Selecione --</option>
                    <option value="inox">Inox</option>
                    <option value="aço carbono">Aço Carbono</option>
                </select>
            </div>
        </div>
        <div class="row mx-auto mt-3">
            <div class="col">
                <label for="" class="col-form-label">Medição de energia:</label>
                <select class="form-select" name="energy_metering">
                    <option value="" selected disabled hidden>-- Selecione --</option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
            <div class="col">
                <label for="" class="col-form-label">Chave de aterramento:</label>
                <select class="form-select" name="grounding_switch">
                    <option value="" selected disabled hidden>-- Selecione --</option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
            <div class="col">
                <label for="" class="col-form-label">Estação de teste de tensão:</label>
                <select class="form-select" name="tension_testing">
                    <option value="" selected disabled hidden>-- Selecione --</option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
        </div>
        <div class="row mx-auto mt-3">
            <div class="blank"></div>
            <div class="col mx-auto">
                <label for="" class="col-form-label">Categoria de segurança:</label>
                <select class="form-select" name="security_category">
                    <option value="" selected disabled hidden>-- Selecione --</option>
                    <option value="cat1">Categoria 1</option>
                    <option value="cat2">Categoria 2</option>
                    <option value="cat3">Categoria 3</option>
                    <option value="cat4">Categoria 4</option>
                </select>
            </div>
            <div class="col mx-auto">
                <label for="" class="col-form-label">Comando 220V:</label>
                <select class="form-select" name="220V_command">
                    <option value="" selected disabled hidden>-- Selecione --</option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
            <div class="blank"></div>
        </div>
        <div class="row mt-3">
                <button class="btn btn-success mx-auto w-25 mt-3">Salvar</button>
        </div>
    </div>
</div>

@endsection