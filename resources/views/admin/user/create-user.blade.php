@extends('admin.app')

@section('main-content')

  
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->

    

    
      <div class="box-header with-border">
        <h3 class="box-title">Add New User</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      @include('includes.messages')
      <form action="{{route('user.store')}}" method="post">
        {{ csrf_field() }}
        <div class="box-body col-md-8">

          <div class="form-group">
            <label for="title">User Name</label>
            <input type="text" name="name" class="form-control" id="title" placeholder="User Name" value="{{old('name')}}">
          </div>
         

          <div class="form-group">
            <label for="email">User Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="User Email" value="{{old('email')}}">
          </div>

          <div class="form-group">
            <label for="password">User Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="{{old('password')}}">
          </div>

          <div class="form-group">
            <label for="con-password">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="con-password" placeholder="Confirm Password">
          </div>

           <div class="form-group">
            <label for="phone">User Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="User Phone" value="{{old('phone')}}">
          </div>

          <div class="form-group">
            <label for="Status">User Status</label><br>
            <input type="checkbox" name="status" id="status" value="1" @if(old('status') == 1) checked @endif >
          </div>

          <div class="form-group">

            <label for="user-roles">User Roles</label> <br>
            @foreach($roles as $role)
              <input type="checkbox" name="role[]" value="{{$role->id}}">  {{$role->name}}
            @endforeach
          </div>
          
          <div  class="form-group" >
                <button type="submit" class="btn btn-primary">Add User</button>
                <a class="btn btn-primary col-md-offset-1" href="{{route('user.store')}}">Back</a>
          </div>

       </div>

    </form>   
             
     
      
    <!-- /.content -->
</div>

  
@endsection