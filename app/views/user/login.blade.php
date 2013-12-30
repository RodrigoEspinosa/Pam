@extends('layouts.default')

@section('main')
<section class='upper'>
	<h3>Login</h3>
	<p>Accede con tu email y contraseña</p>
</section>
<section id='login' class='container whiteBackground'>
	<h3>Login</h3>
	{{ HTML::link(URL::route('user.create'), 'Registro') }}
	{{ Form::open() }}
		{{ Form::label('email', 'Email: ') }}
		{{ Form::email('email') }}
		{{ Form::label('password', 'Contraseña: ') }}
		{{ Form::password('password') }}
		{{ Form::submit() }}
	{{ Form::close() }}
</section>
<section class='container greyBackground'>
	<h3>Pam</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, asperiores, excepturi, ipsam pariatur odit totam architecto reiciendis repudiandae inventore tenetur facere laudantium adipisci ipsum alias amet cupiditate dicta laborum veritatis!</p>
</section>
@stop
