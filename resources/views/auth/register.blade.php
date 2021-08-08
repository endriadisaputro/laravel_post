<x-app-layout title="Register">
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">Create New Account</div>
					<div class="card-body">
						<form action="{{route('register')}}" method="post">
							@csrf
							@method('post')
							<div class="mb-3">
								<label class="form-label" for="email">Email</label>
								<input type="email" value="{{old('email')}}" name="email" id="email" class="form-control">
								@error('email')
									<div class="text-danger mt-2">
										{{$message}}
									</div>
								@enderror
							</div>
							<div class="mb-3">
								<label class="form-label" for="username">Username</label>
								<input type="text" value="{{old('username')}}" name="username" id="username" class="form-control">
								@error('username')
									<div class="text-danger mt-2">
										{{$message}}
									</div>
								@enderror
							</div>
							<div class="mb-3">
								<label class="form-label" for="name">Name</label>
								<input type="text" value="{{old('name')}}" name="name" id="name" class="form-control">
								@error('name')
									<div class="text-danger mt-2">
										{{$message}}
									</div>
								@enderror
							</div>
							<div class="mb-3">
								<label class="form-label" for="password">Password</label>
								<input type="password" name="password" id="password" class="form-control">
								@error('password')
									<div class="text-danger mt-2">
										{{$message}}
									</div>
								@enderror
							</div>
							<button type="submit" class="btn btn-primary">Register</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>