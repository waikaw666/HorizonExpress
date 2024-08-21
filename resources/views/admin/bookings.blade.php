<x-admin-layout>

    <div>
        <h1>Here are list of bookings</h1>

        @foreach($bookings as $booking)
            {{ $booking->id }} - {{ $booking->name }} - {{ $booking->phone_number }}<br/>
        @endforeach

    </div>



</x-admin-layout>
