@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-3 p-5">
         <img src="/svg/Canvas22.jpg" style="height: 130px;" class="rounded-circle" />
      </div>
      <div class="col-sm-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline"><div><h2>{{$user->username}}</h2></div><div> <a href="/p/create" class="btn btn-sm btn-primary" >Add New Post</a></div></div>
        <div class="d-flex"><div class="pr-5"><strong>380</strong> posts</div>
        <div class="pr-5"><strong>71.2k</strong> followers</div>
        <div class="pr-5"><strong>311</strong> following</div></div>
        <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
        <div class="pt-1">{{$user->profile->description}}</div>
        <div><a href="#">{{$user->profile->url ?? 'N\A'}}</a></div>
        </div> 

    </div>
    <div class="row pt-5">
      <div class="col-sm-4"><img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" class="w-100"/></div>
      <div class="col-sm-4"><img src="https://images.unsplash.com/photo-1457305237443-44c3d5a30b89?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=753&q=80" class="w-100"/></div>
      <div class="col-sm-4"><img src="https://images.unsplash.com/photo-1612831200091-c08595b18e6b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="w-100"/></div>
    </div>
</div>
@endsection
