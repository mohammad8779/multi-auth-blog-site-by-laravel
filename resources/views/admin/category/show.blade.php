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
              <a class="btn btn-primary col-md-offset-2" href="{{route('category.create')}}">Add New Category</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)
                <tr>
                  <td>{{$loop->index +1}}</td>
                  <td>{{$category->name}}</td>
                  <td>{{$category->slug}}</td>

                   <td><a href="{{route('category.edit',$category->id)}}"><span class="glyphicon glyphicon-edit"></span></a></span></td>

                  <td>

                    <form id="delete-form-{{$category->id}}" action="{{route('category.destroy',$category->id)}}" method="post" style="display:none">
                      {{csrf_field()}}

                      {{method_field('DELETE')}}
                    </form>
                    <a href="" onclick="if(confirm('Are you sure to delete!')){event.preventDefault();document.getElementById('delete-form-{{$category->id}}').submit(); } else{event.preventDefault();}"><span class="glyphicon glyphicon-trash"></a>
                      
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