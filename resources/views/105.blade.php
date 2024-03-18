<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="no-text">
        <div class="text-balloon">

        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ Hello class, I chose this card for the following reason:</p>
                <form action="/card-reason" method="POST">
                    @csrf
                    <div class="options">
                        @if ($user->card === "card1.png")
                        <input type="radio" name="card-reason" value="Organised" id="option1A"><label for="option1A">1) The seaside is a peaceful place and I like when my mind feels clean and organised</label> 
                        <input type="radio" name="card-reason" value="Motivated" id="option1B"><label for="option1B">2) I love spending holidays in the beach and it’s definitely something that helps me keep motivated.</label>
                        @endif
                        @if ($user->card === "card2.png")
                        <input type="radio" name="card-reason" value="Transparency" id="option2A"><label for="option2A">1) Sometimes I feel my mind is like 50.000 fire alarms activated at the same time</label> 
                        <input type="radio" name="card-reason" value="Communication" id="option2B"><label for="option2B">2) My friends known me as a ‘fun fact’ person, I always have a interesting story to tell.</label>
                        @endif
                        @if ($user->card === "card3.png")
                        <input type="radio" name="card-reason" value="Curitosity" id="option3A"><label for="option3A">1) I always loved to think on the space and what exists beyond our world</label> 
                        <input type="radio" name="card-reason" value="Ambitious" id="option3B"><label for="option3B">2) I want to boldly go where no one has gone before!</label>
                        @endif
                        @if ($user->card === "card4.png")
                        <input type="radio" name="card-reason" value="Problem Solving" id="option4A"><label for="option4A">1) I like the challenge of fixing things, specially when the solution seems impossible</label> 
                        <input type="radio" name="card-reason" value="Leadership" id="option4B"><label for="option4B">2) I’m often on the role of challenging people to think outside the box</label>
                        @endif
                        @if ($user->card === "card5.png")
                        <input type="radio" name="card-reason" value="Self-Confidence" id="option5A"><label for="option5A">1) I feel confident on tackling big issues, even if they are above my current level</label> 
                        <input type="radio" name="card-reason" value="Assertive" id="option5B"><label for="option5B">2) When people say I am not capable of doing something, I’ll make the effort of proving them wrong” - “I am no man!</label>
                        @endif
                        @if ($user->card === "card6.png")
                        <input type="radio" name="card-reason" value="Innovation" id="option6A"><label for="option6A">1) I live a lot on the digital world and I often missed out what is happening on the real world</label> 
                        <input type="radio" name="card-reason" value="Diligent" id="option6B"><label for="option6B">2) I like to document and share things that I encounter, that I think are interesting or can be useful for other people.</label>
                        @endif
                        </div> 
                    <button>> This is what I say!</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><img src="..\media\cards\{{ $user->card }}"></div>
        @include("_partials.drawings") 
        <div class="basile"><img src="..\media\cards\classwithstudents.jpg"></div>

        @if(!empty($user->character))
            <div class="you"><img src="..\media\stickmen\{{ $user->character }}" alt=""></div>
        @endif
    </main>
</body>
</html>