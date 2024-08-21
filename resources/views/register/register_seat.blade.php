<x-layout>

    <x-slot:heading></x-slot:heading>

    <div class="w-full grid grid-cols-12 gap-6">
        <div class="col-span-8 w-full border p-12 grid grid-cols-2 gap-6">
            <button class="border h-16">

            </button>


            <button class="border h-16">

            </button>
        </div>

        <div class="col-span-4 space-y-8">

            <form class=" border p-12 grid gap-4" action="/book" method="POST">
                @csrf

                <input type="hidden" name="schedule_id" value="{{$schedule->id}}">


                <label for="name">Your Name</label>
                <input class="p-2 border" type="text" name="name" required>

                <label for="phone_number">Your Phone Number</label>
                <input class="p-2 border" type="text" name="phone_number" required>

                <button class="p-2 bg-blue-500 hover:bg-blue-600 mt-4" type="submit">Register</button>
            </form>
        </div>



    </div>


</x-layout>
