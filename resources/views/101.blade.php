<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            You arrive at CodeQuest headquarters feeling a little nervous. The classroom is full of other students, and you are greeted by Persile. 
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class='matrix-text'>{{$user->name}}~ Woah i'm so lucky to be here! </p> <br>
                <button id="animationButton" class="skipBtn">> Cool !</button>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings") 
    </main>
</body>
</html>