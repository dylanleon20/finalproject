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
              <a href="{{ route('admin.trainer-shift.create') }}" class="btn btn-info float-right">
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
                    </th>

                    <th>
                        Trainer Name
                      </th>
                    <th>
                     Shift Name
                    </th>
                
                      <th>
                        Status
                      </th>
                      
                  </thead>
                  <tbody>
@foreach ($trainerShift as $shifts)
<tr>
    <td>{{ $shifts->id }}</td>
    <td>{{ $shifts->trainershift->name }}</td>
    <td>{{ $shifts->shiftname->name }}</td>
    <td>
    
    @if ($shifts->status == 1)
       active  
    @else
       inactive  
    @endif
</td>


</tr>
  
@endforeach




@endsection