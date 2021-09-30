<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home (Hero Edit)') }}
        </h2>
    </x-slot>

    @include('layouts.flash')

    <section>
        <div class="py-12">
            <div class="container sm:px-6 lg:px-8 flex justify-center mx-auto">
                <div class="w-full">
                    <div class="flex justify-end m-3">
                        <a href="{{ route('back-home') }}">
                            <button
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                type="submit">Retour</button>
                        </a>
                    </div>
                    <form action="/homeHero/{{ $edit->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="border-b border-gray-200 shadow">
                            <table class="w-full divide-y divide-gray-300 ">
                                <thead class="bg-gray-50">
                                    <tr>
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
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-3">
                                            <div class="text-sm text-gray-900">
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    type="text" name="titre_pt_1" value="{{ $edit->titre_pt_1 }}">
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="text-sm text-gray-900">
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    type="text" name="titre_pt_2" value="{{ $edit->titre_pt_2 }}">
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="text-sm text-gray-900">
                                                <textarea
                                                    class="resize-y border rounded-md shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    name="sous_titre">{{ $edit->sous_titre }}</textarea>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="text-sm text-gray-900">
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    type="file" name="image">
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="flex justify-end">
                                                <button
                                                    class="bg-blue-400 hover:bg-blue-200 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                                    type="submit">Save</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
