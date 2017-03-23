@extends('layouts.backend')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">Candidatas</div>
	<p class="subtitle">Edición de Candidatas</p>
	<div class="panel-body">
		@if (Session::has('mensaje'))
        <div class="alert alert-dismissible @if(Session::get('tipo_mensaje') == 'success') alert-info  @endif @if(Session::get('tipo_mensaje') == 'error') alert-danger  @endif" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          {{session('mensaje')}}
           </div>
        <div class="clearfix"></div>
       @endif
		<form action="{{ route('misses.update',$miss->id) }}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PUT">
			<div class="row">
				<div class="form-group col-md-3 col-sm-3 col-xs-12 @if($errors->has('name')) has-error @endif">
					<label class="control-label">Nombre </label>
					<input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ $miss->name }}" autofocus>
					@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
				</div>

				<div class="form-group col-md-3 col-sm-3 col-xs-12 @if($errors->has('last_name')) has-error @endif">
					<label class="control-label">Apellido </label>
					<input type="text" class="form-control" placeholder="Apellido" name="last_name" value="{{ $miss->last_name }}">
					@if ($errors->has('last_name')) <p class="help-block">{{ $errors->first('last_name') }}</p> @endif
				</div>

				<div class="form-group col-md-3 col-sm-3 col-xs-12 @if($errors->has('country_id')) has-error @endif">
					<label class="control-label">País </label>
					<select class="form-control" name="country_id" id="country">
						<option value="null">--Seleccione--</option>
						@foreach ($countries as $element)
							<option value="{{$element->id}}" @if($miss->country_id == $element->id) selected  @endif>{{$element->name}}</option>
						@endforeach
					</select>
					@if ($errors->has('country_id')) <p class="help-block">{{ $errors->first('country_id') }}</p> @endif
				</div>

				<div class="form-group col-md-2 col-sm-2 col-xs-12 @if($errors->has('state')) has-error @endif">
					<label class="control-label">Estado </label>
					<select name="state" id="state" class="form-control">
						<option value="null">--Seleccione--</option>
						<option value="1" @if ($miss->state == '1') selected @endif>Activa</option>
						<option value="0" @if ($miss->state == '0') selected @endif>Inactiva</option>
					</select>
					@if ($errors->has('state')) <p class="help-block">{{ $errors->first('state') }}</p> @endif
				</div>
			</div>


			<div class="row">
				<div class="form-group col-md-6 col-sm-6 col-xs-12">
					<label class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Medidas </label>
					<div class="form-group col-md-3 col-sm-3 col-xs-4 no-padding-left @if($errors->has('height')) has-error @endif">
						<input type="number" step="any" min="0.00" placeholder="Altura" name="height" id="height" class="form-control" value="{{$miss->height}}">
						@if ($errors->has('height')) <p class="help-block">{{ $errors->first('height') }}</p> @endif
					</div>
					<div class="form-group col-md-3 col-sm-3 col-xs-4 no-padding-left @if($errors->has('bust_measure')) has-error @endif">
						<input type="number" placeholder="Busto" name="bust_measure" id="bust_measure" class="form-control" value="{{$miss->bust_measure}}">
						@if ($errors->has('bust_measure')) <p class="help-block">{{ $errors->first('bust_measure') }}</p> @endif
					</div>
					<div class="form-group col-md-3 col-sm-3 col-xs-4 no-padding-left @if($errors->has('waist_measure')) has-error @endif">
						<input type="number" placeholder="Cintura" name="waist_measure" id="waist_measure" class="form-control" value="{{$miss->waist_measure}}">
						@if ($errors->has('waist_measure')) <p class="help-block">{{ $errors->first('waist_measure') }}</p> @endif
					</div>

					<div class="form-group col-md-3 col-sm-3 col-xs-4 no-padding-left @if($errors->has('hip_measure')) has-error @endif">
						<input type="number" placeholder="Cadera" name="hip_measure" id="hip_measure" class="form-control" value="{{$miss->hip_measure}}">
						@if ($errors->has('hip_measure')) <p class="help-block">{{ $errors->first('hip_measure') }}</p> @endif
					</div>
				</div>

				<div class="form-group col-md-6 col-sm-6 col-xs-12"  @if($errors->has('country_id')) has-error @endif>
					<label class="control-label" for="hobbies">Hobbies </label>
					<textarea name="hobbies" id="hobbies" class="form-control">{{$miss->hobbies}}</textarea>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label class="control-label">Fotos</label>
					<input type="file" name="photos[]" id="photos" multiple accept="image/*">
					@if ($errors->has('photos')) <p class="help-block">{{ $errors->first('photos') }}</p> @endif
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="form-group col-md-12 col-sm-12 col-xs-12">
					<a href="{{ route('misses.index') }}" class="btn btn-primary">Cancelar</a>
	                <button type="submit" class="btn btn-success" id="save">Guardar</button>
	            </div>
			</div>

		</form>
	</div>

</div>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/public/css/bootstrap-file-input/fileinput.min.css') }}">
@endsection

@section('js')
<script src="{{asset('/public/js/bootstrap-file-input/plugins/canvas-to-blob.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/public/js/bootstrap-file-input/plugins/purify.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/public/js/bootstrap-file-input/fileinput.js')}}" type="text/javascript"></script>
<script src="{{asset('/public/js/bootstrap-file-input/themes/fa/theme.js')}}" type="text/javascript"></script>
<script src="{{asset('/public/js/bootstrap-file-input/locales/es.js')}}" type="text/javascript"></script>
<script type="text/javascript">
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
	$("#photos").fileinput({
		language : 'es',
		theme:'fa',
		uploadAsync: true,
		uploadUrl : '{{ url('/backend/upload-photo') }}',
		ajaxSetting : {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		allowedFileTypes: ['image'],
		// showUpload: true,
		showRemove: true,
		maxFileCount: 5,
		autoReplace:false,
		initialPreviewCount: true,
		showUploadedThumbs: true,
		overwriteInitial:false,
		initialPreviewAsData: true,
    	initialPreviewFileType: 'image',
		initialPreview : [
			@foreach ($miss->photos as $element)
			 	'{{config('app.url').'/'.$element->path}}',
			@endforeach
		],
		uploadExtraData: {
			miss_id : {{$miss->id}}
		},
    	initialPreviewConfig: [
    		@foreach ($miss->photos as $element)
    			{ caption : '{{$element->path}}', url: '{{url('/backend/delete-photo')}}', key : {{$element->id}} },
    		@endforeach
    	]
		
	});
</script>
@endsection