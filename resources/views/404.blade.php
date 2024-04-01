<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            @csrf
                @if ($user->track_second === "Public Speaking")
                    <p>Your presentation went well, you were a very confident speaker and your skills didn't let you down too. The panel was impressed by your performance.</p>
                @elseif ($user->track_second === "Quick Learner")
                    <p>You felt a little nervous presenting your case, but your technical knowledge shone brighter than a thousand sons! The panel was very impressed with your skills.</p>
                @else
                    <p>Although you felt confident, the reception of your presentation was not how you expected. You came across as arrogant, and the panel was uncomfortable with the way you started your business case, downplaying your colleague's efforts.</p>
                @endif
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ </p>
                <a href="/next">> What's the outcome for me?</a>
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