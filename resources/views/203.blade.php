<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            @csrf
                @if ($user->toilet_choice === "Initiative")
                    <p>You go to the coach and explain the situation.<br><br>
                    - Hey Persile, Bonasi's name isn't actually Bonasi. I don't know his name either but he's crying in the bathroom, I think you should check up on him to clear the confusion.<br>
                    - Thanks for having the initiative of talking to me and helping your colleague, {{$user->name}}. - said Persile.
                    </p>
                @elseif ($user->toilet_choice === "Conflict Resolution")
                    <p>You try to comfort 'Bonasi' and encourage him to talk to Persile.<br><br> 
                    @if ($user->seats === 'empty-table')
                        - Starting something new can be very stressful! I remember the first day of classes, I arrived and was so stressed about meeting new people that I isolated myself sitting at an empty table. But now I already feel more confident in meeting new people. I am sure everyone feels like this, and they will be understandable about your little slip.<br>
                        - Oh, thank you for these kind words, {{$user->name}}. I feel that I have a friend on you! I'll go and explain to Persile that my real name is “Yo-nasi”.
                    @elseif ($user->seats === 'occupied-table')
                        - Starting something new can be very stressful! On my first day, I was so worried about meeting new people. I remember feeling overwhelmed about the decision of where to seat, and you kindly looked at me and asked if I would like to sit with you. That made my day so much better and you showed such kindness that I am sure that everyone in the class will reciprocate in the same way when you tell them about your little slip.<br>
                        - Oh, thank you for these kind words, {{$user->name}}. I had no idea that I already had such good friends here! I'll go and explain to Persile that my real name is “Yo-nasi”.
                    @endif
                    </p>
                @elseif ($user->toilet_choice === "null")
                    <p>'Bonasi' leaves the bathroom and gathers up the courage to tell everyone that his real name is Yo-nasi. He seems upset about how you treated him and tells the class what you did.</p>
                @endif
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ </p>
                <a href="/next">> What happens now?</a>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>

            @if ($user->toilet_choice === "Initiative")
                <div class="text-balloon-line"><div class="actual-line"></div></div>
                @include("_partials.drawings") 
            @else
                <div class="basile"><img src="..\media\stickmen\Stickman-dab-06.svg"></div>
                <div class="you"><img src="..\media\stickmen\{{ $user->character }}" alt=""></div>
            @endif

    </main>
</body>
</html>