


<nav class="navbar navbar-expand-lg" style="background-color: #7469E8">
    <div class="container">
        <a class="navbar-brand fs-1" href="#"><img style="width:80px" src="{{ asset('images/mob-logo-removebg-preview.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active fs-5 text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link fs-5 text-white" href="{{ route('about') }}">About</a>
                <a class="nav-link fs-5 text-white" href="{{ route('project') }}">Projects</a>
                <a class="nav-link fs-5 text-white" href="{{ route('contact') }}">Contact</a>
                
            </div>
        </div>
    </div>
</nav>
