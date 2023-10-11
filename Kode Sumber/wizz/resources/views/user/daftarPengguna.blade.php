<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>

  

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-0">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{route('user.registrasi')}}" class="pb-8">
                        <button class="pb-5">Registrasi User</button>
                        </a>
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Full Name
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Email
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Username
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Address
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Birthdate
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Phone Number
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    agama
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    jenis_kelamin
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                            @foreach ($users as $daftarPengguna)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $daftarPengguna->fullname }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $daftarPengguna->email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $daftarPengguna->username }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $daftarPengguna->address }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $daftarPengguna->birthdate }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $daftarPengguna->phoneNumber }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        {{ $daftarPengguna->agama }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        @if ($daftarPengguna->jenis_kelamin == 0)
                                          <span>Pria</span>  
                                        @else
                                          <span>Wanita</span>  
                                        @endif

                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-left">
                                        <div class="flex items-center">
                                            <a href="" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-300 dark:hover:text-indigo-500 border border-indigo-600 rounded px-2 py-1">Edit</a>
                                            <a href="{{ route('user.infoPengguna', $daftarPengguna) }}" class="text-green-600 hover:text-green-900 ml-2 dark:text-green-300 dark:hover:text-green-500 border border-green-600 rounded px-2 py-1">View</a>
                                            <a href="" class="text-red-600 hover:text-red-900 ml-2 dark:text-red-300 dark:hover:text-red-500 border border-red-600 rounded px-2 py-1">Delete</a>
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
</x-app-layout>

<!-- Wijdan Ardra Fulvian 6706223137 46-04 -->