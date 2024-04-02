<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>You decided to follow the {{$user->track}}, which will bring lots of new tools and frameworks to work on.<br>
            Are you ready to tackle this challenge and see if your memory has enough space to store all this new information?<br>
            Or are you going to need a clean reset?</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ Yeah!</p>
                <button id="animationButton" class="skipBtn">> Ready when you are!</button>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings") 
    </main>
</body>
</html>