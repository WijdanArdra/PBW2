{{-- 6706223137 Wijdan Ardra Fulvian 46-04 --}}

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Detail Transaksi') }}
      </h2>
  </x-slot>

  <script type="text/javascript">
    $(document).ready(function () {
        $('.yajra-datatable-transactions').DataTable({
          ajax: '{{ url("getAllDetailTransactions") }}'+"/"+{{ $transactions->id }},
          serverSide: false,
          processing: true,
          deferRender: true,
          type: 'GET',
          destroy:true,
          columns: [
            {data:'id', name: 'id'},
            {data:'koleksi', name: 'koleksi'},
            {data:'tanggalPinjam', name: 'tanggalPinjam'},
            {data:'tanggalKembali', name: 'tanggalKembali'},
            {data:'status', name: 'status'},
            {data:'action', name: 'action'}
          ]
      });
    });
  </script>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                {{-- <div>
                  <x-input-label for="peminjam" :value="__('Peminjam')" />
  
                  <x-text-input id="peminjam" class="block mt-1 w-full" type="text" name="peminjam" :value="{{ $transactions->fullnamePeminjam }}" autocomplete="off" readonly/>
  
                  <x-input-error :messages="$errors->get('peminjam')" class="mt-2" />
                </div>
                <div>
                  <x-input-label for="petugas" :value="__('Petugas')" />
  
                  <x-text-input id="petugas" class="block mt-1 w-full" type="text" name="petugas" :value="{{ $transactions->fullnamePetugas }}" autocomplete="off" readonly/>
  
                  <x-input-error :messages="$errors->get('petugas')" class="mt-2" />
                </div> --}}
              
              <div class="container">
                  <div class="row form-group">
                    <label for="peminjam" class="form-label">Peminjam</label>
                    <input type="text" name="peminjam" id="peminjam" class="form-control" autocomplete="off" value="{{ $transactions->fullnamePeminjam }}" readonly>
                  </div>
                  <div class="row form-group">
                    <label for="petugas" class="form-label">Petugas</label>
                    <input type="text" name="petugas" id="petugas" class="form-control" autocomplete="off" value="{{ $transactions->fullnamePetugas }}" readonly>
                  </div>
                  <div class="row form-group">
                    <table class="table table-bordered yajra-datatable-transactions">
                      <thead>
                          <tr>
                              <th>No</th>  
                              <th>Koleksi</th>
                              <th>Tanggal Pinjam</th>  
                              <th>Tanggal Kembali</th>  
                              <th>Status</th>
                              <th>Opsi</th>  
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
                  </div>
                  
              </div>
            </div>
          </div>
      </div>
  </div>
</x-app-layout>
