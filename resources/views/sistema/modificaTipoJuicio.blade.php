@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body") 
<div class="row">
	<div class="col-xs-12 col-md-12">
		<div class="card">
			<div class="card-header">
				Juicios
			</div>
			<div class="card-body">
				<h3 class="card-title">Modifica Tipo de Juicio</h3>
				<form action ="{{route('guardaedicionTipJui')}}" method = 'POST' align="center">
					{{csrf_field()}}
					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								@if($errors->first('id_TipoJuicio'))
								<i> {{ $errors->first('id_TipoJuicio') }} </i> 
								@endif
								Clave Tipo Juicio: <input type = 'text' name = 'id_TipoJuicio' value="{{$tipo_juicios->id_TipoJuicio}}" readonly = 'readonly' class="form-control">
							</div>
							
							<div class="form-group col-6">
								@if($errors->first('NomTipoJuicio')) 
								<i> {{ $errors->first('NomTipoJuicio') }} </i> 
								@endif
								Nombre del Juicio: <input type = 'text' name = 'NomTipoJuicio' value="{{$tipo_juicios->NomTipoJuicio}}" class="form-control">
							</div>
						</div>
						<input type = 'submit' value = 'Guardar' class="btn btn-success col-2">
						<input type = 'reset' value = 'Cancelar' class="btn btn-warning col-2">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 