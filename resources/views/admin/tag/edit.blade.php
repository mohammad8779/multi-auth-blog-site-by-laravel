@extends('admin.app')

@section('main-content')

	
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->

    

    
      <div class="box-header with-border">
        <h3 class="box-title">Update  Category</h3>

      </div>
      <!-- /.box-header -->
      <!-- form start -->

      @include('includes.messages')
      
      <form action="{{route('tag.update',$tag->id)}}" method="post">

        {{ csrf_field() }}
        {{method_field('PUT')}}

        <div class="box-body col-md-10">

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{$tag->name}}">
          </div>
         

          <div class="form-group">
            <label for="slug"> Slug</label>
            <input type="text" name="slug" class="form-control" id="slug" placeholder="Post Slug" value="{{$tag->slug}}">
          </div>
          
          <div  class="form-group" >
                <button type="submit" class="btn btn-primary">Update Tag</button>
                <a class="btn btn-primary col-md-offset-1" href="{{route('tag.store')}}">Back</a>
          </div>

       </div>

    </form>   
             
     
      
    <!-- /.content -->
</div>

	
@endsection