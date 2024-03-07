<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Create</title>
<link rel="stylesheet" href="https:fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
@extends('layouts.master')
@section('content')
<body class="hold-transition skin-blue sidebar-mini">
    <nav class="content-wrapper">
        <div class="col-lg-10" style="margin-top:10px;margin-left:100px;">
            <div class="card card-primary"> 
                <form enctype="multipart/form-data" action="/customer/store">
                    <div>
                        <label>Name</label>
                        <input type="" name="name" class="form-control" placeholder="Enter Your Name">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>                    
                    <div style="margin-top:15px">
                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Your E-mail">
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>                    
                    <div style="margin-top:15px">
                        <label>Mobile Number</label>
                        <input type="number" name="number" class="form-control" placeholder="Enter Your Number">
                        <span class="text-danger">{{ $errors->first('number') }}</span>
                    </div>                    
                    <div style="margin-top:15px">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="col-lg-8"style="display:flex;margin-top:15px;margin-left:130px;">
                        <button type="submit" value="Submit" name="submit" class="btn btn-primary col-lg-6 form-control">Submit</button>
                        <a href="/customer/index" class="col-lg-6 form-control btn btn-danger" style="margin-left:15px">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</body>
@endsection
</html>