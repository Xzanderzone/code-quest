<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>I am so proud of you! 🙌 Now, it's time to learn code.<br>
            In order to master code, one first needs to know how to solve a code.<br>
            For the next challenge, we'll see if you are truly a master mind!</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~    Yeah!</p>
                <button id="hoverOnlyButton" class="skipBtn">> Gimmi that code!</button>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings") 
    </main>
</body>
</html>