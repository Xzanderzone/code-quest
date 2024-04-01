<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>It's time to face your last challenge!</p><br>
            @csrf
            @if($user->track === "Salesforce")
                <p>To be a Salesforce Developer, skills are not enough! You also need certifications.<br><br>
                Show Addventure that you are the complete package!</p>
            @elseif($user->track === "Full-Stack")
                <p>To be a Full-Stack Developer, you need to learn how to use Full-Stack frameworks!<br>
                Show us everything you can do it!</p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ Yeah!</p>
                <a href="/next">> Let's roll!</a>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings") 
    </main>
</body>
</html>