<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="ok-page">
        <div class="text-balloon">
            <p>You are learning your way through Salesforce on the SnailHead platform. Your buddy, from the Addventure Company, is guiding you on this process and giving some moral support.<br>
            After a couple of weeks - and many points scored on SnailHead - it's time to prepare your business case and present it to Addventure.
            </p>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{$user->name}} ~ This business case will make or break your chances with the company.</p>
                <a href="/next" id="hoverOnlyButton">> Let's do it!</a>
            </div>
        </div>
        
        @include("_partials.drawings")

    </main>
</body>
</html>