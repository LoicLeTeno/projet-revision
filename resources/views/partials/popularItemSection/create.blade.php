<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Home (Popular Item Section Create)") }}
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
                    <form action="/popularItemSection" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="border-b border-gray-200 shadow">
                            {{-- Details --}}
                            <table class="w-full divide-y divide-gray-300 ">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Description
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 pt-3 pb-5">
                                            <div class="text-sm text-gray-900">
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    type="text" name="desp" value="{{ old('desp') }}">
                                            </div>
                                        </td>
                                        <td class="px-6 pt-3 pb-5">
                                            <div class="text-sm text-gray-900">
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    type="number" name="price" value="{{ old('price') }}">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- Texte --}}
                            <table class="w-full divide-y divide-gray-300 ">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Titre
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Texte
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 pt-3 pb-5">
                                            <div class="text-sm text-gray-900">
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    type="text" name="titre" value="{{ old('titre') }}">
                                            </div>
                                        </td>
                                        <td class="px-6 pt-3 pb-5">
                                            <div class="text-sm text-gray-900">
                                                <textarea
                                                    class="resize-y border rounded-md shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    name="text" >{{ old('text') }}</textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- Profil --}}
                            <table class="w-full divide-y divide-gray-300 ">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Nom
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Vue
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Like
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 pt-3 pb-5">
                                            <div class="text-sm text-gray-900">
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    type="text" name="name" value="{{ old('name') }}">
                                            </div>
                                        </td>
                                        <td class="px-6 pt-3 pb-5">
                                            <div class="text-sm text-gray-900">
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    type="number" name="view" value="{{ old('view') }}">
                                            </div>
                                        </td>
                                        <td class="px-6 pt-3 pb-5">
                                            <div class="text-sm text-gray-900">
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    type="number" name="love" value="{{ old('love') }}">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- Images --}}
                            <table class="w-full divide-y divide-gray-300 ">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Image Background
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Photo Profil
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 pt-3 pb-5">
                                            <div class="text-sm text-gray-900">
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    type="file" name="image">
                                            </div>
                                        </td>
                                        <td class="px-6 pt-3 pb-5">
                                            <div class="text-sm text-gray-900">
                                                <input
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    type="file" name="photo">
                                            </div>
                                        </td>
                                        <td class="px-6 pt-3 pb-5">
                                            <div class="flex justify-end">
                                                <button
                                                    class="bg-green-400 hover:bg-green-200 text-white font-bold py-2 px-4 mx-3 rounded-full"
                                                    type="submit">Create</button>
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
