@props(['languages'])

<div class="features">
@foreach($languages as $language)
    @foreach($language->features as $feature)
        <p class="feature">{{$feature}}</p>
    @endforeach
@endforeach
</div>