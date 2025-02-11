@extends('layout.simple-hero')

@section('main-simple-page')


<div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Tables</h3>
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
                  <a href="{{ route('tables.tables') }}">Tables</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ route('tables.tables') }}">Basic Tables</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Basic Table</div>
                  </div>
                  <div class="card-body">
                    <div class="card-sub">
                      This is the basic table view of the ready dashboard :
                    </div>
                    <table class="table mt-3">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th> 
                          <th scope="col">Email</th> 
                        </tr>
                      </thead>
                      <tbody> 
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td> 
                            </tr>
                         @endforeach 
 
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Striped Rows</div>
                  </div>
                  <div class="card-body">
                    <div class="card-sub">
                      Add
                      <code class="highlighter-rouge">.table-striped</code> to
                      rows the striped table
                    </div>
                    <table class="table table-striped mt-3">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="card-sub">
                      Add
                      <code class="#highlighter-rouge"
                        >.table-striped-bg-*states</code
                      >
                      to change background from striped rows
                    </div>
                    <table
                      class="table table-striped table-striped-bg-black mt-3"
                    >
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                    <table
                      class="table table-striped table-striped-bg-danger mt-4"
                    >
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Responsive Table</div>
                  </div>
                  <div class="card-body">
                    <div class="card-sub">
                      Create responsive tables by wrapping any table with
                      <code class="highlighter-rouge">.table-responsive</code>
                      <code class="highlighter-rouge">DIV</code> to make them
                      scroll horizontally on small devices
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>  
                            <th scope="col">Fathername</th>
                            <th scope="col">mothername</th>
                            <th scope="col">phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">DOB</th> 
                            <th scope="col">Created_at</th> 
                            <th scope="col">Updated_at</th>                         
                           </tr>
                        </thead>
                        <tbody> 
                          @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td> <img
                                  src="{{ ('/storage/'.$user->image)}}"
                                  alt="image profile"
                                  class="avatar-img rounded"/>
                                </td>
                                <td>{{ $user->username }}</td> 
                                <td>{{ $user->fathername }}</td>
                                <td>{{ $user->mothername }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->dob }}</td> 
                                <td>{{ $user->created_at }}</td> 
                                <td>{{ $user->updated_at }}</td> 
                            </tr>
                         @endforeach  
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Hoverable Table</div>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                        <tr> 
                          <th scope="col">fathername</th>
                          <th scope="col">phone</th>
                          <th scope="col">Created_at</th>
                        </tr>
                      </thead>
                      <tbody> 
                        @foreach($users as $user)
                            <tr> 
                                <td>{{ $user->fathername }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->created_at }}</td> 
                            </tr>
                         @endforeach 
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Bordered Table</div>
                  </div>
                  <div class="card-body">
                    <div class="card-sub">
                      Add
                      <code class="highlighter-rouge">.table-bordered</code> to
                      create a bordered table
                    </div>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                         
                        <tr>
                          <td>3</td>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="card-sub">
                      You can also add
                      <code class="highlighter-rouge"
                        >.table-bordered-bd-*states</code
                      >
                      to change the border color of the table
                    </div>
                    <table
                      class="table table-bordered table-bordered-bd-warning mt-4"
                    >
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="card-sub">
                      It can also add
                      <code class="highlight-rouge"
                        >.table-head-bg-*states</code
                      >
                      so that the table header has the same color as the border
                      color of the table
                    </div>
                    <table
                      class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4"
                    >
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Table Head States</div>
                  </div>
                  <div class="card-body">
                    <table class="table table-head-bg-success">
                      <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th> 
                            <th scope="col">Email</th>  
                        </tr>
                      </thead>
                      <tbody> 
                      @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>  
                            </tr>
                         @endforeach 
                      </tbody>
                    </table>
                    <table class="table table-head-bg-primary mt-4">
                      <thead>
                        <tr>  
                          <th scope="col">Fathername</th> 
                          <th scope="col">Phone</th>
                          <th scope="col">Created_at</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                            <tr> 
                                <td>{{ $user->fathername }}</td> 
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->created_at }}</td>  
                            </tr>
                        @endforeach 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
</div>

@endsection

