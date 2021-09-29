<div class="pt-4 pb-8">
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
                                Titre
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Text
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                        @foreach ($whyDowns as $whyDown)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-3">
                                    <div class="text-sm text-gray-900">
                                        {{ $whyDown->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-3">
                                    <div class="text-sm text-gray-900 truncate ">
                                        {{ $whyDown->titre }}
                                    </div>
                                </td>
                                <td class="px-6 py-3">
                                    <div class="text-sm text-gray-900 truncate ">
                                        {{ Str::limit($whyDown->text, 20, '...') }}
                                    </div>
                                </td>
                                <td class="px-6 py-3">
                                    <div class="flex justify-end">
                                        <a href="whyDownSection/{{ $whyDown->id }}">
                                            <button
                                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                                type="submit"><i class="bi bi-eye"></i></button>
                                        </a>
                                        <a href="whyDownSection/{{ $whyDown->id }}/edit">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                                type="submit"><i class="bi bi-pencil-square"></i></button>
                                        </a>
                                        <form action="/whyDownSection/{{ $whyDown->id }}">
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
                    <a href="whyDownSection/create">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-3 rounded-full"
                            type="submit"><i class="bi bi-plus-lg"></i></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
