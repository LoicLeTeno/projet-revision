<div class="py-8">
    <div class="container sm:px-6 lg:px-8 flex justify-center mx-auto">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table class="w-full divide-y divide-gray-300 ">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Titre
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Sous-titre
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                        @foreach ($popularTitles as $popularTitle)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-3">
                                    <div class="text-sm text-gray-900">
                                        {{ $popularTitle->titre }}
                                    </div>
                                </td>
                                <td class="px-6 py-3">
                                    <div class="text-sm text-gray-900">
                                        {{ $popularTitle->sous_titre }}
                                    </div>
                                </td>
                                <td class="px-6 py-3">
                                    <div class="flex justify-end">
                                        <a href="popularTitleSection/{{ $popularTitle->id }}">
                                            <button
                                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                                type="submit"><i class="bi bi-eye"></i></button>
                                        </a>
                                        <a href="popularTitleSection/{{ $popularTitle->id }}/edit">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                                type="submit"><i class="bi bi-pencil-square"></i></button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
