<!DOCTYPE html>
<html lang="en">
   <head>

   <style type="text/css">

    .div_design{
        text-align: center;
    }

    .title_design{
        font-size: 30px;
        font-weight: bold;
        color: white;
        padding: 30px;
    }

    label{
        display: inline-block;
        width: 200px;
        color: white;
    }

    .field_design{
        padding: 25px;
    }
   </style>
     @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
        
         @if(session()->has('message'))

            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

            {{session()->get('message')}}
            </div>



@endif
     
      <div class="div_design">
        <h3 class="title_design">Add Post</h3>
        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field_design">
                <label for="title">Title</label>
                <input type="text" name="title">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description"></textarea>
            </div>
            <div>
                <label for="image">Add Image</label>
                <input type="file" name="image">
            </div>
            <div>
                <input type="submit" value="Add Post" class="btn btn-outline-secondary">
            </div>
        </form>
      </div>

      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>