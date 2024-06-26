<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    
    
    
        @csrf
            @if ($user->toilet_choice == "Initiative")
            <main class="star">
                <div class="whiteBlock">
                    <p>Congratz! You unlocked a Softskill:</p>
                    <h2>{{$user->toilet_choice}}</h2>
                    <button class="skipBtn pixel"><p class="matrix-text">I'm happy!</p></button>
                </div>
            </main>
            @elseif ($user->toilet_choice == "Conflict Resolution")
            <main class="star">
                <div class="whiteBlock">
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
                        <button class="skipBtn pixel"><p class="matrix-text">I'm happy!</p></button>
                    </form>
                </div>
            </main>
            @elseif ($user->card_reason === "Leadership" || $user->card_reason === "Communication")
            <main class="sad">
                <div class="whiteBlock">
                    <p>Your colleagues are disappointed in you.<br>{{$user->card_reason}} was removed from your CV.</p>
                    <form action="/card-reason-update" method="POST">
                        @csrf
                        <button class="skipBtn pixel"><p class="matrix-text">Let's move on</p></button>
                    </form>
                </div>
            </main>
            @elseif ($user->card_reason !== "Leadership" && $user->card_reason !== "Communication" && !is_null($user->card_reason))
            <main class="sad">
                <div class="whiteBlock">
                    <p>Your colleagues are starting to keep their distance from you.<br>
                        You failed to unlock a new soft skill.</p>
                    <button class="pixel skipBtn"><p class="matrix-text">Let's move on</p></button>
                </div>
            </main>
            @endif
</body>
</html>