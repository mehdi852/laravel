@extends('main') 
@section('content')
<a href="{{ url('/') }}">
        <div class="mobileBack">
         <img  alt="back" src="{{ asset('img/back.svg')}}">
        </div>
      </a>
<div class="tips">
        <div class="left">
          <ul>
            @foreach ($Categories as $cat)
            <li><img class="flag" alt="{{ $cat->country}}" src=" {{ asset('img/'. $cat->country .'.png') }} "><a href="/tips/{{$cat->country}}">{{$cat->name}}</a></li>
            @endforeach


          </ul>
        </div>
        <div class="right">
          <div class="tips-heading">
            Available Matches 
          </div>
          <div class="tips-List">
             <ul>
               @foreach ($Matches as $match)
               <li><a href="{{ url('tips/'.  str_replace(' ', '-', $match->hometeam).'/'. str_replace(' ', '-', $match->awayteam).'/'.$match->id) }}">{{ $match->hometeam}} <span class="dash">-</span> {{ $match->awayteam}} 
               
               <span class=" volume green">{{ $match->risk}} </span>

                          @if ($match->risk === 'high')
                          <span class=" volume red">{{ $match->risk}} </span>
                          
                          @elseif ($match->risk === 'medium')
                          <span class=" volume orange">{{ $match->risk}} </span>
                          @elseif ($match->risk === 'low')
                          <span class=" volume green">{{ $match->risk}} </span>
                          @endif
              </a></li>
                 @endforeach
               
             </ul>
          </div>
          <div class="notice">
                 <span>Notice</span> : matches are picked manually from experts.
           </div>
        </div>
    </div>
@stop