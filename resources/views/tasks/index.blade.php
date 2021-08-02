<x-app-layout title="Task">
	<h1 style="margin: 10px">Task Page</h1>
	<form action="/tasks" method="post" style="margin: 10px 20px">
		@csrf
		<input type="text" name="list" placeholder="The name of the Task">
		<button type="submit" >Add</button>
	</form>
	<div class="container">
		<ol style="margin: 20px 30px;">
			@foreach($tasks as $task)
			<li style="padding: 10px">
				{{ $task->list }}
				<div style=" margin-top: 10px">
					<a href="/tasks/{{$task->id}}/edit" style="color: blue">Edit</a>
					<form method="post" action="/tasks/{{$task->id}}" style="display: inline;">
						@method('delete')
						@csrf
						<button type="submit">Delete</button>
					</form>
				</div>
			</li>
			@endforeach
		</ol>
	</div>
</x-app-layout>