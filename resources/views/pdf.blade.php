@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-2 position-relative">
	@foreach($pr as $p)
	<img src="https://asrama.itb.ac.id/img/LOGO_ITB.png" wide="100px" height="100px" alt="...">
	</div>
	
  	<div class="col-md-8">
		<h1>Peminjaman Asrama</h1>
		<h4>JL. Genesha No.10 bandung</h4>
	</div>
	<div class="col-md-4"><p>{{$p->kode}}</p></div>
        <div class="col-md-6"><p>Tanggal3 januari 2020</p></div>
	
	 <div class="col-md-12">
		<p>Yang bertandatangan di bawah ini:</p>
		<p>Nama:{{$p->name}}</p>
		<p>Unit:{{$p->fakultas}}</p>
		</br>
		</br>
		<p>Sebagaimana penagung jawab dan peminjaman asrama atas nama:</p>
	</div>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Nama</th>
	      <th scope="col">Gender</th>
	      <th scope="col">Lama Tingal</th>
	      <th scope="col">Total Pembayaran</th>
	    </tr>
	  </thead>
	  <tbody>
	@foreach($ph as $h)
	    <tr>
	      <th>{{$h->nama}}</th>
	      <td>{{$h->gander}}</td>
	      <td>{{$p->Hari}} Hari</td>
	      <td>{{$p->Bayar}}</td>
	    </tr>
	@endforeach
	  </tbody>
	</table>
	<div class="col-md-12">
	<p>Bahwa orang tersebut melakukan peminjaman asrama dari tanggal {{$p->cekin}} sampai dengan {{$p->cekout}} dengan total pembayaran {{$p->Total}}
Demikian hal ini kami sampaikan. Atas perhatianya dan kerjasamanya. kami mengucapkan terimakasih.</p>
	</div>

	<div class="col-md-3">
	<p>Bandung, 3 Januari 2020</p>
	</br>
	</br>
	</br>
	<p>Anton</p>
	</div>
@endforeach
</div>
</div>
@endsection
