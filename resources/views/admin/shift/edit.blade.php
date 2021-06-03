@extends('backend.index')
@section('content')

<form action="{{ route('admin.shift.update',$shift->id) }}" method="POST"> 
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-5">
        <div class="form-group">
          <label class="bmd-label-floating">name</label>
          <input type="text" class="form-control" name="name" value="{{ $shift->name}}">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label class="bmd-label-floating">start time</label>
          <input type="time" class="form-control" name="start_time"value="{{ $shift->start_time}}">
        </div>
      </div>
      <br>
        
      <div class="col-md-3">
        <div class="form-group">
          <label class="bmd-label-floating">end time</label>
          <input type="time" class="form-control" name="end_time"value="{{ $shift->end_time}}">
        </div>
      </div>

    <div class="clearfix"></div>
    <button type="submit" class="btn btn-success">Update Data</button>
  </form>
  
@endsection