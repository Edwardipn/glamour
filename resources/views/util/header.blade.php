<header class="main-header">
  <!--Navbar Bootstrap-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{asset('img/logo-blancas.png')}}" class="logo-nav" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{asset('home')}}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('pages')}}">PAGES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('albums')}}">ALBUMS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('galleries')}}">GALLERIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('blog')}}">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('contact')}}">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>