<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('bibliotecas/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bibliotecas/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="{{ asset('css/sb-admin.min.css') }}">
    <style>
        .user-img{
            background:transparent url('{{asset('/storage/capa/capa.jpg')}}') no-repeat center center;
            height:200px;
            margin-top:-50px;
            position:relative;
            min-height: 200px; 
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
        .user-img:before{
            content: '';
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
        }
        .user-profile-img{
            margin-top:-50px;
            width: 150px;
            height: 130px;
            background-size: cover;
        }
        hr{ 
            height: 10px;
            border: 0;
            box-shadow: 0 10px 10px -10px #8c8b8b inset;
        }
        .box-card{
            background: #fff;
            border-radius: 2px;
            padding: 10px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            transition: all 0.3s cubic-bezier(.25,.8,.25,1);
            margin:10px;
        }
        .box-card:hover{
            cursor: pointer;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            
        }
        .box-card a{
            text-decoration:none; 
            color: green;
            border-bottom:2px solid green;
        }
        .input, .form-group select{
            outline: none;
            border: none;
            border-bottom: 2px solid green;
        }
        .input:focus, .form-group select:focus{
            box-shadow: 0 0 0 0;
            border-bottom: 2px solid green;
        }
        .inputup input[type="file"] {
           color:gray;
           border:none;
           border-bottom: 2px solid green;
        }
    </style>
    <title>Dashboard</title>
</head>
<body class="bg-light fixed-nav sticky-footer" id="page-top">
    @component('components.dsNavbar', ['current'=>$current])   
    
    @endcomponent
    <div class="content-wrapper" style="background: #F0F0F0;">
        <div class="container-fluid" >
            @yield('content')
            @component('components.dsFooter')
                
            @endcomponent
        </div>    
    </div>
    <script type="text/javascript" src="{{ asset('bibliotecas/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bibliotecas/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bibliotecas/jquery-easing/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sb-admin.min.js') }}"></script>
</body>
</html>