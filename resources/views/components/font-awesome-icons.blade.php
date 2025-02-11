@extends('layout.dashboard-hero')

@section('main-dashboard-page')

<div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Icons</h3>
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
                  <a href="{{ route('components.font-awesome-icons') }}">Base</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ route('components.font-awesome-icons') }}">Line Awesome </a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title"><a href="https://cdnjs.com/libraries/font-awesome"><i class="fa fa-link"></i>Font Awesome Icons cdn</a></div>
                    <div class="card-category">
                      Modern Font Icon from
                      <a class="link" href="https://fontawesome.com/icons" target="_blank" rel="noopener noreferrer">
                        Font Awesome
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="row-demo-icon" class="row"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
  

@endsection

 