<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    <header>
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
            <a href="/story">back to story</a>
            @endauth
        </div>
    </header>
    <main class="cv">
        <div class="curriculum">
            Hamilton Johnson
        </div>
    </main>
</body>
</html>