@extends('layout.master')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endif
<div class="row">
	<div class="col-md-6">
		<h1>Data Siswa</h1>
	</div>
	<div class="col-md-6">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
			Tambah
		</button>
	</div>
	<br>
	<table class="table table-hover">	
		<thead>
			<tr>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data_siswa as $siswa)
			<tr>
				<td>{{$siswa->nama_depan}}</td>
				<td>{{$siswa->nama_belakang}}</td>
				<td>{{$siswa->jenis_kelamin}}</td>
				<td>{{$siswa->agama}}</td>
				<td>{{$siswa->alamat}}</td>
				<td>
					<a href="{{ url('/siswa/edit/'.$siswa->id) }}" title="Edit" class="btn btn-success btn-sm">Edit</a>
					<a href="{{ url('/siswa/delete/'.$siswa->id) }}" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus ? ')">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ url('/siswa/create')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8">
							<select name="jenis_kelamin" class="form-control">
								<option value="laki-laki">Laki-Laki</option>
								<option value="perempuan">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8">
							<input type="text" class="form-control" name="agama" placeholder="Agama" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

