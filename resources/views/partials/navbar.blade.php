<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top nav-top-border">
  <div class="container">
    <a class="navbar-brand" href="@yield('index_link')">Mahir Shahrier</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="@yield('link_url_1')">@yield('link_name_1')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="@yield('link_url_2')">@yield('link_name_2')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="@yield('link_url_3')">@yield('link_name_3')</a>
        </li>      
      </ul>
    </div>  
  </div>
</nav>