<div class="basile"><img src="..\media\stickmen\Stickman-persile-v1.gif" alt=""></div>

@if(!empty($user->character))
    <div class="you"><img src="..\media\stickmen\{{ $user->character }}" alt="">
    <img class="gif" src="..\media\animations\Stickman-codequest-glasses.gif" alt=""></div>
@endif