@extends('layout')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>Cadastro de Animais</h1>
    <form action="{{ route('cadastrar-Animais') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nomeAnimal">Nome do Animal</label>
            <input type="text" class="form-control" id="nomeAnimal" name="nomeAnimal"
                placeholder="Digite o nome do animal" required>
        </div>
        <div class="form-group">
            <label for="habitatNatural">Habitat Natural</label>
            <input type="text" class="form-control" id="habitatNatural" name="habitatNatural"
                placeholder="Digite o habitat natural" required>
        </div>
        <div class="form-group">
            <label for="dietaAnimal">Dieta do Animal</label>
            <input type="text" class="form-control" id="dietaAnimal" name="dietaAnimal"
                placeholder="Digite a dieta do animal" required>
        </div>
        <div class="form-group">
            <label for="statusConservacao">Status de Conservação</label>
            <select class="form-control" id="statusConservacao" name="statusConservacao" required>
                <option value="">Selecione o status</option>
                <option value="Extinto">Extinto</option>
                <option value="Em Perigo">Em Perigo</option>
                <option value="Vulnerável">Vulnerável</option>
                <option value="Pouco Preocupante">Pouco Preocupante</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary custom-margin-top">Cadastrar</button>
    </form>
</div>

@endsection