@extends('admin.index')

@section('dashboard')


		<h5>Dashboard</h5>
		<hr>
		
		@if(Session::has('pesan'))
		        <div class="card-panel red darken-1">
		          <span class="white-text center-align">{{ Session::get('pesan') }}, <strong>{{ Auth::user()->level }}</strong></span>
		        </div>
		@endif

		  {{-- Menu --}}
		<div class="row">
			<div class="col m4">
				<div class="card hoverable red">
					<div class="card-content">
						<div class="row">
							<div class="col m3 white-text">
								<span class="fa fa-user fa-5x"></span>
							</div>
							<div class="col m8">	
								<a href="{{ route('pembina') }}" class="white-text"><h4>{{ count($pembina) }} Pembina</h4></a>
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="col m4">
					<div class="card hoverable amber accent-4">
						<div class="card-content">
							<div class="row">
								<div class="col m3 white-text">
									<span class="fa fa-book fa-5x"></span>
								</div>
								<div class="col m8 ">
									<a href="{{ route('kegiatan') }}" class="white-text"><h4>{{ count($kegiatan) }} Kegiatan</h4></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col m4">
					<div class="card hoverable green">
						<div class="card-content">
							<div class="row">
								<div class="col m3 white-text">
									<span class="fa fa-users fa-5x"></span>
								</div>
							<div class="col m7" style="margin-left: 20px;">
								<a href="{{ route('anggota') }}" class="white-text"><h4>{{ count($anggota) }} Anggota</h4></a>
							</div>
							</div>
						</div>
					</div>
				</div> 
		</div> {{-- End Menu --}}
		<div class="row">
			<div class="col m6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5279.58373537556!2d112.47516926263684!3d-7.551097104345425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78731ce537479f%3A0x350a36480b9ea39f!2sSMKN+1+Dlanggu!5e0!3m2!1sid!2sid!4v1477834868972" width="500" height="310" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>	
			<div class="col m6">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="{{ URL::to('images/ANGGOTA.jpg') }}" height="220px">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Baca Pesan<i class="fa fa-arrow-up right"></i></span>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Baca Pesan<i class="fa fa-close right"></i></span>
				      <p>Selamat Datang Di Halaman Dashboard MESMO</p>
				    </div>
			  </div>
			</div>
		</div>
		
@endsection
