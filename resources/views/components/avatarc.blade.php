@extends('layout.simple-hero')

@section('main-simple-page')

<div class="container">
				<div class="page-inner">
					<div class="page-header">
						<h3 class="fw-bold mb-3">Avatars</h3>
						<ul class="breadcrumbs mb-3">
							<li class="nav-home">
								<a href="{{ route('dashboard') }}">
									<i class="icon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="icon-arrow-right"></i>
							</li>
							<li class="nav-item">
								<a href="{{ route('components.avatarc') }}">Base</a>
							</li>
							<li class="separator">
								<i class="icon-arrow-right"></i>
							</li>
							<li class="nav-item">
								<a href="{{ route('components.avatarc') }}">Avatars</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Sizing</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar avatar-xxl">
											<img src="{{ asset('../assets/img/por.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-xl">
											<img src="{{ asset('../assets/img/por.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-lg">
											<img src="{{ asset('../assets/img/por.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar">
											<img src="{{ asset('../assets/img/por.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-sm">
											<img src="{{ asset('../assets/img/por.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-xs">
											<img src="{{ asset('../assets/img/por.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Status Indicator</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar avatar-online">
											<img src="{{ asset('../assets/img/raj.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-offline">
											<img src="{{ asset('../assets/img/raj.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-away">
											<img src="{{ asset('../assets/img/raj.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>
                                        <div class="avatar avatar-offline">
											<img src="{{ asset('../assets/img/raj.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>

										<div class="avatar avatar-away">
											<img src="{{ asset('../assets/img/raj.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Shape</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar">
											<img src="{{ asset('../assets/img/Javed.jpg') }}" alt="..." class="avatar-img rounded">
										</div>

										<div class="avatar">
											<img src="{{ asset('../assets/img/Javed.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>
                                        <div class="avatar">
											<img src="{{ asset('../assets/img/Javed.jpg') }}" alt="..." class="avatar-img rounded">
										</div>
                                        <div class="avatar">
											<img src="{{ asset('../assets/img/Javed.jpg') }}" alt="..." class="avatar-img rounded-circle">
										</div>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Group</h4>

								</div>
								<div class="card-body">
									<p class="demo">
										<div class="avatar-group">
											<div class="avatar">
												<img src="{{ asset('../assets/img/Javed.jpg') }}" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="{{ asset('../assets/img/Javed.jpg') }}" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
                                            <div class="avatar">
												<img src="{{ asset('../assets/img/Javed.jpg') }}" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
                                            <div class="avatar">
												<img src="{{ asset('../assets/img/Javed.jpg') }}" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="{{ asset('../assets/img/Javed.jpg') }}" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<span class="avatar-title rounded-circle border border-white">CF</span>
											</div>
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
</div>

@endsection

 
