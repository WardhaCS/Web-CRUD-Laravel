<!DOCTYPE html>
<html lang="en">
<head>
  <title>Print PDF</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

@foreach($pr as $p)
<div class="container-fluid">
  <div class="row content">

  <div class="row">
   	<div class="col-sm-1"><img style="float: left;" src="https://asrama.itb.ac.id/img/LOGO_ITB.png" wide="100px" height="100px" alt="...">
   	<div class="col-sm-11"><h1>Peminjaman Asrama</h1><h4>JL. Genesha No.10 bandung</h4></div>
  </div>

    <div class="row" style="margin-top: 20px;">
    	<div class="col-sm-1">{{$p->kode}}</div>
    	<div class="col-sm-11" style="text-align: right;">Tanggal {{$p->cekin}}</div>
    </div>

    <div class="col-sm-12">
	<p>Yang bertandatangan di bawah ini:</p>
		<p>Nama:{{$p->name}}</p>
		<p>Unit:{{$p->fakultas}}</p>
		</br>
		</br>
		<p>Sebagaimana penagung jawab dan peminjaman asrama atas nama:</p>
    </div>

    <div class="col-sm-12">
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
    </div>

    <div class="col-sm-12">
	<p>Bahwa orang tersebut melakukan peminjaman asrama dari tanggal {{$p->cekin}} sampai dengan {{$p->cekout}} dengan total pembayaran {{$p->Total}}
Demikian hal ini kami sampaikan. Atas perhatianya dan kerjasamanya. kami mengucapkan terimakasih.</p>
    </div>
	
    <div class="col-sm-12" style="float: right;">
	<p>Bandung, 20 Januari 2020</p>
	</br>
	</br>
	</br>
	</br>
	</br>
	<p style="margin-top:70px;">({{$p->name}})</p>
    </div>

  </div>
</div>
@endforeach
</body>
</html>

