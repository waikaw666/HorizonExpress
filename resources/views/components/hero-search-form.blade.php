<div class="w-[420px]">
    <form action="/search" method="GET" class="bg-white p-5 flex flex-col rounded bg-white/[0.85] shadow-md">

        <h1 class="text-center text-xl font-bold mb-2">SEARCH TRIPS</h1>
            <label class="mb-1 text-xs font-medium font-['Montserrat']" for="origin">ORIGIN</label>
            <select class="border-2 mb-2 p-2 outline-none capitalize" name="origin">
                @foreach($origins as $origin)
                    <option class="capitalize" value="{{$origin->id}}">{{$origin->origin_name}}</option>

                @endforeach
            </select>

            <label class="mb-1 text-xs font-medium font-['Montserrat']" for="destination">DESTINATION</label>
            <select required class="border-2 mb-2 p-2 outline-none capitalize" name="destination">


                @foreach($destinations as $destination)
                    <option class="capitalize" value="{{$destination->id}}">{{$destination->destination_name}}</option>

                @endforeach
            </select>
            <label class="mb-1 text-xs font-medium font-['Montserrat']" for="date">DATE</label>
            <input class="border-2 mb-8 p-1.5 outline-none" type="date" name="date" required>

        <button class="bg-yellow-400 px-1 py-2 hover:bg-yellow-300 font-['Montserrat']" type="submit">SEARCH</button>
    </form>
</div>
