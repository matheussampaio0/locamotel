@extends('layouts.painel')

@section('content')
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Controle de Quartos</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href=" {{ route('home') }}">Painel</a></li>
              <li><i class="fa fa-laptop"></i>Controle de Quartos</li>
            </ol>
          </div>
        </div>

        <div class="row">
            <div style="margin: 20px 50px 30px;">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h2><i class="fa fa-flag-o red"></i><strong>Painel de Administração</strong></h2>
                  </div>
                  <div class="panel-body">
                    <table class="table bootstrap-datatable countries">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Funcionários
                              <span class="badge badge-primary badge-pill">{{$qtdfuncionarios}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Quartos
                            <span class="badge badge-primary badge-pill">{{$qtdquartos}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Produtos
                              <span class="badge badge-primary badge-pill">X</span>
                            </li>
                          </ul>
                    </table>
                  </div>
    
                </div>
              </div>
        </div>
@endsection