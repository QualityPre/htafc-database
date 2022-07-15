@props(['player'])

<x-card>
    <div class="flex">
        <img class="mr-6 hidden h-32 w-48 md:block" src="{{ asset('images/htafc.png') }}" alt="" />
        <div>
            <h3 class="text-2xl hover:text-sky-600">
                <a href="/players/{{ $player->id }}">{{ $player->firstname }} {{ $player->surname }}</a>
            </h3>
            <div class="mb-4 text-xl font-bold">{{ $player->position }}</div>
            <div class="mb-4 text-xl font-bold">Appearances - {{ $player->appearances }}
            </div>
            <div class="mb-4 text-xl font-bold">Goals - {{ $player->goals }}</div>
            <ul class="flex flex-wrap">
                <li class="mr-2 mt-2 flex items-center justify-center rounded-xl bg-black py-1 px-3 text-xs text-white">
                    <a href="#">2000-2001</a>
                </li>
                <li class="mr-2 mt-2 flex items-center justify-center rounded-xl bg-black py-1 px-3 text-xs text-white">
                    <a href="#">2000-2001</a>
                </li>
                <li class="mr-2 mt-2 flex items-center justify-center rounded-xl bg-black py-1 px-3 text-xs text-white">
                    <a href="#">2000-2001</a>
                </li>
                <li class="mr-2 mt-2 flex items-center justify-center rounded-xl bg-black py-1 px-3 text-xs text-white">
                    <a href="#">2000-2001</a>
                </li>
                <li class="mr-2 mt-2 flex items-center justify-center rounded-xl bg-black py-1 px-3 text-xs text-white">
                    <a href="#">2000-2001</a>
                </li>
                <li class="mr-2 mt-2 flex items-center justify-center rounded-xl bg-black py-1 px-3 text-xs text-white">
                    <a href="#">2000-2001</a>
                </li>

            </ul>

        </div>
    </div>
</x-card>
