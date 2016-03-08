@extends('layouts.app')
	@section('content')
	<div class="container">
		@include('alerts.errors')

		{!! Form::model($task, ['route' => ['task.update',$task], 'method' => 'PUT']) !!}
		
			@include('tasks.form')

			{!! Form::submit('Almacenar',['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
	</div>
	@endsection