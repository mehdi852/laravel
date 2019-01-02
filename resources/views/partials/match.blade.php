@extends('main') 
@section('content')
 <a href="{{ url('tips/spain') }}">
    <div class="mobileBack">
     <img  alt="back" src="{{ asset('img/back.svg')}}">
    </div>
  </a>

  <div class="wrapper">
      <!--home-->
      <div class="home">

                    @if ($Match->homepercent >= 60)
                    <div class="circle border-green"><span>{{ $Match->homepercent }}% </span></div>
                          @elseif ($Match->homepercent >= 40 && $Match->homepercent < 60   )
                          <div class="circle border-orange"><span>{{ $Match->homepercent }}% </span></div>
                          @elseif ($Match->homepercent <= 40)
                          <div class="circle border-red"><span>{{ $Match->homepercent }}% </span></div>
                          @endif

        <button class="btn-default">{{ $Match->hometeam }}</button>
        <div class="stats-page">

 
                          @if ($Match->homeposession === 'big')
                        <div class="progress green {{ $Match->homeposession }}  thin"> Possesion</div>                          
                          @elseif ($Match->homeposession === 'medium')
                          <div class="progress orange {{ $Match->homeposession }}  thin"> Possesion</div>                          
                          @elseif ($Match->homeposession=== 'small')
                          <div class="progress red {{ $Match->homeposession }}  thin"> Possesion</div>                          
                          @endif

                          @if ($Match->homeattack === 'big')
                          <div class="progress green {{ $Match->homeattack }} thin">Attack</div>                         
                          @elseif ($Match->homeattack === 'medium')
                          <div class="progress orange {{ $Match->homeattack }} thin">Attack</div>                         
                          @elseif ($Match->homeattack === 'small')
                          <div class="progress red {{ $Match->homeattack }} thin">Attack</div>                         
                          @endif

                          @if ($Match->homedefence === 'big')
                          <div class="progress green {{ $Match->homedefence }} thin">Defence</div>                         
                          @elseif ($Match->homedefence === 'medium')
                          <div class="progress orange {{ $Match->homedefence }} thin">Defence</div>                        
                          @elseif ($Match->homedefence=== 'small')
                          <div class="progress red {{ $Match->homedefence }} thin">Defence</div>                         
                          @endif

        </div>
        <div class="history">
          <span> Last 5 games </span>
          <ul>

                      @for ($i = 0; $i < 5; $i++)
                      @if ( $Match->homelastgames[$i] === 'W')
                      <li class="green">{{ $Match->homelastgames[$i] }}</li>
                       @elseif ($Match->homelastgames[$i] === 'D')
                       <li class="grey">{{ $Match->homelastgames[$i] }}</li>
                          @elseif ($Match->homelastgames[$i] === 'L')
                          <li class="red">{{ $Match->homelastgames[$i] }}</li>
                          @endif
                      @endfor
  
          </ul>
        </div>
        <div class="content">
          <div class="content-item">
            <span> Goals per game : </span> <span>{{ $Match->homegoals }}</span>
          </div>
          <div class="content-item">
            <span> Avg Possession: </span> <span>{{ $Match->homeAvgPossesion }}</span>
          </div>
          <div class="content-item">
            <span> Pass Accuracy: </span> <span>{{ $Match->homePassAccuracy }}</span>
          </div>
        </div>
      </div>
       <!--middle-->
      <div class="middle">
        <span class="league">{{ $Match->category }}</span>
        <div class="table">
            <table>
                <tr>
                  <th>{{ $Match->homerank }}</th>
                  <th>{{ $Match->hometeam }}</th>
                  <th>{{ $Match->homepoints }} Pts</th>
                </tr>
                <tr>
                    <th>{{ $Match->awayrank }}</th>
                    <th>{{ $Match->awayteam }}</th>
                    <th>{{ $Match->awaypoints }} Pts</th>
                  </tr>
              </table>
        </div>
        <span class="league">Tips</span>
        <div class="moreInfo">
            <ul>
              <li>{{ $Match->generaltips }}</li>
        
            </ul>
        </div>
        
      </div>

      <!--away-->
      <div class="home">

      @if ($Match->awaypercent >= 60)
                    <div class="circle border-green"><span>{{ $Match->awaypercent }}% </span></div>
                          @elseif ($Match->awaypercent >= 40 && $Match->awaypercent < 60   )
                          <div class="circle border-orange"><span>{{ $Match->awaypercent }}% </span></div>
                          @elseif ($Match->awaypercent <= 40)
                          <div class="circle border-red"><span>{{ $Match->awaypercent }}% </span></div>
                          @endif
                          

        <button class="btn-default">{{ $Match->awayteam }}</button>
        <div class="stats-page">

 
                          @if ($Match->awayposession === 'big')
                        <div class="progress green {{ $Match->awayposession }}  thin"> Possesion</div>                          
                          @elseif ($Match->awayposession === 'medium')
                          <div class="progress orange {{ $Match->awayposession }}  thin"> Possesion</div>                          
                          @elseif ($Match->awayposession=== 'small')
                          <div class="progress red {{ $Match->awayposession }}  thin"> Possesion</div>                          
                          @endif

                          @if ($Match->awayattack === 'big')
                          <div class="progress green {{ $Match->awayattack }} thin">Attack</div>                         
                          @elseif ($Match->awayattack === 'medium')
                          <div class="progress orange {{ $Match->awayattack }} thin">Attack</div>                         
                          @elseif ($Match->awayattack=== 'small')
                          <div class="progress red {{ $Match->awayattack }} thin">Attack</div>                         
                          @endif

                          @if ($Match->awaydefence === 'big')
                          <div class="progress green { $Match->awaydefence }} thin">Defence</div>                         
                          @elseif ($Match->awaydefence === 'medium')
                          <div class="progress orange {{ $Match->awaydefence }} thin">Defence</div>                        
                          @elseif ($Match->awaydefence === 'small')
                          <div class="progress red {{ $Match->awaydefence }} thin">Defence</div>                         
                          @endif

        </div>
        <div class="history">
          <span> Last 5 games </span>
          <ul>

                      @for ($i = 0; $i < 5; $i++)
                      @if ( $Match->awaylastgames[$i] === 'W')
                      <li class="green">{{ $Match->awaylastgames[$i] }}</li>
                       @elseif ($Match->awaylastgames[$i] === 'D')
                       <li class="grey">{{ $Match->awaylastgames[$i] }}</li>
                          @elseif ($Match->awaylastgames[$i] === 'L')
                          <li class="red">{{ $Match->awaylastgames[$i] }}</li>
                          @endif
                      @endfor
  
          </ul>
        </div>
        <div class="content">
          <div class="content-item">
            <span> Goals per game : </span> <span>{{ $Match->awaygoals }}</span>
          </div>
          <div class="content-item">
            <span> Avg Possession: </span> <span>{{ $Match->awayAvgPossesion }}</span>
          </div>
          <div class="content-item">
            <span> Pass Accuracy: </span> <span>{{ $Match->awayPassAccuracy }}</span>
          </div>
        </div>
      </div>
         <!-- Footer  -->
   
    </div>
    </div>
    @stop