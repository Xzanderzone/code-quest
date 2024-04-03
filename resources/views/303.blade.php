<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            @csrf
                @if ($user->feedback === "Openness to Feedback")
                    <p>You feel happy with your presentation and the feedback you got from your classmates.<br>
                    You already have a few interesting topics on your mind and can't wait to your next Tech Talk!
                    </p>
                @elseif ($user->feedback === "Adaptability")
                    <p>After trying a few filter settings on the beamer, it is finally showing the correct colors.<br><br>
                    Your colleagues look at you as if you were some kind of IT god. Everyone is impressed and happy. 
                    </p>
                @elseif ($user->feedback === "Accountability")
                    <p>- Don't worry, {{$user->name}}, we all make mistakes. And I could have been more clear about the Tech Talk rules. You did a good job presenting it anyway.<br><br>
                    You feel relieved and grateful for Persile understanding. You make a mental note about the Tech Talk rule and to put extra effort on your next presentation.
                    </p>
                @elseif ($user->tech_talk === "null" && $user->feedback === "null")
                    <p>- I understand your point, but rules are rules and they exist for a reason. I hope you can respect them in the future.<br><br>
                    The tech talk is ended in an awkward mood.
                    </p>
                @else
                    <p>You hear a few scattered claps but no one seems very genuine with that.<br>
                    You realise that your reaction to Ghibault's feedback had a negative effect on your colleagues, that now seemed afraid of sharing any input with you.
                    </p>
                @endif
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ </p>
                    <button class="skipBtn" id="hoverOnlyButton">> What's in it for me?</button>
            </div>
        </div>

            @if ($user->tech_talk === "null")
                <div class="text-balloon-line"><div class="actual-line"></div></div>
                @include("_partials.drawings") 
            @else
                <div class="basile"><img src="..\media\stickmen\Stickman-class.svg"></div>
                <div class="you"><img src="..\media\stickmen\{{ $user->character }}" alt=""></div>
            @endif

    </main>
</body>
</html>