<x-app-layout title="Task">
	<h1 style="margin: 10px">Task Page</h1>
	<form action="/tasks/{{$task->id}}" method="post" style="margin: 10px">
		@method('put')
		@csrf
		<input type="text" name="list" value="{{$task->list}}">
		<button type="submit" >Update</button>
	</form>
</x-app-layout>