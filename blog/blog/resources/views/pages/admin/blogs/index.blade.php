@extends('adminlayout.adminlayout')
@section('body')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            id
                          </th>
                          <th>
                            title
                          </th>
                          <th>
                            description
                          </th>
                          <th>
                            image
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                          <td>
                            {{$blog->id }}
                          </td>
                          <td>
                            {{$blog->title }}
                          </td>
                          <td>
                            {{$blog->description }}
                          <td>
                            {{$blog->image }}
                          </td>
                          <td>
                            
                          </td>
                        </tr>
                        @endforeach
     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection