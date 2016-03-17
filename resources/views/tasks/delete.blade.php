
{!! Form::open(['route' => ['task.destroy',$task->id], 'method' => 'DELETE']) !!}
	{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}

{!! Form::close() !!}