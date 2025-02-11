@extends('layout.simple-hero')

@section('main-simple-page')


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
                  <a href="{{ route('components.simple-line-icon') }}">Base</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ route('components.simple-line-icon') }}">Line Awesome</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Simple Line Icons</div>
                    <div class="card-category">
                      Simple and Minimal Line Icons from
                      <a 
                        class="link" 
                        href="https://cdnjs.com/libraries/simple-line-icons" 
                        target="_blank" 
                        rel="noopener noreferrer"
                      >
                        Simple Line Icons cdn
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