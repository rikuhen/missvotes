@extends('layouts.frontend')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/profile.css') }}">
@endsection()

@section('content')
<div class="container-page">
	<h2>{{ Auth::user()->name }}</h2>
	<div class="container-tabs-profile">
		
		<ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active">
		    	<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Perfil</a>
		    </li>
		    <li role="presentation">
		    	<a href="#membership" aria-controls="membership" role="tab" data-toggle="tab">Membresia @if(Auth::user()->client && !Auth::user()->client->current_membership()) <small class="upgrade-membership">(Actualiza!!)</small> @endif</a>
		    </li>
		    <li role="presentation">
		    	<a href="#tickets" aria-controls="tickets" role="tab" data-toggle="tab">Tickets</a>
		    </li>
		    <li role="presentation">
		    	<a href="#activity" aria-controls="activity" role="tab" data-toggle="tab">Mis Actividades</a>
		    </li>
  		</ul>

  		<!-- Tab panes -->
		<div class="tab-content">
			{{-- profile --}}
			<div role="tabpanel" class="tab-pane active" id="profile">
		    	<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
		    		<div class="profile-img">
		    			<img class="img-responsive" src="{{ asset('public/images/account.png') }}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}">
		    		</div>
		    	</div>
		    	<div class="col-md-9 col-sm-9 col-xs-12">
		    		<h4>Datos Personales</h4>
		    		<table class="table table-striped ">
		    			<tbody>
		    				<tr>
		    					<td><b>Nombres: </b> {{Auth::user()->name}}</td>
		    				</tr>
		    				<tr>
		    					<td><b>Correo: </b> {{Auth::user()->email}}</td>
		    				</tr>
		    				<tr>
		    					<td><b>Dirección: </b> {{Auth::user()->address}}</td>
		    				</tr>
		    				<tr>
		    					<td><b>Último Acceso: </b> {{Auth::user()->last_login}}</td>
		    				</tr>
		    			</tbody>
		    		</table>
		    		<h4>Cambiar Contraseña</h4>
		    		<form action="{{ route('website.account.update') }}" method="POST">
		    			@if (Session::has('mensaje'))
    						<div class="alert alert-dismissible @if(Session::get('tipo_mensaje') == 'success') alert-info  @endif @if(Session::get('tipo_mensaje') == 'error') alert-danger  @endif" role="alert">
      							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      							{{session('mensaje')}}
       						</div>
    						<div class="clearfix"></div>
   						@endif
		    			{{ csrf_field() }}
		    			<div class="form-group col-md-4 col-sm-4 col-xs-12 @if($errors->has('password')) has-error @endif">
		    				<label class="control-label">Contraseña nueva </label>
							<input type="password" class="form-control" placeholder="Nueva Contraseña" name="password" value="{{ old('password') }}">
							@if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
		    			</div>
		    			<div class="form-group col-md-4 col-sm-4 col-xs-12 @if($errors->has('repeat_password')) has-error @endif">
		    				<label class="control-label">Repita Contraseña nueva </label>
							<input type="password" class="form-control" placeholder="Repita Nueva Contraseña " name="repeat_password" value="{{ old('repeat_password') }}">
							@if ($errors->has('repeat_password')) <p class="help-block">{{ $errors->first('repeat_password') }}</p> @endif
		    			</div>
		    			<div class="form-group col-md-4 col-sm-4 col-xs-12" style="padding-top: 4px">
		    				<br>
		    				<button type="submit" name="submit" class="btn btn-default">Cambiar Contraseña</button>
		    			</div>
		    		</form>
		    	</div>
		    </div>

		    {{-- membershipss --}}
		    <div role="tabpanel" class="tab-pane" id="membership" >
		    	<h4>Membresia</h4> 
		    	<div class="col-md-12 col-lg-12 col-xs-12">
		    		@include('frontend.partials.membership',$memberships)
		    	</div>
		    </div>

		    {{-- tickets --}}
		    <div role="tabpanel" class="tab-pane" id="tickets">
		    	<h4>Tickets</h4>
		    	<div class="col-md-12 col-lg-12 col-xs-12">
		    		{{-- my tickets --}}
		    		<h5><b>Mis tickets</b></h5>
		    		<div class="row">
		    		@if (count(Auth::user()->client->tickets) > 0)
		    			@foreach (Auth::user()->client->tickets as $ticketClient)
		    				<div class="col-xs-12 col-md-3">
		    					 <div class="panel panel-primary">
		    					 	<div class="panel-heading">
		    					 		<h3 class="panel-title"> <i class="fa fa-ticket" aria-hidden="true"></i> {{$ticketClient->ticket->name}}</h3>
		    					 	</div>
		    					 	<div class="panel-body">
		    					 		<table class="table">
		    					 			<tbody>
		    					 				<tr>
		    					 					<td><b>Valor: </b> {{$ticketClient->ticket->val_vote}} Puntos</td>
		    					 				</tr>
		    					 			</tbody>
		    					 		</table>
		    					 	</div>
		    					 	<div class="panel-footer">
                						<a href="#" class="btn btn-success" role="button">Usar</a>
            						</div>
		    					 </div>
		    				</div>
		    			@endforeach
		    		</div>
		    		@else
		    			<p class="text-center text-warning">
							<b>Lamentamos que no tenga tickets para usar, compre uno para poder apoyar a su candidata favorita</b> 
						</p>
		    		@endif
		    		{{-- buy tickets --}}
		    		@include('frontend.partials.tickets',$tickets)
		    	</div>
		    </div>
		    </div>

		    <div role="tabpanel" class="tab-pane" id="activity">
		    	<h4>Tickets</h4>
		    	<div class="col-md-12 col-lg-12 col-xs-12">
		    		<table id="activity-datatable" class="table table-bordered" style="width: 100%">
				  		<thead>
					  		<tr>
					  			<th>Evento</th>
					  			<th>Fecha de evento</th>
					  		</tr>
				  		</thead>
  						<tbody>
  						@foreach ($activities as $activity)
  						<tr>
  							<td>{{ $activity->client->name }} {{ $activity->name }}</td>
  							<td>{{ $activity->created_at }}</td>
  						</tr>
  						@endforeach
  						</tbody>
  					</table>
		    	</div>
		    </div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
@endsection()

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/js/datatables/jquery.dataTables.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/js/datatables/buttons.bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/js/datatables/fixedHeader.bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/js/datatables/scroller.bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/js/datatables/responsive.bootstrap.min.css') }}" />
@endsection()

@section('js')
 <script src="{{ asset('public/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/js/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('public/js/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/js/datatables/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('public/js/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/js/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('public/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/js/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/js/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('public/js/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('public/js/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/js/datatables/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/datatables/dataTables.scroller.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#activity-datatable').DataTable({
        "language": {
          "url": "../public/js/datatables/json/es.json"
        }
      });
  });
 </script>
@endsection