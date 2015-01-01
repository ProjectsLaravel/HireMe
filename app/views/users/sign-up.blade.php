@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Sign up</h1>
			{{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form']) }}
	
				{{-- App::make('field')->input('text', 'full_name') --}}
				{{ Field::text('full_name') }}
				{{ Field::input('email', 'email') }}
				{{ Field::password('password') }}
				{{ Field::password('password_confirmation', ['placeholder'=>'Repite tu password']) }}
			<!--	<div class="form-group">
					{{ Form::label('full_name', 'Nombre Completo') }}
					{{ Form::text('full_name', null, ['class' => 'form-control']) }}
					{{ $errors->first('full_name', '<p class="error_message">:message</p>') }}
				</div>
				<div class="form-group">
					{{ Form::label('email', 'Email') }}
					{{ Form::text('email', null, ['class' => 'form-control']) }}
					{{ $errors->first('email', '<p class="error_message">:message</p>') }}
				</div>
				<div class="form-group">
					{{ Form::label('password', 'Contraseña') }}
					{{ Form::password('password', ['class' => 'form-control']) }}
					{{ $errors->first('password', '<p class="error_message">:message</p>') }}
				</div>
				<div class="form-group">
					{{ Form::label('password_confirmation', 'Confirmar Contraseña') }}
					{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
					{{ $errors->first('password_confirmation', '<p class="error_message">:message</p>') }}
				</div>
			-->
	            <p>
	                <input type="submit" value="Register" class="btn btn-success">
	            </p>
            {{ Form::close() }}

        </div>
    </div>
</div>

@endsection