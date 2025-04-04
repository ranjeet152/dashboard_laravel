@extends('layout.dashboard-hero')

@section('main-dashboard-page')


<div class="container">
          <div class="page-inner">
            <!-- Card -->
            <h3 class="fw-bold mb-3">Card</h3>
            <div class="row">
              <!-- ============= -->
              <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-primary card-round">
        <div class="card-body">
            <div class="row">
                <div class="col-5">
                    <div class="icon-big text-center">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="col-7 col-stats">
                    <div class="numbers">
                        <p class="card-category">Users</p>
                        <h4 class="card-title">{{ $totalUsers }}</h4>  {{-- Dynamic Count --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

              
              <!-- ================ -->
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-info card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="fas fa-user-check"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Subscribers</p>
                          <h4 class="card-title">1303</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-success card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="fas fa-chart-pie"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Sales</p>
                          <h4 class="card-title">$ 1,345</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-secondary card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="far fa-check-circle"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Order</p>
                          <h4 class="card-title">576</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Row Card No Padding -->
            <div class="row row-card-no-pd">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="icon-pie-chart text-warning"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Number</p>
                          <h4 class="card-title">150GB</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="icon-wallet text-success"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Revenue</p>
                          <h4 class="card-title">$ 1,345</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="icon-close text-danger"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Errors</p>
                          <h4 class="card-title">23</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="icon-social-twitter text-primary"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Followers</p>
                          <h4 class="card-title">+45K</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="card card-secondary">
                  <div class="card-body skew-shadow">
                    <h1>3,072</h1>
                    <h5 class="op-8">Total conversations</h5>
                    <div class="pull-right">
                      <h3 class="fw-bold op-8">88%</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-secondary bg-secondary-gradient">
                  <div class="card-body bubble-shadow">
                    <h1>188</h1>
                    <h5 class="op-8">Total Sales</h5>
                    <div class="pull-right">
                      <h3 class="fw-bold op-8">25%</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-secondary bg-secondary-gradient">
                  <div class="card-body curves-shadow">
                    <h1>12</h1>
                    <h5 class="op-8">New Users</h5>
                    <div class="pull-right">
                      <h3 class="fw-bold op-8">70%</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 
            <div class="row">
              <div class="col-md-4">
                <div class="card card-primary bg-primary-gradient">
                  <div class="card-body pb-0">
                    <div class="h1 fw-bold float-end">+5%</div>
                    <h2 class="mb-2">17</h2>
                    <p>Users online</p>
                    <div class="pull-in sparkline-fix chart-as-background">
                      <div id="lineChart4"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-black">
                  <div class="card-body pb-0">
                    <div class="h1 fw-bold float-end">-3%</div>
                    <h2 class="mb-2">27</h2>
                    <p>New Users</p>
                    <div class="pull-in sparkline-fix chart-as-background">
                      <div id="lineChart5"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-success bg-success2">
                  <div class="card-body pb-0">
                    <div class="h1 fw-bold float-end">+7%</div>
                    <h2 class="mb-2">213</h2>
                    <p>Transactions</p>
                    <div class="pull-in sparkline-fix chart-as-background">
                      <div id="lineChart6"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
          
 
          </div>
</div>

@endsection
