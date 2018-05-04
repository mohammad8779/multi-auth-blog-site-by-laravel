@extends('admin.app')

@section('main-content')

	
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->

    

    
      <div class="box-header with-border">
        <h3 class="box-title">Add New Permission</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      @include('includes.messages')
      <form action="{{route('permission.store')}}" method="post">
        {{ csrf_field() }}
        <div class="box-body col-md-8">

          <div class="form-group">
            <label for="name">Permission Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Permission Name">
          </div>

          <div class="form-group">
            <label for="for">Permission For</label>
            <select name="for" class="form-control" id="for">
                
                <option value="post">Post</option>
                <option value="user">User</option>
                <option value="other">Other</option>
            </select>
          </div>
         
          <div  class="form-group" >
                <button type="submit" class="btn btn-primary">Add Permission</button>
                <a class="btn btn-primary col-md-offset-1" href="{{route('permission.store')}}">Back</a>
          </div>

       </div>

    </form>   
             
     
      
    <!-- /.content -->
</div>

	
@endsection