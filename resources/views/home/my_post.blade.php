<!DOCTYPE html>
<html lang="en">
   <head>
     @include('home.homecss')

     <style>

        .post_design{
            padding: 30px;
            text-align: center;
            background-color: black;
        }
        .title_design{
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
            color: white;
        }
        .des_design{
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
            color: whitesmoke;
        }
        .img_design{
            height: 200px;
            width: 300px;
            padding: 30px;
            margin: auto;
        }

     </style>

   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')

         @foreach($data as $data)
         <div class="post_design">
            <img class="img_design" src="/postimage/{{$data->image}}">
            <h4 class="title_design">{{$data->title}}</h4>
            <p class="des_design">{{$data->description}}</p>
            <a onclick="return confirm('Are you sure to delete this?')" href="{{url('my_post_del', $data->id)}}" class="btn btn-danger">Delete</a>
         </div>
         @endforeach
         <!-- banner section start -->
        
      </div>
     

      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>