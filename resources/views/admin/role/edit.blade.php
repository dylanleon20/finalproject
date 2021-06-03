@extends('backend.index')
@section('content')
<form action="{{ route('admin.role.update',$role->id) }}" method="POST"> 
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-5">
        <div class="form-group">
          <label class="bmd-label-floating">Role name</label>
          <input type="text" class="form-control" name="name" value="{{ $role->name}}">
        </div>
      </div>
      
    <div class="clearfix"></div>
    <button type="submit" class="btn btn-success">Update Data</button>
  </form>
  @endsection