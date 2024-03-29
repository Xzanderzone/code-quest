<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            <p>Page for making the choice of direction</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~   What do you do?</p>
                <form action="/toilet-choice" method="POST">
                    @csrf
                    <div class="options">
                        <input type="radio" name="toilet_choice" value="Initiative" id="option1"><label for="option1">1)Fullstack</label> 
                        <input type="radio" name="toilet_choice" value="Conflict Resolution" id="option2"><label for="option2">2)Salesforce</label>
                        <input type="radio" name="toilet_choice" value="null" id="option3"><label for="option3">3)Java</label> 
                        <input type="radio" name="toilet_choice" value="null" id="option4"><label for="option4">4)Dropout</label>
                    </div> 
                    <button>> That's what I do</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>

        <div class="basile"><img src="..\media\stickmen\Stickman-dab-06.svg"></div>

        @if(!empty($user->character))
            <div class="you"><img src="..\media\stickmen\{{ $user->character }}" alt=""></div>
        @endif

    </main>
</body>
</html>