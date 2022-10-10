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

    <title>BANK API TRANSACTION</title>

    <!-- vendor css -->
    <link href="{{asset('assets/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/pickerjs/picker.min.css')}}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/azia.css')}}">

  </head>
  <body>

    <div class="az-header">
      <div class="container">
        <div class="az-header-left ">
          <a href="{{ URL::route('admin')}}" class="az-logo"><span></span> Dashboard</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span> Dashboard</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->

        </div><!-- az-header-menu -->
        <div class="az-header-right">
         
        
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="{{asset('assets/img/faces/face1.jpg')}}" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="{{asset('assets/img/faces/face1.jpg')}}" alt="">
                </div><!-- az-img-user -->
                <h6>John wick</h6>
                <span>Premium Member</span>
              </div><!-- az-header-profile -->


              <a href="{{ route('Logauth')}}" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content az-content-profile">
      <div class="container mn-ht-100p">
        <div class="az-content-left az-content-left-profile">

          <div class="az-profile-overview">
            <div class="az-img-user">
              <img src="{{asset('assets/img/faces/face10.jpg')}}" alt="">
            </div><!-- az-img-user -->
            <div class="d-flex justify-content-between mg-b-20">
              <div>
                <h5 class="az-profile-name">{{ $billingTitle}}{{ $billingFirstName}} {{ $billingLastName}} </h5>
                <p class="az-profile-name-text">ID: {{ $id}}</p>
              </div>

            </div>


            <hr class="mg-y-30">


          </div><!-- az-profile-overview -->

        </div><!-- az-content-left -->


          <div class="az-profile-body" style=" width: 60%; ">



            <div class="row">
              <div class="col-md-6 col-xl-6">
                <div class="az-content-label tx-13 mg-b-25">Address</div>
                <div class="az-profile-work-list">
                  <div class="media">
                    <div class="media-logo bg-success"><i class="icon ion-logo-whatsapp"></i></div>
                    <div class="media-body">
                      <h6>Billing Address </h6>
                      <span>City : @if($billingState==false) Null @else {{$billingState}}  @endif  </span>
                      <p>
                       @if($billingAddress1==false) Null @else {{$billingAddress1}}  @endif,
                       @if($billingCity==false) Null @else {{$billingCity}}  @endif,
                       @if($billingState==false) Null @else {{$billingState}}  @endif,
                        </p>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="media-logo bg-primary"><i class="icon ion-logo-buffer"></i></div>
                    <div class="media-body">
                      <h6>Shipping Address</h6>
                      <span>City : @if($billingState==false) Null @else {{$billingState}}  @endif   </span>
                      <p>
             <!-- TRANSACTION  Json Yapısı Sabit Olmadıgı için Hatalar Oluşuyordur Bunu Düzeltmek İçin IF Kullanıldı   -->
                      @if($countRow < 16 )  

                      @else
                    
                        @if($shippingAddress1==false) Null @else {{$shippingAddress1}}  @endif ,
                        @if($shippingCity==false) Null @else {{$shippingCity}}  @endif ,
                        @if($shippingState==false) Null @else {{$shippingState}}  @endif ,

                      @endif
                       
                      </p>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-profile-work-list -->
              </div><!-- col -->
              <div class="col-md-6 col-xl-6 mg-t-40 mg-md-t-0">
                <div class="az-content-label tx-13 mg-b-25">Contact Information</div>
                <div class="az-profile-contact-list">
                  <div class="media">
                    <div class="media-icon"><i class="icon ion-md-phone-portrait"></i></div>
                    <div class="media-body">
                      <span>Mobile</span>
                      <div>{{ $billingPhone}}</div>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="media-icon"><i class="icon ion-logo-slack"></i></div>
                    <div class="media-body">
                      <span>E-Mail</span>
                      <div>{{ $email}}</div>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="media-icon"><i class="icon ion-md-locate"></i></div>
                    <div class="media-body">
                      <span>Birthday</span>
                      <div>{{ $birthday}}</div>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-profile-contact-list -->
              </div><!-- col -->
            </div><!-- row -->

            <div class="mg-b-20"></div>

          </div><!-- az-profile-body -->
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->

    <div class="az-footer pd-b-10">
      <div class="container">
        <span>&copy; 2021 Azia Responsive Bootstrap 5 Dashboard Template</span>
      </div><!-- container -->
    </div><!-- az-footer -->


    <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/lib/ionicons/ionicons.js')}}"></script>
    <script src="{{asset('assets/lib/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{asset('assets/js/azia.js')}}"></script>
    <script>
      $(function(){
        'use strict'

        /** AREA CHART **/
        var ctx = document.getElementById('chartArea').getContext('2d');

        var gradient = ctx.createLinearGradient(0, 240, 0, 0);
        gradient.addColorStop(0, 'rgba(0,123,255,0)');
        gradient.addColorStop(1, 'rgba(0,123,255,.3)');

        new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['Oct 1', 'Oct 2', 'Oct 3', 'Oct 4', 'Oct 5', 'Oct 6', 'Oct 7', 'Oct 8', 'Oct 9', 'Oct 10'],
            datasets: [{
              data: [12, 15, 18, 40, 35, 38, 32, 20, 25],
              borderColor: '#007bff',
              borderWidth: 1,
              backgroundColor: gradient
            }]
          },
          options: {
            maintainAspectRatio: false,
            legend: {
              display: false,
                labels: {
                  display: false
                }
            },
            scales: {
              yAxes: [{
                display: false,
                ticks: {
                  beginAtZero:true,
                  fontSize: 10,
                  max: 80
                }
              }],
              xAxes: [{
                ticks: {
                  beginAtZero:true,
                  fontSize: 11,
                  fontFamily: 'Arial'
                }
              }]
            }
          }
        });

      });
    </script>
  </body>
</html>
