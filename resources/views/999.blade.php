<!DOCTYPE html>
<html lang="en">
    @include("_partials.head")
<body>
    @include("_partials.header") 
    <main class="dialogue">
        <div class="text-balloon">
            Congratulations {{ $user->name }}, Pieter doesnt know what to put here . its just a placeholder to show the routing works !
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 YOUR TERMINAL</p>
            </div>
            <div class="content">
                <p class="matrix-text">{{ $user->name }} ~ I AM THE CODE MASTER</p>
                <form class="choose-character" method="POST" action="/choose-character"> 
                    @csrf
                    <div class="characters">

                    </div>
                    <button>> This is me</button>
                </form>
            </div>
        </div>
        <div class="text-balloon-line"><div class="actual-line"></div></div>
        @include("_partials.drawings") 
    </main>
</body>
</html>