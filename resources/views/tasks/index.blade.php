@extends('layouts.app')

@section('content')
	<div class="container">
		@include('alerts.success')

		<table class="table">
			<thead>
				<tr>
					<th>Tarea</th>
				</tr>
			</thead>
			<tbody>
			@foreach($tasks as $task)
				@can('read-task', $task)
					<tr>
						<td>{{ $task->name }}</td>
					</tr>
				@endcan
			@endforeach
			</tbody>
		</table>
	</div>

@endsection