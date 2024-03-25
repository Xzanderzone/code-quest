<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="star">
        @csrf
            @if ($user->toilet_choice == "Initiative")
                <p>Congratz! You unlocked a Softskill:</p>
                <h2>{{$user->toilet_choice}}</h2>
                <a class="pixel" href="/next"><p class="matrix-text">I'm happy!</p></a>

            @elseif ($user->toilet_choice == "Conflict Resolution")
                <p>Congratz! You unlocked 2 Softskills:</p>
                <h2>{{$user->toilet_choice}} and 
                    @if ($user->seats === 'empty-table')
                    Empathy
                    @else
                        Positive Attitude
                    @endif
                </h2>
                <form action="/extra-toilet-skill" method="POST">
                    @csrf
                    <button class="pixel matrix-text">I'm happy!</button>
                </form>

            @elseif ($user->card_reason === "Leadership" || $user->card_reason === "Communication")
                <h2>Your colleagues are disappointed in you. {{$user->card_reason}} was removed from your CV.</h2>
                <form action="/card-reason-update" method="POST">
                    @csrf
                    <button class="pixel matrix-text">Let's move on</button>
                </form>

            @elseif ($user->card_reason !== "Leadership" && $user->card_reason !== "Communication" && !is_null($user->card_reason))
                <h2>Your colleagues are starting to keep their distance from you and your CV progress is delayed, causing you to not acquire a new soft skill.</h2>
                <a class="pixel" href="/next"><p class="matrix-text">Let's move on</p></a>
                
            @endif
    </main>
</body>
</html>