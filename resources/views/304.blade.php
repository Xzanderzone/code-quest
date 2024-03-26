<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="star">
        @csrf
            @if ($user->feedback === "Accountability")
                <p>Congratz! Your reaction to feedback unlocked a Softskill:</p>
                <h2>{{$user->feedback}}</h2>
                <a class="pixel" href="/next"><p class="matrix-text">I'm happy!</p></a>

            @elseif (($user->tech_talk === "Growth Mindset" || $user->tech_talk === "Storytelling") && ($user->feedback === "Adaptability" || $user->feedback === "Openness to Feedback"))
                <p>Congratz! Your tech talk topic and your reaction to feedback unlocked 2 Softskills:</p>
                <h2>{{$user->tech_talk}} and {{$user->feedback}}</h2>
                <a class="pixel" href="/next"><p class="matrix-text">I'm happy!</p></a>

            @else
                <h2>Your reaction to the feedback delays your CV progress, causing you to not acquire a new soft skill.</h2>
                <a class="pixel" href="/next"><p class="matrix-text">Let's move on</p></a>
                
            @endif
    </main>
</body>
</html>