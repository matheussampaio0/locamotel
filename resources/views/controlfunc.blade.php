@extends('layouts.painel')

@section('content')

<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-laptop"></i> Controle de Funcionários</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href=" {{ route('home') }}">Painel</a></li>
        <li><i class="fa fa-laptop"></i><a href=" {{ route('adminpanel') }}">Painel do Admin</a></li>
        <li><i class="fa fa-user"> Controle de Funcionários</i>
      </ol>
    </div>
  </div>

  <div class="row">
    <div style="margin: 20px 50px 30px;">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2><i class="fa fa-cog"></i><strong>Controle de Funcionários</strong></h2>
          </div>
          <div class="panel-body">
            <table class="table bootstrap-datatable countries">
              <p>Olá <strong>{{Auth::user()->name}}</strong>.</p> 
            <p>Seja bem-vindo ao <strong>Controle de Funcionário</strong>, aqui você pode: adicionar novos funcionários, remover ou editar os já cadastrados.</p>
            <br>
                    <table class="table table-hover table-dark">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOME</th>
                            <th scope="col">CPF</th>
                            <th scope="col">CELULAR</th>
                            <th scope="col">EDITAR</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($funcionarios as $funcionario)
                          <tr>
                          <th scope="row">{{ $funcionario->id }}</th>
                            <td>{{ $funcionario->nome }}</td>
                            <td>{{ $funcionario->cpf }}</td>
                            <td>{{ $funcionario->celular }}</td>
                          </tr>
                          @endforeach
                          <caption>Lista de Funcionários</caption>
                        </tbody>
                      </table>
            </table>
          </div>
        </div>
      </div>
</div>

@endsection
