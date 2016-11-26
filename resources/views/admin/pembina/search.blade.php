@extends('admin.index')

@section('pembina')

		<h5>Daftar Pembina</h5>
		<nav>
		    <div class="nav-wrapper">
		      <div class="col s12">
		        <a href="#!" class="breadcrumb">First</a>
		        <a href="#!" class="breadcrumb">Second</a>
		        <a href="#!" class="breadcrumb">Third</a>
		      </div>
		    </div>
		</nav>
 	 {{-- Menu --}}
		<div class="row">
			<a href="{{ route('pembina.tambah') }}" style="margin-top: 20px;" class="waves-effect wave-light btn right"><i class="fa fa-plus"></i> Tambah</a>
		</div>	
		<div class="row">
			<div class="col m8 offset-m2">
				@include('templates.alert')
				{{-- Search --}}
				<div class="row">
					<div class="col m10 z-depth-1" style="border: 1px solid #f3f3f3">
						<form action="{{ route('pembina.search') }}" method="get">
							<div class="input-field">
								<input id="search" type="text" name="search" placeholder="Search Data" required>
							</div>
					</div>		
						<div class="row">
							<div class="col m2">
								<button type="submit" class="btn btn-large" style="margin-top:10px;"><i class="fa fa-search"></i></button>
							</div>
						</div>
						</form>
				</div>

				{{-- Table --}}
				
				@if(!$data->count())
					<h3>Pencarian Untuk {{ Request::input('search') }} Tidak Ada</h3>
				@elseif(count($data) >= 1)
				<h3>Hasil Pencarian {{ Request::input('search') }}</h3>
					<table class="responsive-table striped z-depth-1">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Opsi</th>
						<th>Hapus</th>
					</tr>
				</thead>
			
				<tbody>
					@foreach($data as $datas)
						<tr>
							<td>{{ $datas->id }}</td>
							<td>{{ $datas->nama }}</td>
							<td>{{ $datas->jenis_kelamin }}</td>
							<td>{{ $datas->alamat }}</td>
							<td>
								<a href="{{ route('pembina.lihat', $datas->id_pembina) }}" class="waves-light waves-effect btn-floating"><i class="fa fa-eye"></i></a>
								<a href="{{ route('pembina.edit', $datas->id_pembina) }}" class="waves-effect waves-light btn-floating"><i class="fa fa-pencil"></i></a>
							</td>
							<td>
								<form action="{{ route('pembina.hapus', $datas->id_pembina) }}" method="delete">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

									<button type="submit" name="hapus" class="waves-effect waves-light btn-floating"><i class="fa fa-trash"></i></button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
				@endif
			</div>
		</div>
		
	</div> {{-- End Menu --}}

		

@endsection