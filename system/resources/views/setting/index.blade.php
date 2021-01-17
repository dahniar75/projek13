@extends('template.beranda')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto mt-5">
				<div class="card card-default">
					<div class="card-header bg-dark">
						Ganti Password
					</div>
					<div class="card-body">
						//<!-- User : {{$user->email}} -->
						 <form action="{{url('setting')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Passwod Sebelumnya</label>
							<input type="password" name="current" class="form-control">
						</div>
						<hr>
						<div class="form-group">
							<label for="" class="control-label">Password Baru</label>
							<input type="password" name="new" class="form-control">
						</div>
						<hr>
						<div class="form-group">
							<label for="" class="control-label">Konfirmasi Password Baru</label>
							<input type="password" name="confirm" class="form-control">
						</div>
						<div class="form-group">
							<button class="btn btn-dark"><i class="fa fa-save"></i>Save</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection