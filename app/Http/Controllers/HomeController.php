<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use \App\User;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function boking()
    {
	return view('boking');
    }
	
    public function store(Request $request)
    {
	$bokings=new \App\Boking;
        $bokings->kode=$request->kode;
        $bokings->penagungjawab=$request->pg;
        $bokings->fakultas=$request->fakultas;
        $bokings->cekin=$request->cekin;
        $bokings->cekout=$request->cekout;
        $bokings->save();
	
	$penghuni=new \App\Penghuni;
	for ($i = 1; $i <= $request->en_answer; $i++) {
        $boking[] = [
	    'kode_boking' => $request->kode,
            'nama' => $request->name[$i],
            'gander' => $request->gander[$i]
        ];
    }
        $penghuni::insert($boking);
	return redirect('/');

    }

   public function check()
   {
 	$check = DB::table('bokings')
            ->join('users', 'users.id', '=', 'bokings.penagungjawab')
	    ->join('penghuni', 'penghuni.kode_boking', '=', 'bokings.kode')
            ->select('bokings.kode', 'users.name', DB::raw("COUNT(penghuni.nama) as nama"), DB::raw("datediff(cekout,cekin) as Hari"))
	    ->groupBy('bokings.kode', 'bokings.cekout', 'bokings.cekin', 'users.name')
        ->get();
	
	 $edit = DB::table('bokings')
            ->join('users', 'users.id', '=', 'bokings.penagungjawab')
            ->join('penghuni', 'penghuni.kode_boking', '=', 'bokings.kode')
            ->select('bokings.kode', 'users.name', 'penghuni.nama','penghuni.gander','bokings.cekout', 'bokings.cekin','bokings.fakultas','penghuni.id')
        ->get();

	
	return view('list', ['ch' => $check,'pg' => $edit]);
//	return array_merge($edit);
   }
	
   public function check_edit(Request $request){
	 for($i=1;$i<=$request->limit;$i++){
	 DB::table('penghuni')
         ->where('id', $request->pgId[$i])
         ->update(['nama' => $request->penghuni[$i], 'gander' => $request->gen[$i]]);
	 }


	DB::table('bokings')
         ->where('kode', $request->id)
         ->update(['fakultas' => $request->fakultas, 'cekin' => $request->cekin, 'cekout' => $request->cekout]);

	return redirect('/Asrama/check');
//	return $request;
	 
   }

   public function check_hapus($id,$pg)
   {
	$del = "Delete " . trim($pg);
	DB::table('bokings')
         ->where('kode', $id)
         ->update(['penagungjawab' => $del]);

	return redirect('/Asrama/check');
   }

   public function list()
   {
	$pg = User::all();
    	return view('list', ['pg' => $pg]);
   }

   public function edit($id)
   {
	$pg = User::find($id);
        return view('edit', ['pg' => $pg]);
   }
   
  public function update($id, Request $request)
  {
    $this->validate($request,[
	   'name' => 'required',
	   'email' => 'required'
    ]);

    $pg = User::find($id);
    $pg->name = $request->name;
    $pg->email = $request->email;
    $pg->save();
    return redirect('/Asrama/list');
  }

    public function delete($id)
    {
    $pg = User::find($id);
    $pg->delete();
    return redirect('/Asrama/list');
    }

    public function chart()
   {
	$chartL=DB::table('bokings')
	 ->join('penghuni', 'bokings.kode', '=', 'penghuni.kode_boking')
	 ->select(DB::raw("COUNT(penghuni.gander) as jumlah"), DB::raw("YEAR(bokings.cekin) as year"))
   	 ->where('penghuni.gander', '=', 'L')
	 ->groupBy('year')
	->get();

	 $chartP=DB::table('bokings')
         ->join('penghuni', 'bokings.kode', '=', 'penghuni.kode_boking')
         ->select(DB::raw("COUNT(penghuni.gander) as jumlah"), DB::raw("YEAR(bokings.cekin) as year"))
         ->where('penghuni.gander', '=', 'P')
         ->groupBy('year')
        ->get();

	
	return view('chart', ['chL'=>$chartL, 'chP'=>$chartP]);
        //return array($chart);
    }
	
   public function pdf($id)
   {
	$pdf_data = DB::table('bokings')
            ->join('users', 'users.id', '=', 'bokings.penagungjawab')
	    ->join('penghuni', 'bokings.kode', '=', 'penghuni.kode_boking')
	    ->where('bokings.kode', '=', $id)
            ->select('bokings.kode', 'users.name', DB::raw("datediff(cekout,cekin) as Hari"), 'bokings.fakultas','bokings.cekin','bokings.cekout', DB::raw("datediff(cekout,cekin)*100000 as Bayar"), DB::raw("(COUNT(penghuni.nama)*100000)* datediff(cekout,cekin) as Total"))
	    ->groupBy('bokings.kode','users.name','bokings.cekout','bokings.cekin','bokings.fakultas')
        ->get();
	
	$penghuni = DB::table('penghuni')
	    ->where('kode_boking', '=', $id)
	    ->select('nama','gander')
	->get();
//	return $pdf_data;
//	return view('print', ['pr' => $pdf_data, 'ph' => $penghuni]);
	$pdf = PDF::loadview('print',['pr' => $pdf_data, 'ph' => $penghuni]);
	return $pdf->download('boking-asrama-pdf');
	
   }

}
