<header>
    {{-- the logo can be the 'go to the landingpage / logout' button --}}
    <div id="logo"> 
        <img src="..\media\logo\Logo.svg" alt="Code Guest Logo">
    </div>
    <div id="title">
        <h1>
            <a href="/" title="Go back to the landing page">A WEB DEV JOURNEY</a>
        </h1>
    </div>
    <div id="cv-emblem">
        @auth
        <a href="/cv" class="pixel-borders">CV</a>
        @endauth
    </div>
</header>