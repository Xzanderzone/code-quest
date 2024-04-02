<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>The time for presenting your business case is arriving! Your program is ready, tested and ready to go.<br>
            You and your colleagues go to Addventure headquarters to show your project to a panel of 4 Salesforce experts.</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~  Your presentation is right after your colleague ‘Sunday’. It’s time for you to go!</p>
                <br>
                <form action="/track-second-choice" method="POST">
                    @csrf
                    <div class="options">
                        <input type="radio" name="track_second" value="Public Speaking" id="option1"><label for="option1">a) The presentation takes off with you telling a story about the project. You show the panel why the Salesforce tools are important, and how you can convince the clients that they are the best option for their business.</label> 
                        <br>
                        <input type="radio" name="track_second" value="null" id="option2"><label for="option2">b) You start saying that your presentation is better than the other candidates and they don’t have to waste time with other presentations: you are what they are looking for!</label>
                        <br>
                        <input type="radio" name="track_second" value="Quick Learner" id="option3"><label for="option3">c) Your project is technically complex, showing extra features that were not requested on the original guidelines. You developed a whole new layer on the program, showcasing your skills.</label>
                    </div> 
                    <br>
                    <button id="radioOptionButton" class="buttonGrey">> I'm going with that</button>
                </form>
            </div>
        </div>
 
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        <div class="basile"><img src="..\media\stickmen\Stickman-class.svg"></div>
        @if(!empty($user->character))
            <div class="you"><img src="..\media\stickmen\{{ $user->character }}" alt=""></div>
        @endif

    </main>
</body>
</html>