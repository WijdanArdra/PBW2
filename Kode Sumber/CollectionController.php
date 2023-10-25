<?php
namespace App\Http\Controllers;

use App\Models\Collection;
use App\Http\Requests\UpdateCollectionRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\CollectionsDataTable;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CollectionsDataTable $dataTable)
    {
        return $dataTable->render('koleksi.daftarKoleksi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("koleksi.registrasi");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaKoleksi' => ['required', 'string', 'max:255', 'unique:collections'],
            'jenisKoleksi' => ['required', 'gt:0'],
            'jumlahKoleksi' => ['required', 'gt:0']
        ],
        [
            'nama.unique' => 'Nama koleksi tersebut sudah ada'   
        ]);
    
        $collection = Collection::create([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi
        ]);
        // Assuming CollectionsDataTable has a static insert method
        
        DB::table('collections')->insert($collection);
        return redirect()->route("koleksi.daftarKoleksi");
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return view("koleksi.infoKoleksi", compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
    // Your logic to show the edit form or perform other actions
    return view('koleksi.editKoleksi', compact('collection'));
    }

    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Collection $collection)
    {
        // dd($request->all());
    $request->validate([
        'namaKoleksi' => ['required', 'string'],
        'jenisKoleksi' => ['required'],
        'jumlahKoleksi' => ['required']
    ]);

    DB::table("collections")->where('id', $request->id)->update([
        'namaKoleksi' => $request->namaKoleksi,
        'jenisKoleksi' => $request->jenisKoleksi,
        'jumlahKoleksi' => $request->jumlahKoleksi,
    ]);

    return redirect()->route('koleksi.daftarKoleksi')->with('success', 'Koleksi Sudah Terupdate.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        //
    }
}

// Wijdan Ardra Fulvian 6706223137 46-04