@extends('admin.app')

@section('headSection')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection

@section('main-content')
	
	<div class="content-wrapper">
	     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <a class="btn btn-primary col-md-offset-2" href="{{route('role.create')}}">Add New Role</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($roles as $role)
                <tr>
                  <td>{{$loop->index +1}}</td>
                  <td>{{$role->name}}</td>
                  
                  
                   <td><a href="{{route('role.edit',$role->id)}}"><span class="glyphicon glyphicon-edit"></span></a></span></td>

                  <td>

                    <form id="delete-form-{{$role->id}}" action="{{route('role.destroy',$role->id)}}" method="post" style="display:none">
                      {{csrf_field()}}

                      {{method_field('DELETE')}}
                    </form>
                    <a href="" onclick="if(confirm('Are you sure to delete!')){event.preventDefault();document.getElementById('delete-form-{{$role->id}}').submit(); } else{event.preventDefault();}"><span class="glyphicon glyphicon-trash"></a>
                      
                  </td>

                </tr>
                @endforeach

                
                
              
                
                </tbody>
                <tfoot>
                 <tr>
                  <th>S.N</th>
                  <th>Name</th>
                 
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