<nav class="navbar bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/')}}">
        <i class="bi bi-bus-front fs-2"></i>
      </a>
      @if (Auth::user())
      <a href="{{ url('dashboard') }}" class="btn shadow btn-dark">My Dashboard</a>
      @else
      <a href="{{ url('login') }}" class="btn shadow btn-dark">Log In</a>
      @endif
    </div>
  </nav>
