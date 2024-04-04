<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            @csrf
                @if ($user->tech_talk === "Growth Mindset")
                    <p>Your colleagues show great interest in your topic and ask some questions. You confidently reply to all queries, and now it's time for feedback!<br><br>
                    Ghibault is with his hand in the air, ready to give some constructive feedback. He tells you that you were a good speaker, but that you could have used a more interesting slide presentation.
                    </p>
                @elseif ($user->tech_talk === "Storytelling")
                    <p>Everyone had a blast with your fun choice and wholesome topic. You get a couple of feedback complimenting your presentation.<br><br>
                    Ghibault is with his hand in the air, ready to give some constructive feedback. He tells you that you were a good speaker, but that you could have used a more interesting slide presentation.
                    </p>
                @else
                    <p>Immediately after you finish your presentation, Persile makes a remark that he had made it clear that this topic was not allowed.</p>
                @endif
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~    What do I say?</p>
                <br>
                <form action="/feedback" method="POST">
                    @csrf
                    <div class="options">
                        @if ($user->tech_talk === "Growth Mindset" || $user->tech_talk === "Storytelling")
                            <input type="radio" name="feedback" value="Openness to Feedback" id="option1"><label for="option1">a) You thank him for the feedback and said that you will keep this in mind for the next one.</label> 
                            <br>
                            <input type="radio" name="feedback" value="Adaptability" id="option2"><label for="option2">b) You realise the beamer is not showing the proper colours of your presentation and immediately start changing the settings until it's fixed.</label>
                            <br>
                            <input type="radio" name="feedback" value="null" id="option3"><label for="option3">c) You dismiss the input, saying that he is incapable of appreciating good aesthetics and the minimalist approach you took.</label>
                        @else
                            <input type="radio" name="feedback" value="Accountability" id="option1"><label for="option1">a) I profusely apologise and explain that I misunderstood the remark.</label> 
                            <br>
                            <input type="radio" name="feedback" value="null" id="option2"><label for="option2">b) I stand my ground and say that I thought the topic was interesting anyway.</label>
                        @endif
                    </div> 
                    <br>
                    <button id="radioOptionButton" class='nextBtn buttonGrey'>> I'm going with that</button>
                </form>
            </div>
        </div>
 
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.class")

    </main>
</body>
</html>