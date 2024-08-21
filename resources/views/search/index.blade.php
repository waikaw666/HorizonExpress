<x-layout>

    <x-slot:heading></x-slot:heading>

    <x-header-search-form/>

<div>
    @for(
    $i = 0;
//    $i < count($results);
    $i < 10;
    $i++
    )
        <x-result-card
            title="Bus Type"
            subtitle="Plate Number"
            note="Description"
        />
 @endfor
</div>
</x-layout>

{{--    <form action="/search-result" method="GET">--}}
{{--        <label for="busType">Bus type</label>--}}
{{--        <input type="text" name="busType">]--}}
{{--        <label for="origin">Origin</label>--}}
{{--        <input type="text" name="origin">--}}
{{--        <button type="submit">Search</button>--}}
{{--    </form>--}}


