<div class="basile"><img src="..\media\stickmen\Stickman-persile-v1.gif" alt=""></div>

@if(!empty($user->character))
    <div class="you" id="userContainer">
        <img id="userImage" src="..\media\stickmen\{{ $user->character }}" alt="">
        <img class="gif" id="gifImage" src="..\media\animations\Stickman-codequest-glasses.gif" alt="">
    </div>
@endif