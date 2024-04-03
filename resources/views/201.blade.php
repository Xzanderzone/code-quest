<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>
            @csrf
            @if ($user->mastermind)
            You now feel confident about building beautiful websites! Seems like a good time for a cup of coffee, right?
            @else
            You definitely could use a break right now. Coffee seems like a good idea, right?
            @endif
            <br>You walk to the kitchen and on the way you hear crying noises coming from the bathroom.</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~    Oh?</p>
                <button id="hoverOnlyButton" class="skipBtn">>  Enter the bathroom</button>
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
        <div class="basile"><iframe src="https://giphy.com/embed/l0MYv5EjWCxRt7ONy" frameBorder="0"></iframe></div>
    </main>
</body>
</html>