

      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>
                <ul class="nav navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/posts">Blog</a>
                  </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                     <!--<li class="nav-item" style="padding: 5px;color:black;"><a href="{{ route('login') }}">Login</a></li> -->
                     <li><a style="background-color:white;color:rgb(230, 201, 221);
                      width: 80px;
                      height: 40px;border-color:gray;font-family: calibri;text-align:center" class="btn btn-primary btn-lg" href="/login" role="button">Login</a></li>
                      
                     <!-- <li class="nav-item" style="padding: 5px;color:black"><a href="{{ route('register') }}">Register</a></li> -->
                      <li><a style="background-color:white;color:rgb(230, 201, 221);
                        width: 80px;
                        height: 40px;border-color:gray;font-family: calibri;text-align:center" class="btn btn-success btn-lg" href="/register" role="button">Register</a></li>
                  @else
                  <li class="dropdown nav-item">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();

                            
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                        
                    </div>
                </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
