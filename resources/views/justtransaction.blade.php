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
    <link href="{{secure_asset('assets/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/lib/pickerjs/picker.min.css')}}" rel="stylesheet">


    <link href="{{secure_asset('assets/lib/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
    <!-- azia CSS -->
    <link rel="stylesheet" href="{{secure_asset('assets/css/azia.css')}}">

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
            <a href="{{ URL::route('admin')}}" class="az-logo"><span></span> Dashboard</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->

        </div><!-- az-header-menu -->
        <div class="az-header-right">
         
        
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="{{secure_asset('assets/img/faces/face1.jpg')}}" alt=""></a>
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
              <img src="{{secure_asset('assets/img/faces/face10.jpg')}}" alt="">
            </div><!-- az-img-user -->
            <div class="d-flex justify-content-between mg-b-20">
              <div>
                <h5 class="az-profile-name">{{ $billingFirstName}} {{ $billingLastName}} </h5>
                <p class="az-profile-name-text">E-mail: {{ $email}}</p>
                <p class="az-profile-name-text">ID: {{ $id}}</p>
                <p class="az-profile-name-text">Amount: {{ $originalAmount}}</p>
                <p class="az-profile-name-text">Currency: {{ $originalCurrency}}</p>

          
              </div>

            </div>


            <hr class="mg-y-30">


          </div><!-- az-profile-overview -->

        </div><!-- az-content-left -->


          <div class="az-profile-body" style=" width: 60%; ">


            <div class="row">
  
              <div class="col-md-6 col-xl-6 mg-t-40 mg-md-t-0">
                <div class="az-content-label tx-13 mg-b-25">Transaction Information</div>
                <div class="az-profile-contact-list">
                  
                
                <div class="media">
                    <div class="media-body">
                    <span style=" color: #5b47fb; font-weight: 600; "> Reference No</span>
                      <div>{{ $referenceNo}}</div>
                    </div><!-- media-body -->
                  </div><!-- media -->
               
                  
               
                  <div class="media">
                     <div class="media-body">
                     <span style=" color: #5b47fb; font-weight: 600; ">Merchant Id</span>
                      <div>{{ $merchantId}}</div>
                    </div><!-- media-body -->
                </div><!-- media -->

           <div class="media">
                   <div class="media-body">
                   <span style=" color: #5b47fb; font-weight: 600; ">Status</span>
                      <div>{{ $status}}</div>
                </div><!-- media-body -->
            </div><!-- media -->


            <div class="media">
                    <div class="media-body">
                    <span style=" color: #5b47fb; font-weight: 600; "> Operation</span>
                      <div>{{ $operation}}</div>
                    </div><!-- media-body -->
                  </div><!-- media -->

                </div><!-- az-profile-contact-list -->
              </div><!-- col -->


              <div class="col-md-6 col-xl-6 mg-t-40 mg-md-t-0">
                <div class="az-content-label tx-13 mg-b-25">&nbsp</div>
                <div class="az-profile-contact-list">
                  
                
                <div class="media">
                    <div class="media-body">
                    <span style=" color: #5b47fb; font-weight: 600; "> FX Transaction Id</span>
                      <div>{{ $fxTransactionId}}</div>
                    </div><!-- media-body -->
                  </div><!-- media -->
               
                  
               
                  <div class="media">
                     <div class="media-body">
                     <span style=" color: #5b47fb; font-weight: 600; ">Code</span>
                      <div>{{ $code}}</div>
                    </div><!-- media-body -->
                </div><!-- media -->

           <div class="media">
                   <div class="media-body">
                   <span style=" color: #5b47fb; font-weight: 600; ">Message</span>
                      <div>{{ $message}}</div>
                </div><!-- media-body -->
            </div><!-- media -->


            <div class="media">
                    <div class="media-body">
                    <span style=" color: #5b47fb; font-weight: 600; "> Acquirer Transaction Id</span>
                      <div>{{ $acquirerTransactionId}}</div>
                    </div><!-- media-body -->
                  </div><!-- media -->

                </div><!-- az-profile-contact-list -->
              </div><!-- col -->


            </div><!-- row -->

            <div class="mg-b-20"></div>


    <div class="row">
      <div class="col-12">

        <div class="az-content-label tx-13 mg-b-25">Address</div>
            <div class="az-profile-work-list">
            <div class="row">
            <div class="col-6">
                    <div class="media">
                        <div class="media-logo bg-success"></div>
                        <div class="media-body">
                        <h6>Billing Address </h6>
                        <span>City : {{$billingCity}}  </span>
                        <p>{{$billingCity}}</p>
                        </div><!-- media-body -->
                    </div></div><!-- media -->

                    <div class="col-6">
                    <div class="media">
                        <div class="media-logo bg-primary"></div>
                        <div class="media-body">
                        <h6>Shipping Address</h6>
                        <span>City :  {{$billingCity}}  </span>
                        <p>{{$billingCity}}</p>
                        </div><!-- media-body -->
                    </div></div><!-- media -->
                    </div>

                    </div><!-- az-profile-work-list -->
                </div><!-- col -->
    </div>



          </div><!-- az-profile-body -->
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->

    <div class="az-footer pd-b-10">
      <div class="container">
        <span>&copy; 2021 Azia Responsive Bootstrap 5 Dashboard Template</span>
      </div><!-- container -->
    </div><!-- az-footer -->


    <script src="{{secure_asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{secure_asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{secure_asset('assets/lib/ionicons/ionicons.js')}}"></script>
    <script src="{{secure_asset('assets/lib/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{secure_asset('assets/js/azia.js')}}"></script>
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
