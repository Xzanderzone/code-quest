<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main>
        <div class="whiteBlock">
            <br>
            <h1>CONGRATULATIONS!</h1><br>
            <h2>You completed the CODEQUEST game.</h2><br><br>
            @auth
            <a href="/cv" class="pixel"><p class="matrix-text">See your CV</p></a>  
            @endauth
            <br>
            <a href="/" class="pixel"><p class="matrix-text">Go to the Homepage</p></a>
        </div>
    </main>
</body>
</html>