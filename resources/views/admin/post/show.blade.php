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
              @can('posts.create', Auth::user())
              <a class="btn btn-primary col-md-offset-2" href="{{route('post.create')}}">Add New Post</a>
              @endcan
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Slug</th>
                  @can('posts.update', Auth::user())
                  <th>Edit</th>
                  @endcan
                  @can('posts.delete', Auth::user())
                  <th>Delete</th>
                  @endcan
                </tr>
                </thead>
                <tbody>

                @foreach($posts as $post)
                <tr>
                  <td>{{$loop->index +1}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->subtitle}}</td>
                  <td>{{$post->slug}}</td>
                  
                  @can('posts.update', Auth::user())
                  <td><a href="{{route('post.edit',$post->id)}}"><span class="glyphicon glyphicon-edit"></span></a></span></td>
                  @endcan

                  @can('posts.delete', Auth::user())
                  <td>

                    <form id="delete-form-{{$post->id}}" action="{{route('post.destroy',$post->id)}}" method="post" style="display:none">
                      {{csrf_field()}}

                      {{method_field('DELETE')}}
                    </form>
                    <a href="" onclick="if(confirm('Are you sure to delete!')){event.preventDefault();document.getElementById('delete-form-{{$post->id}}').submit(); } else{event.preventDefault();}"><span class="glyphicon glyphicon-trash"></a>
                      
                  </td>
                  @endcan

                </tr>
                @endforeach

                
                
              
                
                </tbody>
                <tfoot>
                  <tr>
                  <th>S.N</th>
                  <th>Title</th>
                  <th>Subtitle</th>
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