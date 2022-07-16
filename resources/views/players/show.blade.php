<x-layout>
    @include('partials._search')
    <a href="/" class="ml-4 mb-4 inline-block text-black"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="mr-6 mb-6 w-48" src="{{ asset('images/no-image.png') }}" alt="" />

                <h3 class="mb-2 text-2xl">{{ $player->name }}</h3>
                <x-player-tags :tagsCsv="$player->tags" />
                <div class="my-4 text-lg">
                    <i class="fa-solid fa-location-dot"></i> {{ $player->position }}
                </div>
                <div class="mb-6 w-full border border-gray-200"></div>
                <div>
                    <h3 class="mb-4 text-3xl font-bold">
                        Player Information
                    </h3>
                    <div class="space-y-6 text-lg">
                        <p>
                            {{ $player->description }}
                        </p>

                        <a href="{{ $player->wikipedia_link }}" target="_blank"
                            class="block rounded-xl bg-black py-2 text-white hover:opacity-80"><i
                                class="fa-solid fa-globe"></i> Visit
                            Wikipedia for more information</a>
                    </div>
                </div>
            </div>
        </x-card>
    </div>

</x-layout>
