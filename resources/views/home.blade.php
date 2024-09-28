@extends('layout')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
<div class="container home-container">
    <h1>Bem-vindo ao Sistema de Gerenciamento de Animais!</h1>

    <div class="row">
        <div class="col-md-4 missão-container">
            <h2>Missão</h2>
            <p>Nossa missão é facilitar o registro e a gestão de informações sobre espécies animais, promovendo a
                conscientização e a preservação da biodiversidade. Através de uma plataforma intuitiva, buscamos
                empoderar indivíduos e organizações a contribuírem ativamente para a conservação da fauna.</p>
        </div>
        <div class="col-md-4 visão-container">
            <h2>Visão</h2>
            <p>Ser a principal referência em soluções digitais para o gerenciamento de dados sobre animais, reconhecida
                pela sua eficácia e impacto positivo na conservação da biodiversidade. Aspiramos a criar uma comunidade
                engajada e informada que valorize a preservação da vida animal em todo o mundo.</p>
        </div>
        <div class="col-md-4 valores-container">
            <h2>Valores</h2>
            <ul>
                <li><span class="highlight">Conservação:</span> Comprometemo-nos a promover práticas que ajudem na
                    proteção e preservação das espécies.</li>
                <li><span class="highlight">Inovação:</span> Buscamos constantemente melhorar nossa plataforma e
                    processos, incorporando novas tecnologias e ideias.</li>
                <li><span class="highlight">Transparência:</span> Atuamos com clareza e honestidade em todas as nossas
                    ações, garantindo confiança e integridade.</li>
                <li><span class="highlight">Colaboração:</span> Valorizamos o trabalho em equipe e a parceria com
                    organizações e indivíduos que compartilham nossa missão.</li>
                <li><span class="highlight">Educação:</span> Acreditamos que a informação é a chave para a conservação e
                    buscamos educar nossos usuários sobre a importância da biodiversidade.</li>
            </ul>
        </div>
    </div>
    @endsection

    @section('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
    @endsection