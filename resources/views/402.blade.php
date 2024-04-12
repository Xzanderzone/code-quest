<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            @csrf
            @if($user->track === "Salesforce")
                <p>Addventure sends you a file with everything that they expect to see on your project. The goal is to automate a hiring process in the company, making it easier for recruiters to access all information about candidates and positions.</p>
            @elseif($user->track === "Full-Stack")
                <p>Our big project on this track is building a website. You have to choose one of the languages or frameworks that we learned on this track, and preferably combine 2 or more to challenge yourself!<br>
                You are going to work in groups and have 5 weeks to come up with a finished product.</p>
            @elseif($user->track === "Java")
                <p>Your first assignment is on the basics of Java. Some concepts overlap what you learned already, but you still need to create a good foundation for your career as a Java Developer.</p>
            @endif
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                @csrf
                @if($user->track === "Salesforce")
                    <p class="matrix-text">{{$user->name}} ~  I finish reading the document and…</p>
                    <br>
                @elseif($user->track === "Full-Stack")
                    <p class="matrix-text">{{$user->name}} ~  When Persile finishes his explanation you...</p>
                    <br>
                @elseif($user->track === "Java")
                    <p class="matrix-text">{{$user->name}} ~  You finish reading the assignment and…</p>
                    <br>
                @endif
                <form action="/track-first-choice" method="POST">
                    <div class="options">
                        @csrf
                        @if($user->track === "Salesforce")
                            <input type="radio" name="track_first" value="Focus" id="option1"><label for="option1">a) Immediately start working on the project. There is no time to lose!</label> 
                            <br>
                            <input type="radio" name="track_first" value="Collaboration" id="option2"><label for="option2">b) Check with my colleagues what they thought about the assignment, sharing some ideas and tips.</label>
                            <br>
                            <input type="radio" name="track_first" value="Detail Oriented" id="option3"><label for="option3">c) Read the document once more to make sure that I understood every task.</label>
                            <br>
                            <input type="radio" name="track_first" value="Cooperation" id="option4"><label for="option4">d) Call my buddy on Addventure and ask him how was his experience on this process.</label>
                        @elseif($user->track === "Full-Stack")
                            <input type="radio" name="track_first" value="Focus" id="option1"><label for="option1">a) Immediately start brainstorming ideas for the project. There is no time to lose!</label> 
                            <br>
                            <input type="radio" name="track_first" value="Teamwork" id="option2"><label for="option2">b) Go around the class looking for colleagues with similar interests to form a group.</label>
                            <br>
                            <input type="radio" name="track_first" value="Flexibility" id="option3"><label for="option3">c) Let the class know that you are open to any role on the project and wait to see where you can be fitted.</label>
                            <br>
                            <input type="radio" name="track_first" value="Goal Oriented" id="option4"><label for="option4">d) Start thinking on a project that would be impressive on a portfolio, to increase your opportunities outside the training.</label>
                        @elseif($user->track === "Java")
                            <input type="radio" name="track_first" value="Focus" id="option1"><label for="option1">a) Immediately open your IDE and start experimenting with code. There is no time to lose!</label> 
                            <br>
                            <input type="radio" name="track_first" value="Collaboration" id="option2"><label for="option2">b) Check with your colleagues what they thought about the assignment, sharing some ideas and tips.</label>
                            <br>
                            <input type="radio" name="track_first" value="Time Management" id="option3"><label for="option3">c) Create a schedule based on the amount of time you have available and the assignment tasks, planning day-by-day from start to end of your training.</label>
                            <br>
                            <input type="radio" name="track_first" value="Goal Oriented" id="option4"><label for="option4">d) Ask ChatGPT about the applicabilities of Java and which project you could work for your portfolio.</label>
                        @endif
                    </div> 
                    <br>
                    <button id="radioOptionButton" class='nextBtn buttonGrey'>> Let's make it happen</button>
                </form>
            </div>
        </div>
 
        @csrf
        @if ($user->track === "Salesforce")
            @include("_partials.sail")
        @elseif ($user->track === "Full-Stack")
            <div class="text-balloon-line"><div class="actual-line"></div></div>
            @include("_partials.drawings")
        @elseif ($user->track === "Java")
            <div class="text-balloon-line"><div class="actual-line"></div></div>
            @include("_partials.matty")
        @endif

    </main>
</body>
</html>