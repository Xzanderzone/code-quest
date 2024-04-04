<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            @csrf
            @if ($user->track === "Salesforce")
                <p>You are learning your way through Salesforce on the SnailHead platform. Your buddy, from the Addventure Company, is guiding you on this process and giving some moral support.<br>
                After a couple of weeks - and many points scored on SnailHead - it's time to prepare your business case and present it to Addventure.
                </p>
            @elseif ($user->track === "Full-Stack")
                <p>Hi, fellow Full-Stacker! I am happy that you chose this path, which was also my choice when I was in your shoes. <br>
                Full-Stack is full of possibilities, you can mix front and back-end skills, becoming a jack of all trades.
                </p>
            @elseif ($user->track === "Java")
                <p>You are excited to learn new things on the Java Track! It is a different approach from the other tracks, you have to work more autonomously and look for information by yourself.<br>
                There is less guidance, but also more freedom, which means that you can set your own pace and even go beyond what the learning track initially proposes.
                </p>
            @endif
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                @csrf
                @if ($user->track === "Salesforce")
                    <p class="matrix-text">{{$user->name}} ~ This business case will make or break my chances with the company.</p>
                    <button id="hoverOnlyButton" class="skipBtn">> Let's do it!</button>
                @elseif ($user->track === "Full-Stack")
                    <p class="matrix-text">{{$user->name}} ~ Yeah!</p>
                    <button id="hoverOnlyButton" class="skipBtn">>  That's who I am</button>
                @elseif ($user->track === "Java")
                    <p class="matrix-text">{{$user->name}} ~ Yeah!</p>
                    <button id="hoverOnlyButton" class="skipBtn">> That sounds good</button>
                @endif
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>

        @csrf
        @if ($user->track === "Salesforce")
            @include("_partials.sail")
        @elseif ($user->track === "Full-Stack")
            @include("_partials.drawings")
        @elseif ($user->track === "Java")
            @include("_partials.matty")
        @endif

    </main>
</body>
</html>