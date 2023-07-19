<div class="left message">
    @if(isset($avatar2) && isset($message))
        <img src="{{$avatar2}}" height="60px" width="60px" alt="Avatar">
    @endif
    <p>{{$message}}</p>
</div>