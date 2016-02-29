@extends('layouts.app')

@section('content')
	{!! Form::open(['route' => 'task.store', 'method' => 'POST']) !!}
	
		{!! Form::label('name','Nombre:') !!}
		{!! Form::text('name',null,['class' => 'form-control']) !!}

		{!! Form::submit('Almacenar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
@endsection