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
              <div class="info-box blue-bg">
                <i class="fa fa-cloud-download"></i>
                <div class="count">{{$countlivres}}</div>
                <div class="title">Quartos Disponíveis</div>
              </div>
              <!--/.info-box-->
            </div>
            <!--/.col-->
  
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="info-box brown-bg">
                <i class="fa fa-shopping-cart"></i>
                <div class="count">{{$countocupados}}</div>
                <div class="title">Quartos Ocupados</div>
              </div>
              <!--/.info-box-->
            </div>
            <!--/.col-->
  
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="info-box dark-bg">
                <i class="fa fa-thumbs-o-up"></i>
                <div class="count">230</div>
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
                  <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
                  <div class="panel-actions">
                    <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                    <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                  </div>
                </div>
                <div class="panel-body-map">
                  <div id="map" style="height:380px;"></div>
                </div>
  
              </div>
            </div>
            <div class="col-md-3">
              <!-- List starts -->
              <ul class="today-datas">
                <!-- List #1 -->
                <li>
                  <!-- Graph -->
                  <div><span id="todayspark1" class="spark"></span></div>
                  <!-- Text -->
                  <div class="datas-text">11,500 visitors/day</div>
                </li>
                <li>
                  <div><span id="todayspark2" class="spark"></span></div>
                  <div class="datas-text">15,000 Pageviews</div>
                </li>
                <li>
                  <div><span id="todayspark3" class="spark"></span></div>
                  <div class="datas-text">30.55% Bounce Rate</div>
                </li>
                <li>
                  <div><span id="todayspark4" class="spark"></span></div>
                  <div class="datas-text">$16,00 Revenue/Day</div>
                </li>
                <li>
                  <div><span id="todayspark5" class="spark"></span></div>
                  <div class="datas-text">12,000000 visitors every Month</div>
                </li>
              </ul>
            </div>
  
  
          </div>
  
  
          <!-- Today status end -->
  
  
  
          <div class="row">
  
            <div class="col-lg-9 col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h2><i class="fa fa-flag-o red"></i><strong>Registered Users</strong></h2>
                  <div class="panel-actions">
                    <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                    <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                  </div>
                </div>
                <div class="panel-body">
                  <table class="table bootstrap-datatable countries">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Country</th>
                        <th>Users</th>
                        <th>Online</th>
                        <th>Performance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                        <td>Germany</td>
                        <td>2563</td>
                        <td>1025</td>
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
                      <tr>
                        <td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
                        <td>India</td>
                        <td>3652</td>
                        <td>2563</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%">
                            </div>
                          </div>
                          <span class="sr-only">57%</span>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="img/Spain.png" style="height:18px; margin-top:-2px;"></td>
                        <td>Spain</td>
                        <td>562</td>
                        <td>452</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                            </div>
                          </div>
                          <span class="sr-only">93%</span>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="NiceAdmin/img/India.png" style="height:18px; margin-top:-2px;"></td>
                        <td>Russia</td>
                        <td>1258</td>
                        <td>958</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div>
                          </div>
                          <span class="sr-only">20%</span>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="NiceAdmin/img/Spain.png" style="height:18px; margin-top:-2px;"></td>
                        <td>USA</td>
                        <td>4856</td>
                        <td>3621</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div>
                          </div>
                          <span class="sr-only">20%</span>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="NiceAdmin/img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                        <td>Brazil</td>
                        <td>265</td>
                        <td>102</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div>
                          </div>
                          <span class="sr-only">20%</span>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                        <td>Coloumbia</td>
                        <td>265</td>
                        <td>102</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div>
                          </div>
                          <span class="sr-only">20%</span>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
                        <td>France</td>
                        <td>265</td>
                        <td>102</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div>
                          </div>
                          <span class="sr-only">20%</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
  
              </div>
  
            </div>
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