@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($user,['route'=> ['usuario.update',$user->id],'method'=>'PUT'])!!}
			@include('usuario.forms.usr')
			{!!Form::submit('Atualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
			{!! Form::submit('Deletar', ['class'=>'btn btn-danger btn-mini']) !!}
		{!!Form::close()!!}
	@stop