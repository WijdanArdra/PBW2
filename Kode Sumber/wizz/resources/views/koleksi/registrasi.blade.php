<x-guest-layout>
    <form method="POST" action="{{ route('koleksi.storeKoleksi') }}">
        @csrf
        <div class="mt-4">
            <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />
            <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" :value="old('namaKoleksi')" required autocomplete="namaKoleksi" />
            <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
        </div>


        <!-- Jenis Kelamin -->
        <div class="mt-4">
            <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />
            <select id="jenisKoleksi" type="tinyInteger" name="jenisKoleksi" :value="old('jenisKoleksi')" required autofocus autocomplete="gender" class="w-full mt-2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                class="w-full mt-2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                <option disabled selected>Pilih Jenis Koleksi</option>
                <option value="1" {{ old('jenisKoleksi') == '1' ? 'selected' : '' }}>Buku</option>
                <option value="2" {{ old('jenisKoleksi') == '2' ? 'selected' : '' }}>Majalah</option>
                <option value="3" {{ old('jenisKoleksi') == '3' ? 'selected' : '' }}>Cakram Digital</option>
            </select>
        </div>

        <div class="mt-4">
            <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />
            <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi" :value="old('jumlahKoleksi')" required autocomplete="jumlahKoleksi" />
            <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<!-- Wijdan Ardra Fulvian 6706223137 46-04 -->