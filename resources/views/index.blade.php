@extends('layouts.principal')

@section('conteudo')
	@include('alerts.errors')
	@include('alerts.request')
	<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-info">
				
				
				{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('email','E-mail:')!!}	
						{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'mail@mail.com'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('senha','Senha:')!!}	
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'***'])!!}
					</div>
					{!!Form::submit('Acessar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
				
			</div>
		</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			<li><img src="images/r1.jpg" alt=""/></li>
			<li><img src="images/r2.jpg" alt=""/></li>
			<li><img src="images/r3.jpg" alt=""/></li>
			<li><img src="images/r4.jpg" alt=""/></li>
			<li><img src="images/r5.jpg" alt=""/></li>
			<li><img src="images/r6.jpg" alt=""/></li>
		</ul>
		</div>
		
@stop		