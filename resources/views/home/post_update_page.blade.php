<!DOCTYPE html>
<html lang="en">
   <head>
   <base href="/public">

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

         <div class="div_design">
            
         @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

            {{session()->get('message')}}
        </div>

        @endif
        
        <h3 class="title_design">Update Post</h3>
        <form action="{{url('update_post_data', $data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field_design">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$data->title}}">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description">{{$data->description}}</textarea>
            </div>
            <div>
                <label for="image">Old Image</label>
                <img style="margin:auto;" height="25" width="75px" src="/postimage/{{$data->image}}" alt="">
            </div>
            <div>
                <label for="image">New Image</label>
                <input type="file" name="image" >
            </div>
            <div>
                <input type="submit" value="Update Post" class="btn btn-outline-secondary">
            </div>
        </form>
      </div>
         
      </div>

      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>