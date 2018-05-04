@extends('admin.app')

@section('main-content')

	
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->

    

    
      <div class="box-header with-border">
        <h3 class="box-title">Add New Tag</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      @include('includes.messages')
      <form action="{{route('tag.store')}}" method="post">
        {{ csrf_field() }}
        <div class="box-body col-md-8">

          <div class="form-group">
            <label for="title">Tag Name</label>
            <input type="text" name="name" class="form-control" id="title" placeholder="Tag Name">
          </div>
         

          <div class="form-group">
            <label for="slug">Tag Slug</label>
            <input type="text" name="slug" class="form-control" id="slug" placeholder="Tag Slug">
          </div>
          
          <div  class="form-group" >
                <button type="submit" class="btn btn-primary">Add Tag</button>
                <a class="btn btn-primary col-md-offset-1" href="{{route('tag.store')}}">Back</a>
          </div>

       </div>

    </form>   
             
     
      
    <!-- /.content -->
</div>

	
@endsection