<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Project</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height:500px;
        padding-top:100px;
    }
    img.slider-img{
            height:400px !important;
    }
    .custom-product{
        height:600px;
    }
    .slider-text{
        background-color: #24465454 !important;
    }
    .trending-img{
        height:100px;
    }
    .trending-item{
        float:left;
        width:20%;
    }
    .trending-wrapper{
        margin:20px;  
    }
    .detail-img{
        height:200px;
    }
    .search-box{
        width:500px !important;
    }
    .cart-list-divider{
        border-bottom:1px solid #ccc;
        margin-botton:20px;
        padding-bottom:20px;
    }
</style>
</html>