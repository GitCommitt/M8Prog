<x-layouts.app>

<x-slot name='content'>
    @foreach($languages as $language)
        <div class="card-laguage">
            <p>{{ $language->name }}</p>
            {!! $language->iconSvg !!}
            <p class="bg">{{ $language->description }}</p>
            <a href="{{route('langdetails',['lang'=>$language->name]) }}">{{ $language->name }}</a>
            <x-feature :languages='$languages'></x-feature>
        </div>
    @endforeach

</x-slot>
</x-layouts.app>