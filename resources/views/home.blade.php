<x-app-layout title="Home">
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-6">
				@if(session()->has('success'))
					<div class="alert alert-success" role="alert">
						{{session()->get('success')}}
					</div>
				@endif
				<div class="card">
					<div class="card-header">Welcome to My Site</div>
					<div class="card-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>