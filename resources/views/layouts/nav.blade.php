<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link" href="/">Home</a>
           @if(!Auth::check())
          <a class="nav-link" href="/login">Sign-in</a>
           @endif
           @if(!Auth::check())
          <a class="nav-link" href="/register">Sign-up</a>
          @endif
          @if(Auth::check())
          <a class="nav-link" href="/logout">logout</a>
          @endif
          @if(Auth::check())
          <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
          @endif
          
        </nav>
      </div>
    </div>