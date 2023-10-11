<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Info Pengguna') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col space-y-4">
                        <div class="flex items-start">
                            <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Full Name:</div>
                            <div>{{ $user->fullname }}</div>
                        </div>
                        <div class="flex items-start">
                            <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Email:</div>
                            <div>{{ $user->email }}</div>
                        </div>
                        <div class="flex items-start">
                            <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Username:</div>
                            <div>{{ $user->username }}</div>
                        </div>
                        <div class="flex items-start">
                            <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Address:</div>
                            <div>{{ $user->address }}</div>
                        </div>
                        <div class="flex items-start">
                            <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Birthdate:</div>
                            <div>{{ $user->birthdate }}</div>
                        </div>
                        <div class="flex items-start">
                            <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Phone Number:</div>
                            <div>{{ $user->phoneNumber }}</div>
                        </div>
                        <div class="flex items-start">
                            <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">agama:</div>
                            <div>{{ $user->agama }}</div>
                        </div>
                        <div class="flex items-start">
                            <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">jenis_kelamin:</div>
                            <div>{{ $user->jenis_kelamin }}</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Wijdan Ardra Fulvian 6706223137 46-04 -->