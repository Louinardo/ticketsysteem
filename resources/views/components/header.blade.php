{{-- <div class="navbar">
    <div class="logo-container">
        <a href="#">
            <img src="/img/ticket-image.png" alt="company logo">
        </a>
    </div>
    <a href="#">Tickets</a>
</div> --}}


<nav class="navbar navbar-expand-lg text-bg-secondary p-3 h-20">
    <div class="container-fluid ">
        <a href="{{ route('home') }}" class="navbar-brand"><img src="/img/ticketsicon.png" alt="ticket"></a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end w-100 align-items-center font-weight-bold text-xl">
            <li><a href="{{ route('about-us') }}" class="nav-link color-red">Over ons</a></li>
            <li><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            @if (Auth::user())
                <li><a href="{{ route('add-ticket')}}" class="nav-link">Add tickets</a></li>
                <li><a href="{{ route('add-event')}}" class="nav-link">Add events</a></li>
                <form action="{{ route('logout')}}" method="post">
                    @csrf
                    <button class="nav-link" type="submit">Uitloggen</button>
                </form>
                
            @else
                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">Registreren</a></li>
            @endif
            
        </ul>
        
    </div>
</nav>

