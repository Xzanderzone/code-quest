<div class="basile"><img src="..\media\stickmen\Stickman-persile-v1.gif" alt=""></div>

@if(!empty($user->character))
    <div class="you" id="userContainer">
        <img id="userImage" src="..\media\stickmen\{{ $user->character }}" alt="">
        @php
            $gifFilename = pathinfo($user->character, PATHINFO_FILENAME) . '.gif';
        @endphp
        <img class="gif" id="gifImage" src="..\media\animations\{{ $gifFilename }}" alt="" style="display: none;">
    </div>
@endif