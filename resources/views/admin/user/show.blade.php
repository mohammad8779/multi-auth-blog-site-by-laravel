@extends('admin.app')

@section('headSection')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection

@section('main-content')
	
	<div class="content-wrapper">
	     <div class="box">
            <div class="box-header">
              <h3 class="box-title">@include('includes.messages')</h3>
              <a class="btn btn-primary col-md-offset-2" href="{{route('user.create')}}">Add New User</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>User Roles</th>
                  <th>User Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                <tr>
                  <td>{{$loop->index +1}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                    @foreach($user->roles as $role)
                      {{$role->name}},
                    @endforeach

                  </td>

                  <td>{{$user->status?'Active':'Not Active'}}</td>
                  
                   <td><a href="{{route('user.edit',$user->id)}}"><span class="glyphicon glyphicon-edit"></span></a></span></td>

                  <td>

                    <form id="delete-form-{{$user->id}}" action="{{route('user.destroy',$user->id)}}" method="post" style="display:none">
                      {{csrf_field()}}

                      {{method_field('DELETE')}}
                    </form>
                    <a href="" onclick="if(confirm('Are you sure to delete!')){event.preventDefault();document.getElementById('delete-form-{{$user->id}}').submit(); } else{event.preventDefault();}"><span class="glyphicon glyphicon-trash"></a>
                      
                  </td>

                </tr>
                @endforeach

                
                
              
                
                </tbody>
                <tfoot>
                 <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>

@endsection

@section('footerSection')
    
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
	<script>
	  $(function () {
	    $("#example1").DataTable();
	    
	  });
	</script>
@endsection