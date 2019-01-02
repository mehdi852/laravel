@extends('main') 
@section('content')

<div class="addcategory">
<form action="{{route('addcategory')}}" method="POST">
   @csrf
   Category:<br>
  <input type="text" name="leaguename" >
  <br>
   Country:<br>
  <input type="text" name="country" >
  <input type="submit" value="Submit">
</form>
</div>
@stop