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
                <form enctype="multipart/form-data" action="/lead/update/{{$data->id}}">
                    <div style="margin-top:10px">
                        <label>Lead Name</label>
                        <input type="name" class="form-control" value="{{$data->name}}" name="name" placeholder="Enter Lead Name">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div style="margin-top:10px">
                        <label>Description</label>
                        <input type="description" class="form-control" value="{{$data->description}}"name="description" placeholder="Description">
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col-lg-6">
                            <label>Categary Name</label>
                            <select class="form-control"  name="category_id">
                                @foreach($category as $value)
                                    <option value="{{$value->id}}" {{$value->id == $data->category_id ? 'selected="selected"' : ''}} >{{$value->name}}</option>          
                                @endforeach                                             
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Customer Name</label>
                            <select class="form-control"  name="customer_id">
                                @foreach($customer as $value)
                                    <option value="{{$value->id}}" {{$value->id == $data->customer_id ? 'selected="selected"' : ''}} >{{$value->name}}</option>                      
                                @endforeach                                             
                            </select>
                        </div>
                    </div>
                    <div class="row " style="margin-top:10px">
                        <div class="col-lg-6">
                            <label>Start Date</label>
                            <input class="form-control"value="{{$data->start}}" type="date" name="start">
                            <span class="text-danger">{{ $errors->first('start') }}</span>
                        </div>
                        <div class="col-lg-6">
                            <label>End Date</label>
                            <input class="form-control"value="{{$data->end}}" type="date" name="end">
                            <span class="text-danger">{{ $errors->first('end') }}</span>
                        </div>
                    </div>                   
                    <div class="col-lg-8"style="display:flex;margin-top:20px;margin-left:130px;">
                        <button type="submit" value="Submit" name="submit" class="btn btn-primary col-lg-6 form-control">Submit</button>
                        <a href="/lead/index" class="col-lg-6 form-control btn btn-danger" style="margin-left:15px">Back</a>
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