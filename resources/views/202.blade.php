<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            <p>As you slowly open the room, you see someone sitting in the corner and crying.
            <br><br> - The coach asked me for my name and I stressed out so hard I said: “Bonasi”. That isn't even my name *WHEEEEW*</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~   What do you do?</p>
                <br>
                <form action="/toilet-choice" method="POST">
                    @csrf
                    <div class="options">
                        <input type="radio" name="toilet_choice" value="Initiative" id="option1"><label for="option1">a) I go explain the situation to the coach</label> 
                        <br>
                        <input type="radio" name="toilet_choice" value="Conflict Resolution" id="option2"><label for="option2">b) I support him to correct the situation</label>
                        <br>
                        <input type="radio" name="toilet_choice" value="null" id="option3"><label for="option3">c) hehehehe BONASI HAHAHAHAHAHA</label> 
                        <br>
                        <input type="radio" name="toilet_choice" value="null" id="option4"><label for="option4">d) I leave the bathroom and do nothing</label>
                    </div> 
                    <br>
                    <button id="animationButton">> That's what I do</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>

        <div class="basile"><img src="..\media\stickmen\Bonasi-crying.gif"></div>

        @if(!empty($user->character))
            <div class="you" id="userContainer">
                <img id="userImage" src="..\media\stickmen\{{ $user->character }}" alt="">
                @php
                $gifFilename = pathinfo($user->character, PATHINFO_FILENAME) . '.gif';
                @endphp
                <img class="gif" id="gifImage" src="..\media\animations\{{ $gifFilename }}" alt="" style="display: none;">
            </div>
        @endif

    </main>
</body>
</html>