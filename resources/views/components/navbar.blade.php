<nav class="navbar navbar-expand-lg navbar-dark bg--accent">
  <div class="container">
      <a class="navbar-brand text-decoration-none font-weight-bold" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse py-1" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link nav--link" href="#">Chi siamo <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nav--link" href="#">I nostri piani <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link  nav--link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link btn btn--secondary px-3" href="{{ route('register') }}">Registrati</a>
                  </li>
              @endif
              @else
                  @if (Auth::user() && Auth::user()->isAdmin())
                  <li class="nav-item">
                    <a class="nav-link btn btn--secondary px-3 font-weight-bold" href="{{ route('quotation.admin') }}">Admin</a>
                  </li>
                  @endif
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
            </div>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>