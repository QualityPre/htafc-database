<x-layout>

    <x-card class="mx-auto mt-24 max-w-lg rounded border border-gray-200 bg-gray-50 p-10">
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">
                HTAFC database
            </h2>
            <p class="mb-4">Add a player to the DB</p>
        </header>

        <form action="/players" method="POST">
            @csrf
            <div class="mb-6">
                <label for="name" class="mb-2 inline-block text-lg">Player Name</label>
                <input type="text" class="w-full rounded border border-gray-200 p-2" name="name" />
            </div>

            <h3 class="mb-2 inline-block text-lg">General Position</h3>

            <div class="mb-6">
                <x-checkbox.unordered-list>

                    <x-checkbox.list>
                        <x-checkbox.card>
                            <x-checkbox.input type='radio' id='Goalkeeper' name='position_general'
                                value='Goalkeeper' />
                            <x-checkbox.label label='Goalkeeper' />
                        </x-checkbox.card>
                    </x-checkbox.list>
                    <x-checkbox.list>
                        <x-checkbox.card>
                            <x-checkbox.input type='radio' id='Defender' name='position_general' value='Defender' />
                            <x-checkbox.label label='Defender' />
                        </x-checkbox.card>
                    </x-checkbox.list>
                    <x-checkbox.list>
                        <x-checkbox.card>
                            <x-checkbox.input type='radio' id='Midfielder' name='position_general'
                                value='Midfielder' />
                            <x-checkbox.label label='Midfielder' />
                        </x-checkbox.card>
                    </x-checkbox.list>
                    <x-checkbox.list>
                        <x-checkbox.card>
                            <x-checkbox.input type='radio' id='Forward' name='position_general' value='Forward' />
                            <x-checkbox.label label='Forward' />
                        </x-checkbox.card>
                    </x-checkbox.list>
                </x-checkbox.unordered-list>





            </div>

            <div class="mb-6">
                <label for="appearances" class="mb-2 inline-block text-lg">Appearances (plus subs)</label>
                <input type="number" class="w-full rounded border border-gray-200 p-2" name="appearances" />
            </div>

            <div class="mb-6">
                <label for="goals" class="mb-2 inline-block text-lg">Goals</label>
                <input type="number" class="w-full rounded border border-gray-200 p-2" name="goals" />
            </div>



            <div class="mb-6">
                <label for="wikipedia_link" class="mb-2 inline-block text-lg">
                    Wikipedia Link
                </label>
                <input type="url" class="w-full rounded border border-gray-200 p-2" name="wikipedia_link" />
            </div>

            <h3 class="mb-2 inline-block text-lg">Positions</h3>

            <div class="mb-6 flex">
                <x-checkbox.unordered-list>
                    <x-checkbox.list>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='GK' name='tags_positions[]' value='GK' />
                            <x-checkbox.label label='GK' />
                        </x-checkbox.card>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='FB' name='tags_positions[]' value='FB' />
                            <x-checkbox.label label='FB' />
                        </x-checkbox.card>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='CB' name='tags_positions[]' value='CB' />
                            <x-checkbox.label label='CB' />
                        </x-checkbox.card>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='DM' name='tags_positions[]' value='DM' />
                            <x-checkbox.label label='DM' />
                        </x-checkbox.card>
                    </x-checkbox.list>
                </x-checkbox.unordered-list>
                <x-checkbox.unordered-list>
                    <x-checkbox.list>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='CM' name='tags_positions[]' value='CM' />
                            <x-checkbox.label label='CM' />
                        </x-checkbox.card>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='AM' name='tags_positions[]' value='AM' />
                            <x-checkbox.label label='AM' />
                        </x-checkbox.card>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='WG' name='tags_positions[]' value='WG' />
                            <x-checkbox.label label='WG' />
                        </x-checkbox.card>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='CF' name='tags_positions[]' value='CF' />
                            <x-checkbox.label label='CF' />
                        </x-checkbox.card>
                    </x-checkbox.list>
                </x-checkbox.unordered-list>

            </div>

            <h3 class="mb-2 inline-block text-lg">Seasons Played for HTAFC</h3>

            <div class="mb-6 flex">
                <x-checkbox.unordered-list>
                    <x-checkbox.list>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='1999/00' name='tags_seasons[]' value='1999/00' />
                            <x-checkbox.label label='1999/00' />
                        </x-checkbox.card>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='2000/01' name='tags_seasons[]'
                                value='2000/01' />
                            <x-checkbox.label label='2000/01' />
                        </x-checkbox.card>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='2001/02' name='tags_seasons[]'
                                value='2001/02' />
                            <x-checkbox.label label='2001/02' />
                        </x-checkbox.card>
                        <x-checkbox.card>
                            <x-checkbox.input type='checkbox' id='2002/03' name='tags_seasons[]'
                                value='2002/03' />
                            <x-checkbox.label label='2002/03' />
                        </x-checkbox.card>
                    </x-checkbox.list>
                </x-checkbox.unordered-list>
            </div>



            {{-- <div class="mb-6">
                <label for="photo" class="mb-2 inline-block text-lg">
                    Company Logo
                </label>
                <input type="file" class="w-full rounded border border-gray-200 p-2" name="photo" />
            </div> --}}

            <div class="mb-6">
                <label for="description" class="mb-2 inline-block text-lg">
                    Job Description
                </label>
                <textarea class="w-full rounded border border-gray-200 p-2" name="description" rows="10"
                    placeholder="Brief description (not needed)"></textarea>
            </div>

            <div class="mb-6">
                <button class="bg-laravel rounded py-2 px-4 text-white hover:bg-black">
                    Create Player
                </button>
                <a href="/" class="ml-4 text-black"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
