<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            @csrf
            @if($user->track === "Salesforce")
                <p>The time for presenting your business case has arrived! Your program is tested and ready to go.<br>
                You and your colleagues go to Addventure headquarters to show your project to a panel of 4 Salesforce experts.</p>
            @elseif($user->track === "Full-Stack")
                <p>Your team decided to work with Agile management style, and you were assigned to the role of 'scrum master', the team project manager. That comes with responsibilities.<br>
                On week 3, after a few struggles, you noticed that you are not going to be able to finish the project in time. You schedule a meeting with your team to resolve the issue.</p>
            @elseif($user->track === "Java")
                <p>After a few weeks of learning, you feel you can already grasp the important concepts of Java programming.<br>
                You finally have the opportunity to experiment with the language in a 1-month project to create a REST API.
                </p>
            @endif      
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                @csrf
                @if($user->track === "Salesforce")
                    <p class="matrix-text">{{$user->name}} ~    My presentation is right after my colleague 'Sunday'. It's time to go!</p>
                    <br>
                @elseif($user->track === "Full-Stack")
                    <p class="matrix-text">{{$user->name}} ~  On the meeting you...</p>
                    <br>
                @elseif($user->track === "Java")
                    <p class="matrix-text">{{$user->name}} ~  Before starting you...</p>
                    <br>
                @endif
                <form action="/track-second-choice" method="POST">
                    @csrf
                    <div class="options">
                        @if($user->track === "Salesforce")
                            <input type="radio" name="track_second" value="Public Speaking" id="option1"><label for="option1">a) I begin my presentation telling a story.</label> 
                            <br>
                            <input type="radio" name="track_second" value="null" id="option2"><label for="option2">b) "The time for losers is over, now the real show begins!"</label>
                            <br>
                            <input type="radio" name="track_second" value="Quick Learner" id="option3"><label for="option3">c) Kick off showing the technicalities of my project.</label>
                        @elseif($user->track === "Full-Stack")
                            <input type="radio" name="track_second" value="null" id="option1"><label for="option1">a) Make a arbitrary decision that everyone has to work overtime, on evenings and weekends.</label> 
                            <br>
                            <input type="radio" name="track_second" value="Critical Thinking" id="option2"><label for="option2">b) Propose to put some features on the “nice-to-have” pile, prioritising the development of more important components.</label>
                            <br>
                            <input type="radio" name="track_second" value="Active Listening" id="option3"><label for="option3">c) Ask your teammates for suggestions of how to tackle this time management issue and listen to their proposals.</label>
                        @elseif($user->track === "Java")
                            <input type="radio" name="track_second" value="Decision Making" id="option1"><label for="option1">a) Quickly decide a topic and a strategy for your project, leaving more time for the technical development.</label> 
                            <br>
                            <input type="radio" name="track_second" value="Analytical Thinking" id="option2"><label for="option2">b) Analyse the problem from every angle, trying to figure out the best possible approach and the perfect solution for it.</label>
                            <br>
                            <input type="radio" name="track_second" value="null" id="option3"><label for="option3">c) Don't pay much attention to the project, it is too easy for you.</label>
                        @endif
                    </div> 
                    <br>
                    <button id="radioOptionButton" class='buttonGrey nextBtn'>> I'm going with that</button>
                </form>
            </div>
        </div>
 
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.class")

    </main>
</body>
</html>