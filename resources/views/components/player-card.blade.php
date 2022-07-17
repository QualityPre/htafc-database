@props(['player'])

<x-card>
    <div class="flex">
        <img class="mr-6 hidden h-32 w-48 md:block" src="{{ asset('images/htafc.png') }}" alt="" />
        <div>
            <h3 class="text-2xl hover:text-sky-600">
                <a href="/players/{{ $player->id }}">{{ $player->name }}</a>
            </h3>
            <div class="mb-4 text-xl font-bold">{{ $player->position }}</div>
            <div class="mb-4 text-xl font-bold">Appearances - {{ $player->appearances }}
            </div>
            <div class="mb-4 text-xl font-bold">Goals - {{ $player->goals }}</div>
            <x-player-tags :tagsCsv="$player->tags_positions" />
            <x-player-tags :tagsCsv="$player->tags_seasons" />
        </div>
    </div>
</x-card>
