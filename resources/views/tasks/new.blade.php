@extends('layouts.app')

@section('content')

	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(['route' => 'task.store', 'method' => 'POST']) !!}
	
		{!! Form::label('name','Nombre:') !!}
		{!! Form::text('name',null,['class' => 'form-control']) !!}

		{!! Form::submit('Almacenar',['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
@endsection