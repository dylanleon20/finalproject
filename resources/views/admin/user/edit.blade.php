@extends('backend.index')


@section('content')

<form action="{{ route('admin.user.update',$user->id) }}" method="POST"> 
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-5">
        <div class="form-group">
          <label class="bmd-label-floating">name</label>
          <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label class="bmd-label-floating">emaill</label>
          <input type="text" class="form-control" name="email" value="{{ $user->email }}">
        </div>
      </div>
      <br>
      <div class="col-md-3">
        <div class="form-group">
          <label class="bmd-label-floating">phone</label>
          <input type="text" class="form-control" name="phone"value="{{ $user->phone }}">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label class="bmd-label-floating">location</label>
          <input type="text" class="form-control" name="location" value="{{ $user->location }}">
        </div>
        <div class="col-md-3">
            <div class="form-group">
              <label class="bmd-label-floating">Dob</label>
              <input type="text" class="form-control" name="dob" value="{{ $user->dob }}">
            </div>
          </div>
    
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label class="bmd-label-floating">Gender</label>
          <input type="text" class="form-control" name="gender" value="{{ $user->gender }}">
        </div>
      </div>
      
        
      <div class="col-md-3">
        <div class="form-group">
          <label class="bmd-label-floating">Role</label>
          <select name="role" id="" class="form-control">
              @foreach ($roles as $role )
                  <option value="{{ $role->id }}">{{ $role->name }}</option>
              @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label class="bmd-label-floating">password</label>
          <input type="password" class="form-control" name="password">
        </div>
      </div>

    <div class="clearfix"></div>
    <button type="submit" class="btn btn-success">Submit Data</button>
  </form>

@endsection