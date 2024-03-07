<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Categary index</title>
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
                    	<a class="col-lg-2  btn btn-primary" href="/category/create" type="button">Add Category </a>
                	</div>
                    <table class="col-lg-12 table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th class="col-lg-1">SR</th>
                                <th class="col-lg-2">Name</th>
                                <th class="col-lg-6">Description</th>
                                <th class="col-lg-1">Status</th>
                                <th class="col-lg-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                                <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{!!$value->description!!}</td>
                                    <td><button type="button"  class="col-lg-10 form-control btn {{$value->status == 1 ? 'btn-sm btn-primary' : 'btn-sm btn-danger'}}"> {{$value->status == 1 ? 'Active' : 'In-active'}}</button></td>
                                    <td>
                                        <a href="/category/edit/{{$value->id}}"class="btn btn-success ">Edit</a>
                                        <a href="/category/delete/{{$value->id}}"onclick="return confirm('{{ __('Are you sure you want to delete?') }}')" class="btn btn-danger ">Delete</a>
                                        <a href="/category/status/{{$value->id}}" class="btn btn-default" style="width:70px">{{$value->status == 0 ? 'Active' : 'In-active'}}</a>
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