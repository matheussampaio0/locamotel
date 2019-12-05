@extends('layouts.painel')

@section('content')
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Painel de Controle</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href=" {{ route('home') }}">Painel</a></li>
                <li><i class="fa fa-laptop"></i>Painel de Controle</li>
              </ol>
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <a href="{{route('home')}}" style="text-decoration:none;">
                  <div class="info-box green-bg">
                  <i class="fa fa-check"></i>
                  <div class="count">{{$countlivres}}</div>
                  <div class="title">Quartos Disponíveis</div>
                </div>
              </a>
              <!--/.info-box-->
            </div>
            <!--/.col-->
  
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="{{route('home')}}" style="text-decoration:none;">
                <div class="info-box red-bg">
                  <i class="fa fa-exclamation-triangle"></i>
                  <div class="count">{{$countocupados}}</div>
                  <div class="title">Quartos Indisponíveis</div>
                </div>
              </a>
              <!--/.info-box-->
            </div>
            <!--/.col-->
  
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="info-box dark-bg">
                <i class="fa fa-tasks"></i>
                <div class="count">X</div>
                <div class="title">Nº de Horas no Mês</div>
              </div>
              <!--/.info-box-->
            </div>
            <!--/.col-->
  
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="info-box green-bg">
                <i class="fa fa-cubes"></i>
                <div class="count">1.426</div>
                <div class="title">Stock</div>
              </div>
              <!--/.info-box-->
            </div>
            <!--/.col-->
  
          </div>
          <!--/.row-->
  
  
          <div class="row">
              <div class="col-lg-9 col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2><i class="fa fa-flag-o red"></i><strong>Quartos Indisponíveis</strong></h2>
                    </div>
                    <div class="panel-body">
                      <table class="table bootstrap-datatable countries">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Nome</th>
                            <th>Número</th>
                            <th>Horas</th>
                            <th>Tempo</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($quartos as $quarto)
                            @if(!$quarto->livre)
                          <tr>
                            <td><img src="NiceAdmin/img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                          <td>{{$quarto->nome}}</td>
                            <td>{{$quarto->number}}</td>
                            <td>0<td>
                            <td>
                              <div class="progress thin">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                                </div>
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
                                </div>
                              </div>
                              <span class="sr-only">73%</span>
                            </td>
                          </tr>
                          @endif
                          @endforeach
                        </tbody>
                      </table>
                    </div>
      
                  </div>
                </div>
          </div>
  
  
          <!-- Today status end -->
  
  
  
          <div class="row">

            <!--/col-->
            
            </div>
            <!--/col-->
  
          </div>
  
  
  
          <!-- statics end -->
                </div>
  
  
              </div>
            </div>
  
            <div class="col-lg-8">
              
            </div>
          </div><br><br>
  
                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>
  
            </div>
  
          </div>
          <!-- project team & activity end -->
      <!--main content end-->
@endsection