@extends('adminlte::page')

@section('content')
	<div class="box-body">
		<table class="table table-striped table-hover" id="siswa-tabel">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
			</thead>
			<tbody>
				@foreach($iterable as $key=>$value)

				@endforeach
			</tbody>
		</table>
	</div>

@endsection