<!-- - var navbarShadow = true-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Aug 2018 23:58:10 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Science In Virtual Reality Environment</title>
  <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/unslider.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/meteocons/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/morris.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.min.css')}}">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/timeline.min.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">



@include('inc.head_navbar')


  @include('inc.side_navbar')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">

      </div>
      <div class="content-body">
         @yield('content')
      </div>
    </div>
  </div>




  @include('inc.footer')



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- BEGIN VENDOR JS-->
  <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
  <script src="{{asset('app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('app-assets/vendors/js/extensions/unslider-min.js')}}" type="text/javascript"></script>
  <script src="{{asset('app-assets/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{asset('app-assets/js/core/app-menu.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('app-assets/js/core/app.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('app-assets/js/scripts/customizer.min.js')}}" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->


  <script type="text/javascript">
          //Insert Ajax


          $(document).ready(function(){
        $("#test").mouseenter(function(){
            alert("You entered p1!");
        });

    });






</script>






    <script type="text/javascript">
            //Insert Ajax


           $(document).ready(function(){
            $('#test').click(function(){

              alert("You entered p1!");
            });
          });
            $('#insert').click(function(){
                     $.ajax({
                          type:'post',
                          url:'store_student'
                          data:{
                            '_token':$('input[name=_token]').val(),
                            'email':$('input[name=email').val(),
                            'password':$('input[name=password').val(),
                            'student_id':$('input[name=student_id').val(),
                            'idfirst':$('input[name=idfirst').val(),
                            'idsecond':$('input[name=idsecond').val(),
                            'idthird':$('input[name=idthird').val(),
                            'fname':$('input[name=fname').val(),
                            'mname':$('input[name=mname').val(),
                            'lname':$('input[name=lname').val()
                          },
                          success:function(data)
                          {

                            if ((data.errors)) {

                            }



                            $('.error').remove();
                            $('#table').append("<tr class='post" + data.student_id + "'>"+
                            "<td>" + data.student_id + "</td>"+
                            "<td>" + data.lname+", "+ data.fname+" "+ data.mname + "</td>"+
                            "<td>" + data.email + "</td>"+
                            "<td>" + data.created_at + "</td>"+
                            "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.student_id + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-title='" + data.title + "' data-body='" + data.body + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                            "</tr>");
                          },

                     });



            });





    </script>




</body>
</html>
