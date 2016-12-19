@extends('admin.index')

@section('pembina')

<div class="row">
	<h5>Edit Pembina</h5>
		<nav>
		    <div class="nav-wrapper">
		      <div class="col s12">
		        <a href="#!" class="breadcrumb">First</a>
		        <a href="#!" class="breadcrumb">Second</a>
		        <a href="#!" class="breadcrumb">Third</a>
		      </div>
		    </div>
		</nav>
</div>		
	
	<div class="row">
		<a style="margin-top: 20px;" href="{{ route('pembina') }}" class="btn waves-effect waves-light"><i class="fa fa-arrow-left"></i> Back</a>
	</div>

		<div class="col m8 offset-m2">
			<div class="card">
				<div class="card-content">
					<form action="{{ route('pembina.update', $data->id) }}" method="POST" enctype="multipart/form-data">
				<h3 class="blue-text blue-lighten-2 center-align">Edit Pembina</h3>
				<div class="input-field{{ $errors->has('nama') ? ' has-error' : '' }}"> 
					<input type="text" name="nama" id="nama" placeholder="Nama" class="validate" value="{{ $data->nama }}">
					@if($errors->has('nama'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('nama') }}</p>
        				 </ul>
					@endif
				</div>

				<div class="input-field{{ $errors->has('email') ? ' has-error' : '' }}"> 
					<input type="email" name="email" class="validate" value="{{ $data->email }}">
					@if($errors->has('email'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('email') }}</p>
        				 </ul>
					@endif
				</div>
					
				<div class="input-field{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
					<select name="jenis_kelamin">
						<option value="" disabled selected>- Pilih Jenis Kelamin -</option>
						<option value="pria" @if($data->jenis_kelamin == 'pria') selected >pria
						</option>
						<option value="wanita" @elseif($data->jenis_kelamin == 'wanita') selected @endif>wanita
						</option>
					</select>
					@if($errors->has('jenis_kelamin'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('jenis_kelamin') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="input-field{{ $errors->has('alamat') ? ' has-error' : '' }}">
					<textarea name="alamat" rows="3" class="materialize-textarea validate" placeholder="Alamat">{{ $data->alamat }}</textarea>
					@if($errors->has('alamat'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('alamat') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="input-field{{ $errors->has('no_hp') ? ' has-error' : '' }}">
					<input type="text" name="no_hp" id="no_hp" class="validate" placeholder="No Hp" value="{{ $data->no_hp }}">
					@if($errors->has('no_hp'))
						 <ul class="card-panel red darken-1">
        					<p>{{ $errors->first('no_hp') }}</p>
        				 </ul>
					@endif
				</div>
				<div class="file-field input-field{{ $errors->has('gambar') ? ' has-error' : '' }}">
					<div class="btn">
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
					<button type="submit" class="btn waves-effect waves-light right">Edit <i class="fa fa-pencil"></i></button>
				</div>
				<input type="hidden" name="_method" value="put">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
				</div>
			</div>
		</div>
</div>

@endsection