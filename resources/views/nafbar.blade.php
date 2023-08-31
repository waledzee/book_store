 <!-- Navbar Start -->

 <html>
  <head>
    <title>@yield('title')</title>
  </head>
  <body>


 <div class="container-fluid bg-light position-relative shadow">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href=""
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 50px"
        >
          <i class="flaticon-043-teddy-bear"></i>
          <span class="text-primary">StudyKid</span>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
            <a href="{{route('class')}}" class="nav-item nav-link">Classes</a>
            <a href="{{route('teachers')}}" class="nav-item nav-link">Teachers</a>
            <a href="{{route('gallery')}}" class="nav-item nav-link">Gallery</a>
       
            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
          @auth
          </div>
          <a href="" class="btn btn-primary px-4">Join Class</a>
        </div>
        @endauth
        
        @if (Auth::guest())
        </div>
          <a href="{{route('login')}}" class="btn btn-primary px-4">login</a>
        </div>
        @endif
      </nav>
    </div>
    <!-- Navbar End -->
    </body>
 </html>