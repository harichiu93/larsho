<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{url('public/img/icon.png')}}"/>
    <title>{{$title or 'Thành viên'}}</title>

    <!-- Global stylesheets -->
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">--}}
    <link href="{{url('/public/user/css/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/public/user/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/public/user/css/core.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/public/user/css/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/public/user/css/colors.css')}}" rel="stylesheet" type="text/css">
{{--    <link rel="stylesheet" href="{{url('public/css/font-awesome.css')}}">--}}
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{url('/public/user/js/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/public/user/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/public/user/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/public/user/js/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript"
            src="{{url('/public/user/js/uniform.min.js')}}"></script>

{{--    <script type="text/javascript" src="{{url('/public/user/js/app.js')}}"></script>--}}
    <script type="text/javascript" src="{{url('/public/user/js/login.js')}}"></script>
    <script src="https://use.fontawesome.com/0badbae2f7.js"></script>
    <!-- /theme JS files -->

</head>