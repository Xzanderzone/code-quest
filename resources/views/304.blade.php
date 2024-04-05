<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
        @csrf
        @if ($user->feedback === "Accountability")
            <main class="star">
                <div class="whiteBlock">
                    <p>Congratz! Your reaction to feedback unlocked a Softskill:</p>
                    <h2>{{$user->feedback}}</h2>
                    <button class="pixel skipBtn"><p class="matrix-text">I'm happy!</p></button>
                </div>
            </main>
        @elseif (($user->tech_talk === "Growth Mindset" || $user->tech_talk === "Storytelling") && ($user->feedback === "Adaptability" || $user->feedback === "Openness to Feedback"))
            <main class="star">
                <div class="whiteBlock">
                    <p>Congratz! You unlocked 2 Softskills:</p>
                    <h2>{{$user->tech_talk}} and {{$user->feedback}}</h2>
                    <button class="pixel skipBtn"><p class="matrix-text">I'm happy!</p></button>
                </div>
            </main>
        @else
            <main class="sad">
                <div class="whiteBlock">
                    <p>Your reaction to the feedback delays your CV progress.<br>
                    You failed to unlock a new soft skill.</p>
                    <button class="pixel skipBtn"><p class="matrix-text">Let's move on</p></button>
                </div>
            </main>  
        @endif
</body>
</html>