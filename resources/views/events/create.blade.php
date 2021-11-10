@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie seu evento!</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Logo ou Imagem do Evento: (Tamanho máximo 2MB)</label><br>
      <input type="file" class="form-control-file" id="image" name="image" placeholder="Qual é o nome do evento?">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Qual é o nome do evento?">
    </div>
    <div class="form-group">
      <label for="date">Data do Evento:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Onde vai ser o local do evento?">
    </div>
    <div class="form-group">
      <label for="title">Este evento é privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição do evento: (Utilize palavras-chave para o seu evento!)</label>
      <textarea name="description" id="description" class="form-control" placeholder="Escreva aqui do que se trata o evento."></textarea>
    </div>
    <div class="form-group">
      <label for="title">O que vai ter no evento:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="OpenBar">Open Bar
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Música Ao Vivo">Música Ao Vivo
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Conheça seu Ídolo">Conheça seu Ídolo
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Torneio">Torneio
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Sorteios">Sorteios
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Brindes">Brindes
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

<a href="/">Voltar para Home</a>

@endsection