<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Eap | @yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/admin_ui/favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/admin_ui/favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/admin_ui/favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/admin_ui/favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/admin_ui/favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/admin_ui/favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/admin_ui/favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/admin_ui/favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/admin_ui/favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/admin_ui/favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/admin_ui/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/admin_ui/favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/admin_ui/favicon/favicon-16x16.png')}}">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


        <link href="{{ asset('/admin_ui/assets/global/plugins/font-awesome/css/all.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/admin_ui/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin_ui/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin_ui/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin_ui/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin_ui/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin_ui/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin_ui/assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin_ui/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin_ui/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin_ui/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />

<link href="{{ asset('/admin_ui/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin_ui/assets/layouts/layout4/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admin_ui/assets/layouts/layout4/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
<link href="{{ asset('/admin_ui/assets/layouts/layout4/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

        <style type="text/css">
            .alerts-list{
                list-style: none;
            }
            .sweet-alert {
                z-index: 1000000000;
                border: solid 3px #42a1d5;
            }
        </style>
        @yield('styles')
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('/admin_ui/logo1.png')}}" style="margin: 4px !important;" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide"> </li>
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> {{ Auth::user()->name }} </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                        @if (is_file('admin_ui/'.Auth::id().'.png'))
                                             <img src="{{ asset('/admin_ui/'.Auth::id().'.png')}}" class="img-responsive" alt="No Image"> 
                                        @else
                                             <img src="{{ asset('/admin_ui/Admin.png')}}" class="img-responsive" alt="No Image"> 
                                        @endif

                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="{{ url('profile',Auth::user()->name) }}">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                  </form>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        @include('admin_layouts.menu')
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>@yield('header')
                                <small>@yield('head_description')</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="{{ url('/adminpanel') }}">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">@yield('breadcrumb')</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    @yield('content')
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2019 &copy; Designed By
                <a target="_blank" href="https://www.linkedin.com/in/alaa-ragab-606a07b7/">Eng Alaa Ragab</a> &nbsp;|&nbsp;
                <a href="{{ url('/') }}">EAP!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <div class="quick-nav-overlay"></div>
<script src="{{ asset('/admin_ui/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
 <script src="{{ asset('/admin_ui/assets/layouts/layout4/scripts/application.js')}}" type="text/javascript"></script>
 <script src="{{ asset('/admin_ui/assets/layouts/layout4/scripts/bootbox.js')}}" type="text/javascript"></script>
 <script src="{{ asset('/admin_ui/assets/layouts/layout4/scripts/forms.js')}}" type="text/javascript"></script>
 <script src="{{ asset('/admin_ui/assets/layouts/layout4/scripts/validator.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>

<script src="{{ asset('/admin_ui/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
  
<script src="{{ asset('/admin_ui/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
 <script src="{{ asset('/admin_ui/assets/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('/admin_ui/assets/pages/scripts/ui-sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/pages/scripts/table-datatables-colreorder.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/layouts/layout4/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/layouts/layout4/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin_ui/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function()
    {
        $('body').on('click', '.image', function () {
            var dialog = bootbox.dialog({
                message: '<img style="height:500px; width:100%" src="' + $(this).attr('src') + '"/>',
                buttons: {
                    cancel: {
                        label: "Close",
                        className: 'text-right btn-primary'
                    }
                }
            });
        });

            function populateForm(response, frm) {
            var i;
            for (i in response) {
                if (i in frm.elements)
                    frm.elements[i].value = response[i];
            }
        }

            
      $(document.body).validator().on('click', '.edit', function() {
       var self = $(this);
       self.button('loading');
       $.ajax({
          url: "{{ url($modal) }}" + "/" + self.data('id') + "/edit" ,
          type: "GET",
          success: function(res){
              self.button('reset');
              $data = JSON.parse(res.data);
              populateForm($data, document.getElementsByClassName("editForm")[0] );
              $('#editModal form').attr("data-id", self.data('id') );
              $('#editModal').modal('show');
          },
          error: function(){
              self.button('reset');
              $('.alerts-list').append(
               '<li>\
               <div class="alert alert-danger alert-dismissable">\
               <i class="icon-remove-sign"></i> <strong>Opps!</strong>حدث خطأ.\
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\
               </div>\
               </li>');
          }
      });
   });

         $('#clickmewow').click(function(){
            $('#radio1003').attr('checked', 'checked');
        });

        $('.closeModal').click(function(){
            $('.modal').modal('hide');
        });
    })
</script>
@yield('scripts')
    </body>

</html>