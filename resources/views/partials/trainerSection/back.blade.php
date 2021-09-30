<div class="py-8">
    <div class="container sm:px-6 lg:px-8 flex justify-center mx-auto">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table class="w-full divide-y divide-gray-300 ">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Id
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Name
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Texte
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Lien...
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                        @foreach ($trainers as $trainer)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-3">
                                    <div class="text-sm text-gray-900">
                                        {{ $trainer->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-3">
                                    <div class="text-sm text-gray-900">
                                        {{ $trainer->name }}
                                    </div>
                                </td>
                                <td class="px-6 py-3">
                                    <div class="text-sm text-gray-900 truncate ">
                                        {{ Str::limit($trainer->texte, 20, '...') }}
                                    </div>
                                </td>
                                <td class="px-6 py-3">
                                    <div class="text-sm text-gray-900 truncate ">
                                        {{ Str::limit($trainer->link_linkedin, 20, '...') }}
                                    </div>
                                </td>
                                <td class="px-6 py-3">
                                    <div class="flex justify-end">
                                        <a href="trainerSection/{{ $trainer->id }}">
                                            <button
                                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                                type="submit"><i class="bi bi-eye"></i></i></button>
                                        </a>
                                        <a href="trainerSection/{{ $trainer->id }}/edit">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                                type="submit"><i class="bi bi-pencil-square"></i></button>
                                        </a>
                                        <form action="/trainerSection/{{ $trainer->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('back-home') }}">
                                                <button
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                                    type="submit"><i class="bi bi-trash-fill"></i></button>
                                            </a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex justify-center m-3">
                    <a href="trainerSection/create">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-3 rounded-full"
                            type="submit"><i class="bi bi-plus-lg"></i></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
