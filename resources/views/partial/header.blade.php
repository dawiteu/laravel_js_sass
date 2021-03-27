<header>
    <h1>
        {{ $pagename="" }} 
        {{ $pagename = request()->path() == '/' ? 'home' : request()->path() }} subgequdegding
        
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="/">Home </a></li>
            @if ($pagename == 'home')
                <li class="breadcrumb-item active" aria-current="page"> Welcome </li>
            @endif
            @if ($pagename == 'services')
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            @endif     
            @if ($pagename == 'about')
                <li class="breadcrumb-item active" aria-current="page">About</li>
            @endif   
          </ol>
      </nav>

</header>