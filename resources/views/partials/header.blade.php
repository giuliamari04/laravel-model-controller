<header id="header">
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">MovieList</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav  ">
          <li class="nav-item">
            <a class="nav-link text-light" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('movies.index') }}">Movies</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
