<x-app-layout title="Task">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Task Page</h1>
				<form action="{{route('tasks.update', $task->id)}}" method="post">
					@method('put')
					@csrf
					<input type="text" name="list" class="form-control" value="{{$task->list}}">
					<button type="submit" class="btn btn-primary mt-2">Update</button>
				</form>
			</div>
		</div>
	</div>
</x-app-layout>