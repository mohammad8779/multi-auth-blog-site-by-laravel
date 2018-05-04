@extends('admin.app')

@section('main-content')

	
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->

    

    
      <div class="box-header with-border">
        <h3 class="box-title">Update Roles Pemission</h3>

      </div>
      <!-- /.box-header -->
      <!-- form start -->

      @include('includes.messages')
      
      <form action="{{route('permission.update',$permission->id)}}" method="post">

        {{ csrf_field() }}
        {{method_field('PUT')}}

        <div class="box-body col-md-10">

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{$permission->name}}">
          </div>

          <div class="form-group">
            <label for="for">Permission For</label>
            <input type="text" name="for" class="form-control" id="for" placeholder="Permission For" value="{{$permission->for}}">
          </div>
         

          
          
          <div  class="form-group" >
                <button type="submit" class="btn btn-primary">Update Permission</button>
                <a class="btn btn-primary col-md-offset-1" href="{{route('permission.store')}}">Back</a>
          </div>

       </div>

    </form>   
             
     
      
    <!-- /.content -->
</div>

	
@endsection