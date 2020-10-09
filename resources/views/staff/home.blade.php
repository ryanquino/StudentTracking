@extends('layouts.app')

@section('content')
<div class="container">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="#">Report of students by course</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Generate Email List by course</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Comment about student</a>
  </li>
<li class="nav-item">
    <a class="nav-link" href="#">View info about student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Remove student</a>
  </li>
</ul>
<br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Staff') }}</div>

                <div class="card-body">
                	<form>
                		<div class="form-group row">
                            <label for="courseId" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>

                            <div class="col-md-6">
                                <select id="courseId" class="form-control @error('courseId') is-invalid @enderror" name="courseId">
                                    <option value="1">BSCS</option>
                                    <option value="2">BSIT</option>
                                    <option value="3">BSECE</option>
                                    <option value="4">BSCOE</option>
                                    <option value="5">BSEE</option>
                                </select>
                                @error('course')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                	</form>

                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">ID</th>
					      <th scope="col">First Name</th>
					      <th scope="col">Last Name</th>
					      <th scope="col">Email</th>
                <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($userList as $list)
					    <tr>
					      <th scope="row">{{$list->id}}</th>
					      <td>{{$list->firstname}}</td>
					      <td>{{$list->lastname}}</td>
					      <td>{{$list->email}}</td>
                <td><a href="{{route('comments', $list->id)}}"><button type="button" class="btn btn-primary btn-sm">View Comments</button></a></td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
