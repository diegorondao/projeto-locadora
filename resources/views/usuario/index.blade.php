@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
		<table class="table">
			<thead>
				<th>Nome</th>
				<th>E-mail</th>
				<th colspan="2">Ações</th>
				
			</thead>
			@foreach($users as $user)
			<tbody>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
					{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary btn-mini'])!!}
				<td>
					{!!Form::open(['route'=> ['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
					{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-mini']) !!}
					{!!Form::close()!!}
				</td>	
				</td>
			</tbody>
			@endforeach
		</table>

		{!!$users->render()!!}
	@stop