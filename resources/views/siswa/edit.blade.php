@extends('layout.master')

@section('content')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endif
<div class="row">
	<div class="col-md-12">
		<h1>Edit Siswa</h1>
	</div>
	<div class="col-md-12">
		<form action="{{ url('/siswa/update/'.$data_siswa->id)}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<div class="col-sm-12">
					<input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" value="{{$data_siswa->nama_depan}}"required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" value="{{$data_siswa->nama_belakang}}"required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-8">
					<select name="jenis_kelamin" class="form-control">
						<option value="laki-laki" 
						@if($data_siswa->jenis_kelamin == 'laki-laki') selected @endif
						>Laki-Laki</option>
						<option value="perempuan" @if($data_siswa->jenis_kelamin == 'perempuan') selected @endif
							>Perempuan</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-8">
						<input type="text" class="form-control" name="agama" placeholder="Agama" value="{{$data_siswa->agama}}"required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<textarea class="form-control" name="alamat" placeholder="Alamat">{{$data_siswa->alamat}}</textarea>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
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
					
				</div>
			</div>
		</div>
@endsection
