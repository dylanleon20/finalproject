@extends('backend.index')

@section('content')
<a href="{{ route('admin.shift.create') }}" class="btn btn-success float-right">Create Shift</a>
<table class="table">
    <thead class=" text-primary">
        <th>
           id
                </th>
      <th>
  Name
      </th>
      <th>
        Start Time
      </th>
      <th>
        End Time
      </th>
      <th>
       Status
      </th>
      <th>
        Created By
      </th>
    </thead>
    <tbody>
        @foreach ($shifts as $shift)
           <tr>
               <td>{{ $shift->id }}</td>
               <td>{{ $shift->name }}</td>
               <td>{{ $shift->start_time }}</td>
               <td>{{ $shift->end_time }}</td>
               <td>
                   @if ($shift->tatus==1 )
                       Inactive 
                   @else
                      Active 
                   @endif
               </td>
               <td>{{  $shift->users->name}}</td>
               <td>
                   <a href="{{ route('admin.shift.edit',$shift->id) }}"class="btn btn-success">Edit</a>
               </td>
               <td>
                   <form action="{{ route('admin.shift.destroy',$shift->id) }}"  method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Shift</button>
                </form>
               </td>
        </tr> 
        @endforeach
    </tbody>
</table>
@endsection