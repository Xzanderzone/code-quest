<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            @csrf
            @if ($user->track === "Salesforce" && $user->track_second === "Public Speaking")
                <p>Your presentation went well, you were a very confident speaker and your skills didn't let you down too. The panel was impressed by your performance.</p>
            @elseif ($user->track === "Salesforce" && $user->track_second === "Quick Learner")
                <p>You felt a little nervous presenting your case, but your technical knowledge shone brighter than a thousand sons! The panel was very impressed with your skills.</p>
            @elseif ($user->track === "Salesforce" && $user->track_second === "null")
                <p>Although you felt confident, the reception of your presentation was not how you expected. You came across as arrogant, and the panel was uncomfortable with the way you started your business case, downplaying your colleague's efforts.</p>
            @elseif ($user->track === "Full-Stack" && $user->track_second === "null")
                <p>Your team grows fatigued and in week 4, no one has any energy left to work. Instead of accelerating the development, overworking is having the opposite effect, delaying the project even more.<br>
                When it's time to present, your group doesn't have a finished product, but still manages to give a good overview of your project, skills and languages used on it.
                </p>
            @elseif ($user->track === "Full-Stack" && $user->track_second === "Critical Thinking")
                <p>Your group happily agrees with your proposal and starts prioritising main functional components.<br>
                After 5 weeks, your group presents a finished product. There is still room for improvement, but your project impresses by the techniques used and how much you were able to achieve in such a short time. The project is a good portfolio addition!
                </p>
            @elseif ($user->track === "Full-Stack" && $user->track_second === "Active Listening")
                <p>Your teammates come with some great ideas of how to improve productivity using a new way of grouping and assigning unfinished tasks.<br>
                The change pays off and when it's time to present, you have a finished project with some extra features that you were able to implement last week. The class is impressed by the communication and collaboration of your group, and the project is a great portfolio addition.
                </p>
            @elseif ($user->track === "Java" && $user->track_second === "Decision Making")
                <p>It's time to present to the whole class! Because of your quick decision making on the start of the assignment, you have time to develop a considerable complex architecture on your REST API project.<br>
                Your colleagues are impressed by your skills and ask questions about your learning process. You feel happy and confident about the skills you acquired.
                </p>
            @elseif ($user->track === "Java" && $user->track_second === "Analytical Thinking")
                <p>It's time to present to the whole class! Your structure is not as complex as it could be, but your approach to the problem is so analytical that leaves no room for error, allowing you to spend more time on tightening up the cracks.<br>
                Your project is near perfect and all the class can see it. You feel happy about your choice and confident that you will be a great Java developer.
                </p>
            @elseif ($user->track === "Java" && $user->track_second === "null")
                <p>As the deadline approached, you had to quickly prepare something to present to the class. You create a poor architecture for your REST API project, and your explanation of it is even more confusing than the result itself.<br>
                You finish your presentation and the class is deadly quiet. A colleague asks a question about your code and you manage to answer it, which brings you some relief. You doubt your decisions, and promises yourself to put more effort on your future projects.                    
                </p>
            @endif
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ </p>
                <button class="skipBtn" id="hoverOnlyButton">> What's the outcome for me?</button>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings")

    </main>
</body>
</html>