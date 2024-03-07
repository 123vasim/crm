<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Create</title>
<link rel="stylesheet" href="https:fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script> 
</head>
@extends('layouts.master')
@section('content')
<body class="hold-transition skin-blue sidebar-mini">
    <nav class="content-wrapper">
        <div class="col-lg-10" style="margin-top:10px;margin-left:100px;">
            <div class="card card-primary"> 
                <form enctype="multipart/form-data" action="/category/update/{{$data->id}}">
                    <div>
                        <label>Name</label>
                        <input type="" name="name"value="{{$data->name}}" class="form-control" placeholder="Enter Your Name">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>                    
                    <div style="margin-top:10px">
                        <label>Description</label>
                        <textarea class="form-control"id="editor" name="description">{{$data->description}}</textarea>
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    </div>                   
                   
                    <div class="col-lg-8"style="display:flex;margin-top:15px;margin-left:130px;">
                        <button type="submit" value="Submit" name="submit" class="btn btn-primary col-lg-6 form-control">Submit</button>
                        <a href="/category/index" class="col-lg-6 form-control btn btn-danger" style="margin-left:15px">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </nav>
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('editor');</script>
</body>
@endsection
</html>