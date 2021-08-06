<x-app-layout title="Task">
	<div class="container">
		<div class="card col-md-6 mt-4">
			<div class="card-header">Create New Task</div>
			<div class="card-body">
				<form action="{{route('tasks.store')}}" method="post" class="d-flex">
					@csrf
					<input type="text" name="list" class="form-control me-2" placeholder="The name of the Task..">
					<button type="submit" class="btn btn-primary">Add</button>
				</form>
			</div>
		</div>
		
		<ul class="list-group col-md my-4">
			@foreach($tasks as $index => $task)
			<li style="padding: 10px" class="list-group-item d-flex justify-content-between align-items-center">
				{{$index + 1}} - {{ $task->list }}
				<div>
					<a href="{{route('tasks.edit', $task->id)}}" class="btn btn-info btn-sm">Edit</a>
					<form method="post" action="{{route('tasks.destroy',$task->id)}}" style="display: inline;">
						@method('delete')
						@csrf
						<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
</x-app-layout>