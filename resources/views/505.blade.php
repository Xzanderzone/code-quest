<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            <p>Hi, {{$user->name}}. Here is Edwin, your career coach at CodeQuest. I just received some news from your application, and… 
            @csrf
                @if ($user->score >= 85)
                excellent news! The company was so impressed with your CV that they offered you a JOB. This is an outstanding achievement, not many CodeQuesters were able to land a job immediately after the training.<br>
                It shows that you have a great combination of hard and soft skills. Be proud of yourself and congratulations on your new position as {{$user->track}} Developer!
                @elseif ($user->score >=65 && $user->score < 85)
                good news! The company looked over your CV and felt that you have potential. They offered you a 3-month INTERNSHIP.<br>
                This is a great achievement, not all CodeQuesters can land an internship after the training. It shows that you put a great effort into learning code skills, but also to develop your interpersonal abilities. Be proud of yourself and congratulations on your new position as {{$user->track}} Intern!
                @elseif ($user->score < 65)
                I'm afraid I don't have good news. They decided that you are not a good fit to the company.<br>
                They said that your CV doesn't reflect the skills that they expect from someone following this training, both on technical and interpersonal aspects. This is an unfortunate scenario, but who knows? Maybe the skills you did manage to acquire can help you in the future.
                @endif
            </p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                @csrf
                @if ($user->score >= 85)
                    <p class="matrix-text">{{$user->name}} ~ CONGRATULATIONS!</p>
                    <a href="/next">> I have a job!</a>
                @elseif ($user->score >=65 && $user->score < 85)
                    <p class="matrix-text">{{$user->name}} ~ CONGRATULATIONS!</p>
                    <a href="/next">> I have an internship!</a>
                @elseif ($user->score < 65)
                    <p class="matrix-text">{{$user->name}} ~ OH NO!</p>
                    <a href="/next">> Go back to your mom's basement</a>
                @endif
            </div>
        </div>

        <div class="basile"><img src="..\media\stickmen\Stickman-class.svg"></div>
        <div class="you"><img src="..\media\stickmen\{{ $user->character }}" alt=""></div>

    </main>
</body>
</html>