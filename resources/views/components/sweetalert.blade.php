@extends('layout.simple-hero')

@section('main-simple-page')

<div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Alert</h3>
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
                  <a href="{{ route('components.sweetalert') }}">Base</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ route('components.sweetalert') }}">Sweet Alert</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Sweet Alert</div>
                    <div class="card-category">
                      <a 
                        href="https://lipis.github.io/bootstrap-sweetalert/" 
                        target="_blank" 
                        rel="noopener noreferrer"
                      >
                        SweetAlert
                      </a> makes popup messages easy and pretty.
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Basic alert
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-info"
                              id="alert_demo_1"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Alert title and text
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-focus"
                              id="alert_demo_2"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Enable <code>warning</code>, <code>error</code>,
                            <code>success</code>, and <code>info</code> state
                            icons
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-warning"
                              id="alert_demo_3_1"
                            >
                              Warning
                            </button>
                            <button
                              type="button"
                              class="btn btn-danger"
                              id="alert_demo_3_2"
                            >
                              Error
                            </button>
                            <button
                              type="button"
                              class="btn btn-success"
                              id="alert_demo_3_3"
                            >
                              Success
                            </button>
                            <button
                              type="button"
                              class="btn btn-info"
                              id="alert_demo_3_4"
                            >
                              Info
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Change confirm button text and class
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-success"
                              id="alert_demo_4"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Modal window with input field
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-warning"
                              id="alert_demo_5"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Closes the modal after a certain amount of time
                            (specified in ms)
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-primary"
                              id="alert_demo_6"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            A warning message, with a function attached to the
                            "Confirm" Button
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-success"
                              id="alert_demo_7"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            By passing a parameter, you can execute something
                            else for cancel
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-danger"
                              id="alert_demo_8"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>



@endsection