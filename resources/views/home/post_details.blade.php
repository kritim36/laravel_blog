<!DOCTYPE html>
<html lang="en">
   <head>
   <base href="/public">
     @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
        
      </div>
     
        <!-- <div style="text-align: center;" class="col-md-4">
            <div><img style="padding: 20px; height: 400px; width: 550px; margin:auto " src="/postimage/{{$post->image}}" class="services_img"></div>
                <h4>{{$post->title}}</h4>
                <h4>{{$post->description}}</h4>
                <p>Post By <b>{{$post->usertype}}</b> </p>
        </div> -->


        <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
            <div class="col-md-6 padding_right_0">
                  <div><img style="height: 300px; width: 350px;" src="/postimage/{{$post->image}}" class="about_img"></div>
               </div>
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">{{$post->title}}</h1>
                     <p class="about_text">{{$post->description}}</p>
                     <h5>Post By <b>{{$post->usertype}}</b> </h5>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
                
       

      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>