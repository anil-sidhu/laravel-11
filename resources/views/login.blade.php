@extends('layout')

@section('title','This is Login page')



@section('main')

<div class="main">
<h1>User Login</h1>
<form action="" method="post">
    <input type="text" placeholder="enter name">
    <br>
    <br>
    <input type="text" placeholder="enter password">
    <br>
    <br>
    <button type="button" class="btn btn-primary">Login</button>

</form>
</div>

@endsection