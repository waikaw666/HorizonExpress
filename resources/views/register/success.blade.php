<x-layout>
    <x-slot:heading>
    </x-slot:heading>

    <div class="p-8 text-center">
        <h1 class="text-2xl font-bold mb-4">Thank You for Your Booking!</h1>
        <p class="text-lg mb-2">
            Your booking has been successfully completed. We’re excited to have you onboard and wish you a pleasant journey!
        </p>
        <p class="text-md mb-6">
            If you have any questions or need assistance, feel free to reach out to our support team.
        </p>

        <div class="mt-4">
            <a href="{{ url('/') }}" class="px-6 py-3 bg-blue-600 text-white rounded-md text-lg hover:bg-blue-700 transition">
                Go to Homepage
            </a>
        </div>
    </div>
</x-layout>
