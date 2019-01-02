


@extends('layouts.app')

@section('content')

<div class="addcategory">
<form action="{{route('addmatch')}}" method="POST">
   @csrf
   
   Home:<br><br><br>
   Home team:<br>
  <input type="text" name="hometeam" >
  <br>
  Home possesion:<br>
  <input list="browsers" name="homeposession">
    <datalist id="browsers">
      <option value="big">
      <option value="small">
      <option value="medium">
</datalist>

  <br>
  Home percent:<br>
  <input type="text" name="homepercent" >
  <br>
  Home rank:<br>
  <input type="text" name="homerank" >
  <br>
  Home points:<br>
  <input type="text" name="homepoints" >
  <br>
  Home attack:<br>
  <input list="browsers" name="homeattack">
    <datalist id="browsers">
      <option value="big">
      <option value="small">
      <option value="medium">
</datalist>
<br>
  Home defence:<br>
  <input list="browsers" name="homedefence">
    <datalist id="browsers">
      <option value="big">
      <option value="small">
      <option value="medium">
</datalist>
<br>
  Home lastgames:<br>
  <input type="text" name="homelastgames" >
  <br>
  Home goals per game:<br>
  <input type="text" name="homegoals" >
  <br>
  avg possesion:<br>
  <input type="text" name="homeAvgPossesion" >
  <br>
  home pass accuracy:<br>
  <input type="text" name="homePassAccuracy" >
  <br><br> <br> <br>

  


  Away:<br><br><br>
  Away team:<br>
  <input type="text" name="awayteam" >
  <br>
  Away possesion:<br>
  <input list="browsers" name="awayposession">
    <datalist id="browsers">
      <option value="big">
      <option value="small">
      <option value="medium">
</datalist>
<br>
  away percent:<br>
  <input type="text" name="awaypercent" >
  <br>
  
  Away rank:<br>
  <input type="text" name="awayrank" >
  <br>
  Away points:<br>
  <input type="text" name="awaypoints" >
  <br>
  Away attack:<br>
  <input list="browsers" name="awayattack">
    <datalist id="browsers">
      <option value="big">
      <option value="small">
      <option value="medium">
</datalist>
<br>
  Away defence:<br>
  <input list="browsers" name="awaydefence">
    <datalist id="browsers">
      <option value="big">
      <option value="small">
      <option value="medium">
</datalist>
<br>
  Away lastgames:<br>
  <input type="text" name="awaylastgames" >
  <br>
  Away goals per game:<br>
  <input type="text" name="awaygoals" >
  <br>
  Away avg possesion:<br>
  <input type="text" name="awayAvgPossesion" >
  <br>
  Away pass accuracy:<br>
  <input type="text" name="awayPassAccuracy" >
  <br><br> <br> <br>
  General tips:<br>
  <input type="text" name="generaltips" >
  <br>
  Catgorie:<br>
  <input list="category" name="category">
    <datalist id="category">
      <option value="Liga BBVA">
      <option value="Ligue1">
      <option value="Erdvesie">
      <option value="Premier League">

</datalist>
<br>
  risk:<br>
  <input list="risk" name="risk">
    <datalist id="risk">
      <option value="high">
      <option value="medium">
      <option value="low">
     

</datalist>
<br>

  <input type="submit" value="Submit">
  
</form>
</div>
@endsection
