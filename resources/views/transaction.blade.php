<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

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
            <a href="index.html" class="az-logo"><span></span> azia</a>
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

    <div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
      <div class="container">
        <div class="az-content-left az-content-left-components">
          <div class="component-item">
            <label>Status</label>
            <nav class="nav flex-column">
              <a href="#" class="nav-link">APPROVED</a>
              <a href="#" class="nav-link">WAITING</a>
              <a href="#" class="nav-link">DECLINED</a>
              <a href="#" class="nav-link">ERROR</a>
            </nav>
            <label>Operation</label>
            <nav class="nav flex-column">
            <a href="#" class="nav-link">DIRECT</a>
              <a href="#" class="nav-link">REFUND</a>
              <a href="#" class="nav-link">3D</a>
              <a href="#" class="nav-link">3DAUTH</a>
              <a href="#" class="nav-link">STORED</a>
            </nav>
            <label>Payment Method</label>
            <nav class="nav flex-column">
            <a href="#" class="nav-link">CREDITCARD</a>
              <a href="#" class="nav-link">CUP</a>
              <a href="#" class="nav-link">IDEAL</a>
              <a href="#" class="nav-link">MISTERCASH</a>
              <a href="#" class="nav-link">STORED</a>
              <a href="#" class="nav-link">PAYTOCARD</a>
              <a href="#" class="nav-link">CEPBANK</a>
              <a href="#" class="nav-link">CITADEL</a>
            </nav>

         
          </div><!-- component-item -->

        </div><!-- az-content-left -->
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">
          
   
          <div class="az-content-label mg-b-5">Transaction Date</div>
          <p class="mg-b-20">Please select the date range you want to see for the transaction.  ( Pagination works above 50 records )

         
         
          </p>
          <form action="{{route('transactionForm')}}" method="POST">
          <input type="hidden" value="1" name="prevPage">
          <input type="hidden" value="1" name="nextPage">
          <input type="hidden" value="1" name="curPage">
            {{csrf_field()}}
        <div class="row row-sm">
            
                <div class="col-lg-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                        Start Date:
                        </div>
                      </div>
                      <input name="startDate" id="dateMaskstart" type="text" class="form-control" value="{{old('startDate')}}" placeholder="YYYY-MM-DD">
                    </div><!-- input-group -->
                  </div><!-- col-4 -->

                  <div class="col-lg-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                        End Date:
                        </div>
                      </div>
                      <input name="endDate" id="dateMaskend" type="text" class="form-control" value="{{old('endDate')}}" placeholder="YYYY-MM-DD">
                    </div><!-- input-group -->
                  </div><!-- col-4 -->


                  
                      <div class="col-lg-3">
                        <select name="STATUS" class="form-control select2-no-search">
                          <option label="ALL STATUS"></option>
                          <option value="APPROVED">APPROVED</option>
                          <option value="WAITING">WAITING</option>
                          <option value="DECLINED">DECLINED</option>
                          <option value="ERROR">ERROR</option>
                        
                        </select>
                      </div><!-- col-4 -->
  
          
            
           <div class="col-sm-6 col-md-3"><button class="btn btn-az-primary btn-block">Search</button></div>
          </div><!-- row  {{ session('authorization') }} -->
          </form>
          <hr class="mg-y-30">
            
         

        @if($errors->any())
         
        @foreach($errors->all() as $err)
          

           <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <strong>TRANSACTION !</strong>  {{$err}}
          </div>


        @endforeach
        @endif






      

         



          <div class="ht-40"></div>


          <div class="az-footer mg-t-auto">
            <div class="container">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Demo <a href="#" target="_blank">Uğur Tosun</a> uqurtosun@gmail.com</span>
            </div><!-- container -->
          </div><!-- az-footer -->
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->


    <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/lib/ionicons/ionicons.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
    <script src="{{asset('assets/lib/spectrum-colorpicker/spectrum.js')}}"></script>
    <script src="{{asset('assets/lib/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/lib/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <script src="{{asset('assets/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <script src="{{asset('assets/lib/pickerjs/picker.min.js')}}"></script>
  

    <script src="{{asset('assets/js/azia.js')}}"></script>
    <script>
      // Additional code for adding placeholder in search box of select2
      (function($) {
        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
          searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

          // invoke parent method
          var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

          this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

          return $rendered;
        };

      })(window.jQuery);
    </script>
    <script>
      $(function(){
        'use strict'

        // Toggle Switches
        $('.az-toggle').on('click', function(){
          $(this).toggleClass('on');
        })

        // Input Masks
        $('#dateMaskend').mask('9999-99-99');
        $('#dateMaskstart').mask('9999-99-99');
        $('#phoneMask').mask('(999) 999-9999');
        $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
        $('#ssnMask').mask('999-99-9999');

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });

        // AmazeUI Datetimepicker
        $('#datetimepicker').datetimepicker({
          format: 'yyyy-mm-dd',
          autoclose: true
        });

        // jQuery Simple DateTimePicker
        $('#datetimepicker2').appendDtpicker({
          closeOnSelected: true,
          onInit: function(handler) {
            var picker = handler.getPicker();
            $(picker).addClass('az-datetimepicker');
          }
        });

        new Picker(document.querySelector('#datetimepicker3'), {
          headers: true,
          format: 'MMMM DD, YYYY HH:mm',
          text: {
            title: 'Pick a Date and Time',
            year: 'Year',
            month: 'Month',
            day: 'Day',
            hour: 'Hour',
            minute: 'Minute'
          },
        });


        $(document).ready(function(){
          $('.select2').select2({
            placeholder: 'Choose one',
            searchInputPlaceholder: 'Search'
          });

          $('.select2-no-search').select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Choose one'
          });
        });

        $('.rangeslider1').ionRangeSlider();

        $('.rangeslider2').ionRangeSlider({
            min: 100,
            max: 1000,
            from: 550
        });

        $('.rangeslider3').ionRangeSlider({
            type: 'double',
            grid: true,
            min: 0,
            max: 1000,
            from: 200,
            to: 800,
            prefix: '$'
        });

        $('.rangeslider4').ionRangeSlider({
            type: 'double',
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500,
            step: 250
        });

      });
    </script>
  </body>
</html>
