<div class="form-group">
			{!!Form::label('Nome:','Nome:')!!}
			{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Informe o Nome'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('email','E-mail:')!!}
			{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Informe o E-mail'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('senha','Senha:')!!}
			{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Informe uma Senha'])!!}
		</div>