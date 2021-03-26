<header>
    <h1>
        {{ $pagename="" }} 
        {{ $pagename = request()->path() == '/' ? 'home' : request()->path() }} subgequdegding
        
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @if ($pagename == 'home')
                <li class="breadcrumb-item active" aria-current="page"><a href="/">Home</a></li>
            @endif
            @if ($pagename == 'services')
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="/services">Services</a></li>
            @endif     
          </ol>
      </nav>

</header>