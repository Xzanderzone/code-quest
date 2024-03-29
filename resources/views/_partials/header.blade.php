<header>
    {{-- the logo can be the 'go to the landingpage / logout' button --}}
    <div id="logo"> 
        <a href="/" title="Go back to the landing page">
        <img class="logoBlack" src="..\media\logo\Logo.svg" alt="Code Guest Logo">
        <img class="logoWhite" src="..\media\logo\Logo-white.svg" alt="Code Guest Logo Hover">
        </a>
    </div>
    <div id="title">
        <h1>
             A WEB DEV JOURNEY
        </h1>
    </div>
    <div id="cv-emblem">
        @auth
        <a href="/cv" class="pixel-borders">CV</a>
        @endauth
    </div>
</header>