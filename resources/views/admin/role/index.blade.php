@extends('backend.index')
@section('content')


<a href="{{ route('admin.shift.create') }}" class="btn btn-success float-right">Create Shift</a>
<table class="table">
    <thead class=" text-primary">
        <th>
           id
                </th>
      <th>
  Role Name
      </th>
      
    </thead>
    <tbody>
        @foreach ($roles as $role)
           <tr>
               <td>{{ $role->id }}</td>
               <td>{{ $role->name }}</td>
               
              <td> <a href="{{ route('admin.role.edit',$role->id) }}"class="btn btn-success">Edit</a></td>
                  
               </td>
               <td>
                   <form action="{{ route('admin.role.destroy',$role->id) }}"  method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Role</button>
                </form>
               </td>
        </tr> 
        @endforeach
    </tbody>
</table>




@endsection