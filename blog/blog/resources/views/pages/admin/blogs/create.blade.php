@extends('adminlayout.adminlayout')
@section('body')
<div class="col-12 grid-margin stretch-card">
    <div class="card mb-4"> <div class="card-body">
            <h4 class="card-title">CREATE blog</h4>
            <p class="card-description">create blog</p>
            
            <form class="forms-sample" action="{{ route('blogs.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="blogTitle">Title</label>
                    <input type="text" name="title" class="form-control" id="blogTitle" placeholder="Title" value="{{ old('title') }}">
                </div>
                
                <div class="form-group">
                    <label for="blogDescription">Description</label>
                    <input type="text" name="description" class="form-control" id="blogDescription" placeholder="Description" value="{{ old('description') }}">
                </div>
                
                <div class="form-group">
                    <label for="blogImage">Image</label>
                    <input type="file" name="image" class="form-control" id="blogImage">
                </div>
                
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="button" class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>

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
                            <th>#</th>
                            <th>First name</th>
                            <th>Progress</th>
                            <th>Amount</th>
                            <th>Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Herman Beck</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>$ 77.99</td>
                            <td>May 15, 2015</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Messsy Adam</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>$245.30</td>
                            <td>July 1, 2015</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>John Richards</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>$138.00</td>
                            <td>Apr 12, 2015</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Peter Meggik</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>$ 77.99</td>
                            <td>May 15, 2015</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Edward</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>$ 160.25</td>
                            <td>May 03, 2015</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>John Doe</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>$ 123.21</td>
                            <td>April 05, 2015</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Henry Tom</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>$ 150.00</td>
                            <td>June 16, 2015</td>
                        </tr>
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection