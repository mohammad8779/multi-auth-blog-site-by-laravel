@extends('admin.app')

@section('headSection')
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection

@section('main-content')

	
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->

    

    
      <div class="box-header with-border">
        <h3 class="box-title">Add New Post</h3>

      </div>
      <!-- /.box-header -->
      <!-- form start -->

      @include('includes.messages')
      
      <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="box-body col-md-10">

          <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Post Title">
          </div>
          <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Subtitle">
          </div>

          <div class="form-group">
            <label for="slug">Post Slug</label>
            <input type="text" name="slug" class="form-control" id="slug" placeholder="Post Slug">
          </div>
          
          

         <div class="checkbox">
            <label>
              <input type="checkbox" name="status" value="1"> Published
            </label>
          </div>

           <div class="form-group">
                <label>Select Tags</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                   @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" >{{$tag->name}}</option>
                   @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>Select Category</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">

                  @foreach($categories as $category)
                   <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>

           <div class="box-body pad">
                
                <textarea id="editor1" name="body" rows="10" cols="80">
                                              
                </textarea>
        
           </div>

           <div class="form-group">
            <label for="image">Featured Image</label>
            <input type="file" name="image" id="image">
          </div>

          <div  class="form-group" >
                <button type="submit" class="btn btn-primary">Add Post</button>
                <a class="btn btn-primary col-md-offset-1" href="{{route('post.store')}}">Back</a>
          </div>

       </div>

    </form>   
             
     
      
    <!-- /.content -->
</div>

	
@endsection

@section('footerSection')
  <script src="{{asset('admin/plugins/select2/select2.full.min.js')}}"></script>

  <script>
    $(document).ready( function(){
       //Initialize Select2 Elements
      $(".select2").select2();
    });
  </script>
@endsection