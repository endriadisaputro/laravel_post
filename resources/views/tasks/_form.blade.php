<input type="text" name="list" class="form-control @error('list') is-invalid @enderror" value="{{old('list',$task->list)}}" placeholder="The name of the task">
	@error('list')
		<span class="invalid-feedback">{{$message}}</span>
	@enderror
<button type="submit" class="btn btn-primary mt-2">{{$submit}}</button>