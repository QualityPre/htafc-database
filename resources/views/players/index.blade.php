@include('partials._hero')
@include('partials._search')


<x-layout>
    <div class="mx-4 gap-4 space-y-4 md:space-y-0 lg:grid lg:grid-cols-2">

        @unless(count($players) == 0)
            @foreach ($players as $player)
                <x-player-card :player=$player />
            @endforeach
        @else
            <p>No players found!</p>
        @endunless
    </div>

</x-layout>
