<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Coding School16</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ml-auto mb-2 mb-lg-0">


          <li class="nav-item">
            <a class="nav-link {{ request()->path() === 'about' ? 'active' : ''}}" aria-current="page" href="/about">About</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link {{ request()->path() === 'services' ? 'active' : ''}}" href="/services">Services</a>
          </li>
          <li class="nav-item">
            <a class='nav-link' href="#">Contact</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>