@extends('layouts.admin')

	@section('content')
		@include('alerts.request')
	  	{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
	  		@include('usuario.forms.usr')
			{!!Form::submit('Salvar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
	@stop