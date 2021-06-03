@extends('backend.index')
@section('content')

<form action="{{ route('admin.members.store') }}" method="POST"> 
    @csrf
    <div class="row">
      <div class="col-md-5">
        <div class="form-group">
          <label class="bmd-label-floating">Member Name</label>
          <select name="member" id="" class="form-control">

            @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
                
            @endforeach

          </select>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label class="bmd-label-floating">Shift name</label>
          <select name="shiftname" id="" class="form-control">
            @foreach ($shifts as $shift)
            <option value="{{ $shift->id }}">{{ $shift->name }}</option>
              
            @endforeach
          </select>
         
        </div>
      </div>
      <br>
        
      

    <div class="clearfix"></div>
    <button type="submit" class="btn btn-success">Save Member</button>
  </form>

@endsection