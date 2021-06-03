@extends('backend.index')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Simple Table</h4>
              <p class="card-category"> Here is a subtitle for this table</p>
              <a href="{{ route('admin.user.create') }}" class="btn btn-info float-right">
                    create new user
                </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      email
                    </th>
                    <th>
                      phone
                    </th>
                    <th>
                      location
                    </th>
                    
                      <th>
                        DOB
                      </th>
                      <th>
                       Gender
                      </th>
                      <th>Role</th>
                  </thead>
                  <tbody>
@foreach ($users as $user)
<tr>
  <td>{{ $user->id }}</td>
  <td>{{ $user->name }}</td>
  <td>{{ $user->email }}</td>
  <td>

    @if ($user->phone == NULL)
        --
    @else
        {{ $user->phone }}
    @endif
  </td>
  <td>{{ $user->location }}</td>
 
  <td>{{ $user->dob }}</td>
  <td>{{ $user->gender }}</td>
  <td>{{ $user->role->name }}</td>


  <td>
    <a href="{{ route('admin.user.edit',$user->id) }}" class="btn btn-success">
    edit
  </a>
</td>

  <td>
    <form action="{{ route('admin.user.destroy',$user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" >Delete</button>
    </form>
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