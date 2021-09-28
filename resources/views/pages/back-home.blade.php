<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    
    <section>
        <h3 class="container">Hero Section</h3>
        <div class="py-12">
            <div class="container sm:px-6 lg:px-8 flex justify-center mx-auto">
                <div class="w-full">
                    <div class="border-b border-gray-200 shadow">
                        <table class="w-full divide-y divide-gray-300 ">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Titre partie 1
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Titre partie 2
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Sous-Titre
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Image
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-300">
                                @foreach ($heroes as $hero)
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-3 text-sm text-gray-500">
                                            {{ $hero->id }}
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="text-sm text-gray-900">
                                                {{ $hero->titre_pt_1 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="text-sm text-gray-900">
                                                {{ $hero->titre_pt_2 }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="text-sm text-gray-900 truncate ">
                                                {{ Str::limit($hero->sous_titre, 10, '...') }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="text-sm text-gray-900">
                                                {{ $hero->image }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="flex justify-end">
                                                <a href="homeHero/{{ $hero->id }}/edit">
                                                    <button
                                                        class="bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                                        type="submit">Edit</button>
                                                </a>
                                                <form action="homeHero/{{ $hero->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="bg-red-700 hover:bg-red-500 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                                        type="submit">X</button>
                                                </form>
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
    </section>
</x-app-layout>
