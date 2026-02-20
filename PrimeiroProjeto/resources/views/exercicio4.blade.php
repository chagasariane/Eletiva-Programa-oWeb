@extends('layout')

@section('conteudo')
    <h1>Exercício4</h1>
    <form method="post" action="resposta4">
        @CSRF
        <div class="mb-3">
            <label for="valor1" class="form-label">Insira um valor:</label>
            <input type="number" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="valor2" class="form-label">Insira outro valor:</label>
            <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($div)
        <p class="text-success">O valor da divisão é: {{ $div }}<p>
    @endisset
    @isset($ndiv)
        <p class="text-danger">Não existe divisão por zero!</p>
    @endisset
@endsection

