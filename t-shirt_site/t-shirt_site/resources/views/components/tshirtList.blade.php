@props(['tshirts'])

<section class="tshirts section-product_list">
    @foreach($tshirts as $tshirt)
    <a href="{{route('tshirtByName', ['id' => $tshirt->id])}}">

    <x-shows.tshirtView :tshirt="$tshirt"></x-shows.tshirtView>

    </a>
    @endforeach
</section>