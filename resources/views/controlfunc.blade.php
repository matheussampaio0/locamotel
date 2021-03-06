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

<div class="container">
  <div class="row">
    <div class="col-sm-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2><i class="fa fa-cog"></i><strong>Controle de Funcionários</strong></h2>
          </div>
          <div class="panel-body">
            <table class="table bootstrap-datatable countries">
            <p>Seja bem-vindo ao <strong>Controle de Funcionário</strong>, aqui você pode: adicionar novos funcionários, remover ou editar os já cadastrados.</p>
            <br>
                    <table class="table table-hover table-white">
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
                            <td>
                              <button type="button" style="border: 0px; border-radius: 10px;"><a><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                              <!-- Button trigger modal -->
                              <button type="button" data-toggle="modal" data-target="#myModal" style="border: 0px; border-radius: 10px;"><a><i class="fa fa-trash-o" aria-hidden="true"></i></a></button>
                            </td>
                          </tr>
                          @endforeach
                          <caption>Lista de Funcionários</caption>
                        </tbody>
                      </table>
                      
                      
                      <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                            Adicionar Funcionário
                          </button>
            </table>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
      <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small>3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small>Donec id elit non mi porta.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
          </a>
        </div>
      </div>
  </div>
</div>

@endsection
