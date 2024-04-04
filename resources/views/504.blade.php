<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            @csrf
                @if ($user->celebration === "Comic Sans")
                    <p>You are having a great time with your colleagues, while drinking a Tatooine Sunset.<br>
                    You look around to all these faces - Ziggy and her kind heart, always seeing the better side of things, Peeta having the best time of his life sipping on a Team Rocket couple's cocktail - and you realise that these are not your colleagues anymore, they are your friends.<br>
                    </p>
                @elseif ($user->celebration === "CodeQuest")
                    <p>You look around the room and smile. 7 months pass by so quickly! You remember the first day you entered this room, nervous around all these unfamiliar faces.<br>
                    You see Louis across the room, mimicking his tale about how he could definitely wrestle a horse and win. What a great class! You feel lucky to have met these people and hopeful that the friendship will continue outside CodeQuest too.
                    </p>
                @elseif ($user->celebration === "Karaoke")
                    <p>You are watching Rust and Doodah giving a full-energy performance of Freestyler. While they rock-rock-rock the microphone, you realise how much you are going to miss your colleagues - no, not colleagues: your friends.<br>
                    You are the next on queue, prepare yourself to sing “My Heart Will Go On”!
                    </p>
                @endif
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ Your phone rings</p>
                <button id="hoverOnlyButton" class="skipBtn">> Pick up the call</button>
            </div>
        </div>

        @include("_partials.drawings")

    </main>
</body>
</html>