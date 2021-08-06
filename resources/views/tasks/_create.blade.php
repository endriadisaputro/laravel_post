
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
			<div class="mb-2">
				<input type="text" name="list" class="form-control @error('list') is-invalid @enderror me-2" placeholder="The name of the Task..">
				@error('list')
					<span class="invalid-feedback">{{$message}}</span>
				@enderror
			</div>
			<button type="submit" class="btn btn-primary">Add</button>
		</form>
	</div>
</div>