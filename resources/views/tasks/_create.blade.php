
<div class="card">
	<div class="card-header">Create New Task</div>
	<div class="card-body">
		<!-- @if($errors->all())
			<div class="alert alert-danger">
				Your Data was Invalid
			</div>
		@endif -->
		<form action="{{route('tasks.store')}}" method="post">
			@csrf
			@include('tasks._form')
		</form>
	</div>
</div>