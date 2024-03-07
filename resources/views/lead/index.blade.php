<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lead index</title>
<link rel="stylesheet" href="https:fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

</head>
@extends('layouts.master')
@section('content')
<body class="hold-transition skin-blue sidebar-mini">
   	<form method="post" class="content-wrapper">
        <div class="col-lg-12" style="padding:20px;">
            <div class="card card-primary">                    
           	    <div class="card-body table-responsive ">
            	    <div class="d-flex">
            		    <div class="col-lg-10"></div>
                    	<a class="col-lg-2  btn btn-primary" href="/lead/create" type="button">Add Lead </a>
                	</div>
                    <table class="col-lg-12 table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>SR</th>
                                <th>Lead Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Customer</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                                <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{!!$value->description!!}</td>
                                    <td>{{$value->Category ? $value->Category->name : 'N/A'}}</td>
                                    <td>{{$value->Customer ? $value->Customer->name : 'N/A'}}</td>
                                    <td>{{$value->start}}</td>
                                    <td>{{$value->end}}</td>
                                    <td>
                                        <a href="/lead/edit/{{$value->id}}"class="btn btn-success ">Edit</a>
                                        <a href="/lead/delete/{{$value->id}}"onclick="return confirm('{{ __('Are you sure you want to delete?') }}')" class="btn btn-danger ">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</body>
@endsection
</html>