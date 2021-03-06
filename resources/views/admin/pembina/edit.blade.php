@extends('admin.index')

@section('pembina')

	<h5>Edit Pembina</h5>
	<hr>	
	
	<div class="row">
		<a  href="{{ route('pembina') }}" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Kembali</a>
	</div>

		<div class="cantainer">
			<div class="col m7">
			<div class="card">
				<div class="card-content">
					<form action="{{ route('pembina.update', $data->id) }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Edit Pembina</h3>
				<div class="input-field{{ $errors->has('nama') ? ' has-error' : '' }}"> 
					<input type="text" name="nama" id="nama" class="validate" value="{{ $data->nama }}">
					<label for="">Nama Pembina</label>
					@if($errors->has('nama'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('nama') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('email') ? ' has-error' : '' }}"> 
					<input type="email" name="email" class="validate" value="{{ $data->email }}">
					<label for="">Email</label>
					@if($errors->has('email'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('email') }}</p>
        				 </ul>
					@endif
				</div>
				
				<label for="">Jenis Kelamin</label>	
				<div class="input-field{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
					<select name="jenis_kelamin">
							<option value="" disabled selected>- Pilih Jenis Kelamin -</option>
							<option value="pria" @if($data->jenis_kelamin == 'pria') selected @endif>pria
							</option>
							<option value="wanita" @if($data->jenis_kelamin == 'wanita') selected @endif>wanita
							</option>
					</select>
					@if($errors->has('jenis_kelamin'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('jenis_kelamin') }}</p>
        				 </ul>
					@endif
				</div>

				<label for="">Tanggal Lahir</label>
				<div class="input-field{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
					<input type="date" name="tgl_lahir" id="tgl_lahir" class="datepicker" value="{{ $data->tgl_lahir }}">
					@if($errors->has('tgl_lahir'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('tgl_lahir') }}</p>
        				 </ul>
					@endif
				</div>
				
				<div class="input-field{{ $errors->has('alamat') ? ' has-error' : '' }}">
					<textarea name="alamat" rows="3" class="materialize-textarea validate">{{ $data->alamat }}</textarea>
					<label for="">ALamat</label>
					@if($errors->has('alamat'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('alamat') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="input-field{{ $errors->has('no_hp') ? ' has-error' : '' }}">
					<input type="text" name="no_hp" id="no_hp" class="validate" value="{{ $data->no_hp }}">
					<label for="">No. Hp</label>
					@if($errors->has('no_hp'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('no_hp') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="file-field input-field{{ $errors->has('gambar') ? ' has-error' : '' }}">
					<div class="btn grey lighten-1">
						<span>File</span>
						<input type="file" name="gambar">
					</div>
					<div class="file-path-wrapper">
						<input type="text" class="file-path validate" placeholder="Limit Size 200kb">
					</div>
					@if($errors->has('gambar'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('gambar') }}</p>
        				 </ul>
					@endif
				</div>
				
				
				<div class="row">
					<button type="submit" class="btn waves-effect waves-light right amber accent-4">Edit <i class="fa fa-pencil"></i></button>
				</div>
				<input type="hidden" name="_method" value="put">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
				</div>
			</div>
		</div>
		<div class="col md5">
			<div class="card">
				<div class="card-content">
					<div class="row">
						<img src="{{ asset('uploads/' . $data->gambar) }}" class="circle materialboxed" width="200" height="150">
					</div>
					<div class="row">
						<h3 class="blue-text lighten-2 center-align">{{ $data->nama }}</h3>
					</div>
				</div>
			</div>
		</div>
		</div>

</div>

@endsection