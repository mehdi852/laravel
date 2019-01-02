@extends('main') 
@section('content')
     <!-- Header-->
     <div class="header hidden">
      <h1>Today match prediction</h1>
      <hr />
      <p>
        Predicto is a website that provides you with today football predictions and all the information you need to analyze the game<br> football predictions that hit 80% of the time.
      </p>
      <a href="{{url('/tips/spain')}}" class="btn">GET IN</a>
      <img class="arrow-down" src="./img/down-arrow.svg" alt="arrow" />
    </div>
    <!-- Section one  : Statistics-->
    <div class="stats hidden">
      <div class="left">
        <div class="progress green big">Ball Possesion</div>
        <div class="progress  orange medium">Attack</div>
        <div class="progress  red small">Defence</div>
      </div>
      <div class="right">
        <span>In depth Statistics</span>
        <p>
          We make sure that you get an idea about how the teams are doing lately  ,
           providing you with tons of pieces of information and statistics from experts, 
           We let you know everything about the two teams such as strengths and weaknesses,
            in addition to that each team playstyle and which one is better.
        </p>
      </div>
    </div>

    <!-- END -->

    <!-- Section two : Winrate -->
    
    <div class="winrate hidden">
      <span>Team winrate</span>
      <div class="circles">
        <div class="circle border-orange"><span>50% </span></div>
        <div class="circle middle-circle border-green">
          <span>90%</span> High
        </div>
        <div class="circle border-red"><span>30%</span>Low</div>
      </div>
      <div class="desc">
        <p>
          We use advanced methods to determine which team is favored to win by analyzing 3 past tournaments matches, corners, shots on targets and goals.in addition to our football prediction algorithm, we have a team of experts who make sure to let you know which games are high-risk and which is low , our football predictions is extremely accurate , get today matche prediction now .
        </p>
      </div>
    </div>

    <!-- Section 3 : 80% etc -->
    <div class="examples hidden">
      <div class="left">
           <table>
              <tr class="green">
                <td>Real madrid</td>
                <td>3-1</td>
                <td>Barcelona</td>
                <td>Won</td>
              </tr>
              <tr class="green">
                <td>Getafe</td>
                <td>0-0</td>
                <td>Genoa</td>
                <td>Won</td>
              </tr>
              <tr class="green">
                <td>Valencia</td>
                <td>2-1</td>
                <td>Eibar</td>
                <td>Won</td>
              </tr>
              <tr class="red">
                <td>Real madrid</td>
                <td>3-1</td>
                <td>Barcelona</td>
                <td>Won</td>
              </tr>
              
           </table>
      </div>
      <div class="right">
          <span>80% Tips win rate</span>
          <p>We hit more than 80% matches in the low-risk tier  and more than 70% in high-risk matches.get <a class="links" href="/tips.html">today match prediction</a></p>
      </div>
    </div>
@stop