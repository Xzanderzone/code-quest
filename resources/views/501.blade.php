<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>Your time at CodeQuest is almost over. It is a bittersweet feeling... You feel happy about your new programming skills and personal improvement, but also sad for leaving here, your everyday workplace on the past 7 months. You will miss your colleagues, the coffee breaks in the kitchen, the projects you did together, the jokes, laughs, the knowledge shared and the support on good and bad days.</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ Bwaaaah</p>
                <a href="/next" id="animationButton">> Don't make me cry, narrator...</a>
            </div>
        </div>
 
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        <div class="basile"><img src="..\media\stickmen\Stickman-class.svg"></div>
        @if(!empty($user->character))
            <div class="you"><img src="..\media\stickmen\{{ $user->character }}" alt=""></div>
        @endif

    </main>
</body>
</html>