<header>
    {{-- the logo can be the 'go to the landingpage / logout' button --}}
    <div id="logo"> 
        LOGO
    </div>
    <div id="title">
        <a href="/" title="Go back to the landing page">A WEB DEV JOURNEY</a>
    </div>
    <div id="cv-emblem">
        @auth
        <a href="/cv">CV</a>
        @endauth
    </div>
</header>