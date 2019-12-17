@extends('layouts.painel')

@section('content')
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Painel do Admin</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href=" {{ route('home') }}">Painel</a></li>
              <li><i class="fa fa-laptop"></i>Painel do Admin</li>
            </ol>
          </div>
        </div>

        <div class="row">
            <div style="margin: 20px 50px 30px;">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h2><i class="fa fa-cog"></i><strong>Painel de Administração</strong></h2>
                  </div>
                  <div class="panel-body">
                    <table class="table bootstrap-datatable countries">
                      <p>Olá <strong>{{Auth::user()->name}}</strong>.</p> 
                    <p>Seja bem-vindo ao <strong>Painel de Administração</strong>, aqui você pode: editar, adicionar ou remover os dados das tabelas informadas abaixo.</p>
                    <br>
                        <ul class="list-group">
                            <a href="{{route('controlfuncionarios')}}" style="text-decoration:none;">
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                              <i class="fa fa-user" style="margin: 2px;"></i>Funcionários
                              <span class="badge badge-primary badge-pill">{{$qtdfuncionarios}}</span>
                            </li>
                          </a>
                          <a href="{{route('home')}}" style="text-decoration:none;">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                            <i class="glyphicon glyphicon-bed" style="margin: 2px;"></i>Quartos
                            <span class="badge badge-primary badge-pill">{{$qtdquartos}}</span>
                            </li>
                          </a>
                          <a href="{{route('home')}}" style="text-decoration:none;">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <i class="fa fa-dropbox" aria-hidden="true" style="margin: 2px;"></i>Produtos
                              <span class="badge badge-primary badge-pill">X</span>
                            </li>
                          </a>
                          </ul>
                    </table>
                  </div>
    
                </div>
              </div>
        </div>
@endsection