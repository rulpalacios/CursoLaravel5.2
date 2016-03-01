@extends('layouts.app')

@section('content')
	<div class="container">
		@include('alerts.errors')

		{!! Form::open(['route' => 'task.store', 'method' => 'POST']) !!}
		
			{!! Form::label('name','Nombre:') !!}
			{!! Form::text('name',null,['class' => 'form-control']) !!}

			{!! Form::submit('Almacenar',['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
	</div>
@endsection