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

        <table>
        	<tr>
        		<th>Nome</th>
        		<th>Descrição</th>
        	</tr>
        	@foreach($quartos as $quarto)
        	<tr>
        		<td>{{$quarto->nome}}</td>
        		<td>{{$quarto->description}}</td>
        	</tr>
        	@endforeach
        </table>
@endsection