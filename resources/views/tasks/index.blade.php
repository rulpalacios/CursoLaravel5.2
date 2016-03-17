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
				@can('owner', $task)
					<tr>
						<td>{{ $task->name }}</td>
						<td>
							<div class="btn-group-vertical">
								{{ link_to_route('task.edit', $title = 'Editar', $parameter = $task, $attributes = ['class' => 'btn btn-primary']) }}
								@include('tasks.delete')
								
							</div>
						</td>
					</tr>
				@endcan
			@endforeach
			</tbody>
		</table>
	</div>

@endsection