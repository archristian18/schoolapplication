@extends('students.layout')

@section('title', 'Create Page')


@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">

  <!-- {{ url('/student') }} -->
      <form action="{{ url('/picture') }}" method="post" enctype="multipart/form-data">
        
      {!! csrf_field() !!}

      <input class="form-control" name="photo" type="file" id="photo">

        <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
  
  </div>
</div>
@endsection