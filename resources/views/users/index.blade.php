@extends('layouts.app')


@section('content')
{{-- <div class="d-flex justify-content-center"> --}}
  <div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
              
              <div class="pull-right">
                <h2>Users Management</h2>
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th width="280px">Action</th>
                </tr>
                @foreach ($data as $key => $user)
                 <tr>
                   <td>{{ ++$i }}</td>
                   <td>{{ $user->name }}</td>
                   <td>{{ $user->email }}</td>
                   <td>
                     @if(!empty($user->getRoleNames()))
                       @foreach($user->getRoleNames() as $v)
                          <label>{{ $v }}</label>
                       @endforeach
                     @endif
                   </td>
                   <td>
                      <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>


                      
                      <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                       {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                           {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                       {!! Form::close() !!}
                   </td>
                 </tr>
                @endforeach
               </table>
            </div>
        </div>
    </div>
  </div>
{{-- </div> --}}

{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
        </div>
    </div>
</div> --}}


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


{{-- <table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label>{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table> --}}


{!! $data->render() !!}


{{-- <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p> --}}
@endsection