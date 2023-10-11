<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Info Koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Nama Koleksi
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Jenis Koleksi
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Jumlah Koleksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                       
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                     {{$collection->namaKoleksi}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        @if ($collection->jenisKoleksi == 1)
                                        <span>Buku</span>

                                        @elseif  ($collection->jenisKoleksi == 2)
                                            <span>Majalah</span>
                                        @else
                                        <span>Cakram Digital</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $collection->jumlahKoleksi }}
                                    </td>
                                   
                                </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Wijdan Ardra Fulvian 6706223137 46-04 -->