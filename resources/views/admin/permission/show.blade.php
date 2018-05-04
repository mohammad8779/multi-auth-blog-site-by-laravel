@extends('admin.app')

@section('headSection')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection

@section('main-content')
	
	<div class="content-wrapper">
	     <div class="box">
            <div class="box-header">
              <h3 class="box-title"> @include('includes.messages') </h3>
              <a class="btn btn-primary col-md-offset-2" href="{{route('permission.create')}}">Add New Permission</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                   <th>Permission For</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($permissions as $permission)
                <tr>
                  <td>{{$loop->index +1}}</td>
                  <td>{{$permission->name}}</td>
                  <td>{{$permission->for}}</td>
                  
                  
                   <td><a href="{{route('permission.edit',$permission->id)}}"><span class="glyphicon glyphicon-edit"></span></a></span></td>

                  <td>

                    <form id="delete-form-{{$permission->id}}" action="{{route('permission.destroy',$permission->id)}}" method="post" style="display:none">
                      {{csrf_field()}}

                      {{method_field('DELETE')}}
                    </form>
                    <a href="" onclick="if(confirm('Are you sure to delete!')){event.preventDefault();document.getElementById('delete-form-{{$permission->id}}').submit(); } else{event.preventDefault();}"><span class="glyphicon glyphicon-trash"></a>
                      
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