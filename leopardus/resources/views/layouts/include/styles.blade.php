<!-- BEGIN: Vendor CSS-->

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/apexcharts.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/tether-theme-arrows.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/tether.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/shepherd-theme-default.css')}}">

@stack('vendor_css')

<!-- END: Vendor CSS-->



<!-- BEGIN: Theme CSS-->

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/dark-layout.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/semi-dark-layout.css')}}">

@stack('theme_css')



<!-- BEGIN: Page CSS-->

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/dashboard-analytics.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/card-analytics.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/tour/tour.css')}}">

@stack('page_css')

<!-- END: Page CSS-->



<!-- BEGIN: Custom CSS-->

<link rel="stylesheet" type="text/css" href="{{('assets/css/style.css')}}">

<style>

    .body-color, .menu-color, .main-menu.menu-light .navigation > li.open > a, .header-color, .dropdown .dropdown-menu::before{
        background: #001443 !important;
    }

    .nav-item.hover .nav-link{
        background: #144e97;
        margin-left: -15px;
        border-radius: 0px 25px 25px 0px;
    }

    .bg-blue-dark{
        background: #001c5f;
    }

    .bg-blue-dark-2{
        background: #144E97;
    }

    .bg-transparent{ 
        background: transparent !important;
    }

    .card .card-footer-alt{
        border: 0px !important;
    }

    .rounded{
        border-radius: 50% !important;
        height: 115px;
        width: 140px;
    }

    .font-icons-alt{
        font-size: 2.5rem !important;
    }

    .header-navbar .navbar-container ul.nav li.dropdown-user .dropdown-menu-right .dropdown-item:hover{
        background: #144e97;
        border-radius: 0px 25px 25px 0px;
    }

    .text-blue-light{
        color: #5CBDEB;
    }

    .avatar-content-alt{
        height: 50px !important;
        width: 50px !important;
    }

    .avatar-content-alt2{
        height: 30px !important;
        width: 30px !important;
    }

    #diseng {

        border-radius: 50%;

        height: 120px;

        width: 120px;

        background-repeat: no-repeat !important;

        background-size: contain !important;

        background-position: center center !important;

        margin: 0 auto;

        border: 1px solid #00646d;

    }



    .bg-orange-alt {

        background: #00646d;

        border-color: #00646d;

    }



    .bg-orange-alt-2 {

        background: rgba(207, 96, 70, 0.5)

    }



    .bg-blue-alt-2 {

        background: rgba(62, 135, 175, 0.5)

    }



    .text-alt-blue {

        color: #3e87af;

    }



    .text-alt-orange {

        color: #00646d;

    }



    .custom-control-input:checked~.custom-control-label::before {

        border-color: #00646d;

        background-color: #00646d;

    }

</style>

@stack('custom_css')

<!-- END: Custom CSS-->