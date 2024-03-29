<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>You now feel confident about building beautiful websites! Seems like a good time for a cup of coffee, right?
            <br>You walk to the kitchen and on the way you hear crying noises coming from the bathroom.</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ Oh?</p>
                <a href="/next" id="animationButton">> Enter the bathroom</a>
            </div>
        </div>
 
        @if(!empty($user->character))
            <div class="you" id="userContainer">
                <img id="userImage" src="..\media\stickmen\{{ $user->character }}" alt="">
                @php
                $gifFilename = pathinfo($user->character, PATHINFO_FILENAME) . '.gif';
                @endphp
                <img class="gif" id="gifImage" src="..\media\animations\{{ $gifFilename }}" alt="" style="display: none;">
            </div>
        @endif
        <div class="basile"><img src="..\media\coffee.jpg"></div>
    </main>
</body>
</html>