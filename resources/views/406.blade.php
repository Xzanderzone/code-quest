<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            @csrf
            @if($user->track === "Salesforce")
                <p>It's time to face your last challenge! To be a Salesforce Developer, skills are not enough! You also need certifications.<br><br>
                Show Addventure that you are the complete package!</p>
            @elseif($user->track === "Full-Stack")
                <p>It's time to face your last challenge! To be a Full-Stack Developer, you need to learn how to use Full-Stack frameworks!<br>
                Show us everything you can do it!</p>
            @elseif($user->track === "Java")
                <p>It's time to face your last challenge! To be a Java Developer, you need to prove your knowledge of the 'superior language'!<br>
                Come on, prove your worthiness!</p>
            @endif
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~    Yeah!</p>
            <button class="skipBtn" id="hoverOnlyButton">> Let's roll!</button>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        
        @csrf
        @if ($user->track === "Salesforce")
            @include("_partials.sail")
        @elseif ($user->track === "Full-Stack")
            @include("_partials.drawings")
        @elseif ($user->track === "Java")
            @include("_partials.matty")
        @endif
        
    </main>
</body>
</html>