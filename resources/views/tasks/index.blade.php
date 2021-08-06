<x-app-layout title="Task">
	<div class="container">
		<div class="card col-md-6 mt-4">
			@include('tasks._create')
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