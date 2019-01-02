    <!-- Navbar-->
    <div class="navbar">
      <div class="brand"><a><img alt="logo" src="{{ asset('img/logo.png')}}"></a></div>

      @if(Route::current()->getName() != 'home')
      <div class="menu">
        <a href="{{url('tips/spain')}}" class="btn"> Go back</a>
      </div>
      @endif
  
    </div>
    <div class="clearfix"></div>

