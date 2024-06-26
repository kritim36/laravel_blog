<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">

        .title_design{
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .table_design{
            border: 1px solid white;
            width: 80%;
            text-align: center;
            margin-left: 70px;
        }

        .th_design{
            background-color: white;
            color: black;
        }

        .img_design{
            height: 100px;
            width: 150px;
            padding: 10px;
        }

    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">

      @if(session()->has('message'))

        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

            {{session()->get('message')}}

        </div>

      @endif


        <h1 class="title_design">All Post</h1>

        <table class="table_design">
            <tr class="th_design">
                <th>Post Title</th>
                <th>Post Description</th>
                <th>Post By</th>
                <th>Usertype</th>
                <th>Post Status</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Accept Status</th>
                <th>Reject Status</th>
            </tr>


            @foreach($post as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->usertype}}</td>
                <td>{{$post->post_status}}</td>
                <td>
                    <img class="img_design" src="postimage/{{$post->image}}">
                </td>
                <td>
                    <a href="{{url('delete_post', $post->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to Delete This?')">Delete</a>
                </td>
                <td>
                    <a href="{{url('edit_page', $post->id)}}" class="btn btn-success">Edit</a>
                </td>

                <td>
                    <a href="{{url('accept_post', $post->id)}}" class="btn btn-outline-secondary">Accept</a>
                </td>
                <td>
                    <a onclick="return confirm('Are you sure to reject this post?')" href="{{url('reject_post', $post->id)}}" class="btn btn-primary">Reject</a>
                </td>
            </tr>
            @endforeach


        </table>
      </div>
    
      @include('admin.footer')
  </body>
</html>
