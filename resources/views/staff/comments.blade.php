@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Comments') }}</div>
                @if(session('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{session('success')}}</strong>
                    </div>
                @endif
                <br>
                <div class="col-md-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCommentModal">
                  Add New Comment
                </button>
                </div>

                <div class="card-body">
                	<ul class="list-group">
                    @foreach($comments as $comment)
                      <li class="list-group-item">{{$comment->commentText}}<cite> commented on {{$comment->created_at}}</cite></li>
                      @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addCommentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Comment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('postComment')}}" method="post">
            @csrf
            <textarea class="form-control" name="commentText">
                
            </textarea>
            <input type="hidden" name="studentId" value="{{$studentId}}">

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit Comment</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
