@extends('adminlte::page')

@section('title', 'SISBIL')

@section('content_header')
@stop

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header text-center"  >
          <h3>Bem-vindo ao Sistema de Controle do Pessoal do 2º BIL</h3>
        </div><!-- /.card-header -->
        <div class="card-body  text-center" >
          <img src="../images/bil.jpeg" class="img-fluid w-75"  alt="Imagem responsiva">
        </div><!-- /.card-Body -->
      </div>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop   
