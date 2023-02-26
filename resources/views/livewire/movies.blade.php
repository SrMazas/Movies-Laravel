<div class="p-2 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <div class="mt-4 text-2xl font-medium text-gray-900">
        <div>Movies</div>
    </div>
    <div class="mt-3">
        <div class="flex justify-between">
            <div>
                <input wire:model.debounce.300ms="search" type="search" placeholder="Search" class="shadow appear" name="">
            </div>
            <div class="mr-2">
                <input type="checkbox" class="mr-2 leading.tight" name="" wire:model="box_office"/> Now at the Box Office
            </div>
        </div>

        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">
                        <div class="flex items-center">Id</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">Name</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">Genre</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">Duration</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">Director</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex items-center">Box Office</div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td class="rounded border px-4 py-2">{{ $movie->id }}</td>
                        <td class="rounded border px-4 py-2">{{ $movie->name }}</td>
                        <td class="rounded border px-4 py-2">{{ $genres->find($movie->genre_id)->name }}</td>
                        <td class="rounded border px-4 py-2">{{ $movie->duration }}</td>
                        <td class="rounded border px-4 py-2">{{ $movie->director }}</td>
                        <td class="rounded border px-4 py-2">{{ $movie->box_office ? 'Yes' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $movies }}</div>
</div>
