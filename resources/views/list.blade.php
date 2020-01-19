@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Check') }}</div>

                <div class="card-body">
		  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>Kode</th>
        <th>Penangug Jawab</th>
        <th>Penghuni</th>
	<th>Hari</th>
	<th>Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($ch as $l)
      <tr>
        <td>{{$l->kode}}</td>
        <td>{{$l->name}}</td>
        <td>{{$l->nama}}</td>
	<td>{{$l->Hari}}</td>
	<td>
		 <a href="/Asrama/pdf/{{ $l->kode}}" class="btn btn-primary">Cetak</a>
		 <button type="button" class="btn btn-primary" data-toggle="modal" data-target=#{{$l->name}}{{$l->kode}}><i class="fa fa-search"></i>Edit</button>
                 <a href="/Asrama/check_hapus/{{ $l->kode}}/{{$l->name}}" class="btn btn-danger">Hapus</a>
	</td>
      </tr>
@endforeach
    </tbody>
	  </table>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($pg as $p)
<div class="modal form-popup" id={{$p->name}}{{$p->kode}}>
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		<h3>Edit</h3>
            </div>
            <div class="modal-body">
<form method="GET" action="/Asrama/check_edit">
<input type="hidden" name="id" value={{$p->kode}}>
		 <table class="table table-bordered table-sm">
		<tbody>
		<tr>	<td colspan="1"><b>No Surat</b></td>
			<td colspan="3">{{$p->kode}}</td>
		</tr>
		<tr>
			<td colspan="1"><b>Penagung Jawab</b></td>
         	       <td colspan="3">{{$p->name}}</td>
		</tr>
		<tr><td colspan="2"><b>Cek IN</b></td><td colspan="2"><b>Cek OUT</b></td></tr>
		<tr>
		<td colspan="2"><input type="date" name="cekin" value={{$p->cekin}}></td>
		<td colspan="2"><input type="date" name="cekout" value={{$p->cekout}}></td>
		</tr>
		<tr><td colspan="4"><b>Fakultas</b></td></tr>
		<tr><td colspan="4">
			<select name="fakultas">
			  <option value="Teknik Informatika" @if($p->fakultas=='Teknik Informatika')selected @endif>Teknik Informatika</option>
			  <option value="Teknik Elektro" @if($p->fakultas=='Teknik Elektro')selected @endif>Teknik Elektro</option>
			  <option value="Teknik Fisika" @if($p->fakultas=='Teknik Fisika')selected @endif>Teknik Fisika</option>
			</select>
		</td>
		</tr>
		<tr><td colspan="4"><b>Penghuni</b></td></tr>
		{{$i=0}}
		<tr>		
		@foreach($pg as $t)
		@if($p->kode == $t->kode)
		<td><input type="text" name=penghuni[{{$i+=1}}] value={{$t->nama}}><input type="hidden" name=pgId[{{$i}}] value={{$t->id}}></td>
		@endif
		@endforeach
		<input type="hidden" name=limit value={{$i}}>
		</tr>
		<tr>
		{{$i=0}}
		@foreach($pg as $t)
                @if($p->kode == $t->kode)
                <td>
			 <select name=gen[{{$i+=1}}]>
                          <option value="L" @if($t->gander=='L')selected @endif>Laki-Laki</option>
                          <option value="P" @if($t->gander=='P')selected @endif>Perempuan</option>
                        </select>
		</td>
                @endif
                @endforeach
                </tr>
		</tbody>
		</table>
		<button type="submit" class="btn btn-primary">Update</button>
</form>
            </div>
        </div>
</div>
</div>
@endforeach
@endsection
