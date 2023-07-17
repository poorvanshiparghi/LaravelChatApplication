<div class="right message">
    <p>{{$message}}</p>
    <img src="/images/IMG_5884.jpg" height="60px" width="60px" alt="Avatar">
    {{-- @if (!empty($message) && empty($image))
        <p>{{$message}}</p>
        <img src="/images/IMG_5884.jpg" height="60px" width="60px" alt="Avatar">
    @else

    @endif
    @if (!empty($image) && empty($message))
        <p>{{$image}}</p>
        <img src="/images/IMG_5884.jpg" height="60px" width="60px" alt="Avatar">
    @endif

    @if (!empty($message) && !empty($image))
        <p>{{$message}}</p>
        <img src="/images/IMG_5884.jpg" height="60px" width="60px" alt="Avatar"><br>
        <p>{{$image}}</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    @endif --}}
</div>