<x-layout>

    <x-slot:heading></x-slot:heading>


    @if(
    $schedules->count() > 0
    )

        <div>
            @foreach ($schedules as $schedule)
                <div class="border p-8 mb-4">
                    <h1 class="text-3xl font-bold capitalize pb-8">
                        {{ $schedule->busRoute->origin->origin_name }} to {{ $schedule->busRoute->destination->destination_name }}
                    </h1>

                    <h2 class="text-lg">
                        Date of Departure: {{ $schedule->date }}
                    </h2>

                    <h2 class="text-lg">
                        Bus: {{ $schedule->bus->bus_type }} ({{ $schedule->bus->plate_number }})
                    </h2>

                    <h3 class="text-lg">
                        Departure: {{ $schedule->departure_time }} | Arrival: {{ $schedule->arrival_time }}
                    </h3>

                    <p>
                        {{-- Additional notes can go here --}}

                    </p>

                    <div class="w-full flex justify-end">
                        <a href="/register/{{ $schedule->id }}/seat">
                            <button class="px-4 py-3 text-lg bg-blue-600 text-white rounded">
                                Select this Trip >
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
    <div class="flex justify-center h-[400px]">

        <h1 class="text-4xl text-center">
            No result ...
        </h1>
    </div>
    @endif


</x-layout>

{{--    <form action="/search-result" method="GET">--}}
{{--        <label for="busType">Bus type</label>--}}
{{--        <input type="text" name="busType">]--}}
{{--        <label for="origin">Origin</label>--}}
{{--        <input type="text" name="origin">--}}
{{--        <button type="submit">Search</button>--}}
{{--    </form>--}}


