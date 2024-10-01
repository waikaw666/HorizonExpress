<x-admin-layout>
    <div class="p-6 bg-white border rounded-lg mt-4">
        <h2 class="text-xl font-semibold mb-4">Bookings List</h2>

        <table class="table-auto w-full text-left border-collapse">
            <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Phone Number</th>
                <th class="border px-4 py-2">Schedule ID</th>
                <th class="border px-4 py-2">Bus Route ID</th>
                <th class="border px-4 py-2">Payment Method</th>
                <th class="border px-4 py-2">Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td class="border px-4 py-2">{{ $booking->id }}</td>
                    <td class="border px-4 py-2">{{ $booking->name }}</td>
                    <td class="border px-4 py-2">{{ $booking->phone_number }}</td>
                    <td class="border px-4 py-2">{{ $booking->schedule_id }}</td>
                    <td class="border px-4 py-2">{{ $booking->bus_route_id }}</td>
                    <td class="border px-4 py-2">{{ $booking->payment_method }}</td>
                    <td class="border px-4 py-2">{{ $booking->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @if($bookings->isEmpty())
            <p class="text-gray-500 mt-4">No bookings found.</p>
        @endif
    </div>
</x-admin-layout>
