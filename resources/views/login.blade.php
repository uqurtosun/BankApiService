<!DOCTYPE html>
<html lang="en">
  <head>

    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>BANK API DEMO</title>
   
    <!-- vendor css -->
    <link href="{{secure_asset('assets/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <script src="{{secure_asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <!-- azia CSS -->
    <link rel="stylesheet" href="{{secure_asset('assets/css/azia.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
        $(document).ready(function(){
            $(".sendData").click(function(){
                $.ajax({
                    headers:{'X-CSRF-TOKEN' : '{{ csrf_token() }}'},
                    url: "{{route('LoginCheck')}}",
                    method: 'POST',
                    data: { email:$(".email").val(), password:$(".password").val()},
                    
                    success: function (data) { 
                      console.log(data)
                      var response = JSON.parse(data)
                  //  $(".writeinfo").append(data.status); 
                  var msg = response.message
                      console.log(response.message)
                      console.log(response.status)
                      if(response.status=='APPROVED'){ window.location.replace('/Admin'); }  else {
      $(".writeinfo").append("<div class='alert alert-danger mg-b-0' role='alert'> <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span> </button><strong>Oh no!</strong> "+msg+"</div>" )
    }
                      
                    }
                }); 
            });
       });    
    </script>


  </head>
  <body class="az-body">


    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <h1 class="">Bank API DEMO</h1>
        <div class="az-signin-header">
        
          <h2>Welcome!</h2>
          <h4>Please sign in to continue</h4>
        
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control email" name="email" placeholder="Enter your email" value="demo@financialhouse.io">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control password" name="password" placeholder="Enter your password" value="cjaiU8CV">
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block sendData">Login</button>
        
        </div><!-- az-signin-header -->

  
        <br>
        <div class="writeinfo"></div> 



      </div><!-- az-card-signin -->


    </div><!-- az-signin-wrapper -->



    <script src="{{secure_asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{secure_asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{secure_asset('assets/lib/ionicons/ionicons.js')}}"></script>



    <script src="{{secure_asset('assets/js/azia.js')}}"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>
