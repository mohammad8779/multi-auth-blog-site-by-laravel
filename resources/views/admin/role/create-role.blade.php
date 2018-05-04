@extends('admin.app')

@section('main-content')

	
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->

    

    
      <div class="box-header with-border">
        <h3 class="box-title">Add New Role</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      @include('includes.messages')
      <form action="{{route('role.store')}}" method="post">
        {{ csrf_field() }}
        <div class="box-body col-md-8">

          <div class="form-group">
            <label for="name">Role Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Role Name">
          </div>
          
          <div class="row">
            <div class="col-lg-12">
              <h4>Post Permissions:</h4>

              @foreach($permissions as $permission)
               
               @if($permission->for == 'post')
                 <input type="checkbox" value="{{$permission->id}}"> {{$permission->name}}
               @endif

              @endforeach
              
            </div>

            <div class="col-lg-12">
              <h4>User Permissions:</h4>
              @foreach($permissions as $permission)
              @if($permission->for == 'user')
                 <input type="checkbox" value="{{$permission->id}}"> {{$permission->name}}
              @endif
              @endforeach
              
            </div>

            <div class="col-lg-12">
              <h4>Other Permissions:</h4>
              @foreach($permissions as $permission)
               @if($permission->for == 'other')
                 <input type="checkbox" value="{{$permission->id}}"> {{$permission->name}}
                @endif
              @endforeach
              
            </div>
          </div> <br>
          <div  class="form-group" >
                <button type="submit" class="btn btn-primary">Add Role</button>
                <a class="btn btn-primary col-md-offset-1" href="{{route('role.store')}}">Back</a>
          </div>

       </div>

    </form>   
             
     
      
    <!-- /.content -->
</div>

	
@endsection