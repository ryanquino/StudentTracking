@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Personal Information') }}</div>

                <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{$user->id}}">
                      </div>
                      <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{$user->firstname}}">
                      </div>
                      <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{$user->lastname}}">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="teemailxt" class="form-control" id="email" name="email" value="{{$user->email}}">
                      </div>
                      <div class="form-group">
                        <label for="courseId">Course</label>
                        @if($user->courseId == 1)
                        <select class="form-control" id="courseId" name="courseId">
                                <option value="1" selected>BSCS</option>
                                <option value="2">BSIT</option>
                                <option value="3">BSECE</option>
                                <option value="4">BSCOE</option>
                                <option value="5">BSEE</option>
                        </select>
                        @elseif($user->courseId == 2)
                        <select class="form-control" id="courseId" name="courseId">
                                <option value="1" >BSCS</option>
                                <option value="2" selected>BSIT</option>
                                <option value="3">BSECE</option>
                                <option value="4">BSCOE</option>
                                <option value="5">BSEE</option>
                        </select>
                        @elseif($user->courseId == 3)
                        <select class="form-control" id="courseId" name="courseId">
                                <option value="1" >BSCS</option>
                                <option value="2" >BSIT</option>
                                <option value="3" selected>BSECE</option>
                                <option value="4">BSCOE</option>
                                <option value="5">BSEE</option>
                        </select>
                        @elseif($user->courseId == 4)
                        <select class="form-control" id="courseId" name="courseId">
                                <option value="1" >BSCS</option>
                                <option value="2" >BSIT</option>
                                <option value="3">BSECE</option>
                                <option value="4" selected>BSCOE</option>
                                <option value="5">BSEE</option>
                        </select>
                        @elseif($user->courseId == 5)
                        <select class="form-control" id="courseId" name="courseId">
                                <option value="1" >BSCS</option>
                                <option value="2">BSIT</option>
                                <option value="3">BSECE</option>
                                <option value="4">BSCOE</option>
                                <option value="5" selected>BSEE</option>
                        </select>
                        @endif
                      </div>
                      <button type="submit" class="btn btn-primary">Update Information</button>
                    </form>
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
