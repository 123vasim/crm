<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Edit</title>
<link rel="stylesheet" href="https:fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

</head>
@extends('layouts.master')
@section('content')
<body class="hold-transition skin-blue sidebar-mini">
                <form enctype="multipart/form-data"class="content-wrapper " action="/customer/update{{$data->id}}">
        <div class="col-lg-9" style="margin-top:30px;margin-left:150px;">
            <div class="card card-primary"> 
                    <div>
                        <label>Name</label>
                        <input type="" name="name" value="{{$data->name}}" class="form-control" placeholder="Enter Your Name">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>                    
                    <div style="margin-top:15px">
                        <label>E-mail</label>
                        <input type="text" name="email" value="{{$data->email}}"class="form-control" placeholder="Enter Your E-mail">
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>                    
                    <div style="margin-top:15px">
                        <label>Mobile Number</label>
                        <input type="number" name="number"value="{{$data->number}}" class="form-control" placeholder="Enter Your Number">
                        <span class="text-danger">{{ $errors->first('number') }}</span>
                    </div>                    
                    
                    <div class="col-lg-8"style="display:flex;margin-top:15px;margin-left:130px;">
                        <button type="submit" value="Submit" name="submit" class="btn btn-primary col-lg-6 form-control">Submit</button>
                        <a href="/customer/index" class="col-lg-6 form-control btn btn-danger" style="margin-left:15px">Back</a>
                    </div>
            </div>
        </div>
    </div>
</body>
@endsection
</html>