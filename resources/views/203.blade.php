<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            @csrf
                @if ($user->toilet_choice === "Initiative")
                    <p>You go to the coach and explain the situation.<br>
                    - Hey Persile, Bonasi's name isn't actually Bonasi. I don't know his name either but he's crying in the bathroom, I think you should check up on him to clear the confusion.<br>
                    - Thanks for having the initiative of talking to me and helping your colleague, {{$user->name}}. - said Persile.
                    </p>
                @elseif ($user->toilet_choice === "Conflict Resolution")
                    <p>You try to comfort 'Bonasi' and encourage him to talk to Persile.<br>
                    @if ($user->seats === 'empty-table')
                        - Starting something new can be very stressful! On the first day of classes, I was so stressed that I isolated myself sitting at an empty table. But now I already feel more confident meeting new people. I am sure everyone has this moments, and they will be understandable about your little slip.<br>
                        - Oh, thank you for these kind words, {{$user->name}}. I feel that I have a friend on you! I'll go and explain to Persile that my real name is “Yo-nasi”.
                    @elseif ($user->seats === 'occupied-table')
                        - Starting something new can be very stressful! On the first day, I remember feeling overwhelmed about the decision of where to seat, and you looked at me and asked if I would like to sit with you. That made my day so much better and you showed such kindness that I am sure that everyone will understand when you tell them about your little slip.<br>
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
                <p class="matrix-text">{{$user->name}} ~</p>
                <button id="hoverOnlyButton" class="skipBtn">> What happens now?</button>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>

            @if ($user->toilet_choice === "Initiative")
                @include("_partials.drawings") 
            @else
                @include("_partials.bonasi") 
            @endif

    </main>
</body>
</html>