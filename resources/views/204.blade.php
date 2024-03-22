<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="star">
        @csrf
            @if ($user->toilet_choice !== "null")
                <p>Congratz! You unlocked 2 Softskills:</p>
                <h2>{{$user->toilet_choice}} and 
                    @if ($user->seats === 'empty-table')
                        "Empathy"
                    @else
                        "Positive Attitude"
                    @endif
                </h2>
                <a class="pixel" href="/next"><p class="matrix-text">I'm happy!</p></a>
            @else
                @if ($user->card_reason === "Leadership" || $user->card_reason === "Communication")
                    <h2>Your colleagues are disappointed in you. {{$user->card_reason}} was removed from your CV.</h2>
                @else
                    <h2>Your colleagues are starting to keep their distance from you and your CV progress is delayed, causing you to not acquire a new soft skill.</h2>
                @endif
                <a class="pixel" href="/next"><p class="matrix-text">Let's move on</p></a>
            @endif
    </main>
</body>
</html>