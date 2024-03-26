@extends('layout')
@section('title' ,'form')
@section('content')
<h1>Hello</h1>
<form action="">
<div class="mb-3">
  <label for="name" class="form-label">Nickname</label>
  <input type="text" class="form-control" id="name" placeholder="name" name ="db_name">
</div>
<div class="mb-3">
  <label for="birthday" class="form-label">Birthday</label>
  <input type="date" class="form-control" id="birthday" placeholder="birthday" name ="db_birthday">
</div>
<div class="mb-3">
  <label for="ig" class="form-label">IG</label>
  <input type="text" class="form-control" id="ig" placeholder="ig" name ="db_ig">
</div>
<div class="mb-3">
  <label for="picture" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="picture" name="db_picture">
</div>
<button type="submit" class="btn btn-success">Submit</button>
@endsection
