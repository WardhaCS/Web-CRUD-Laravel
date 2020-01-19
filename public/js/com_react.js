'use strict';

class IncorporationForm extends React.Component {
  constructor() {
    super();
    this.state = {
      shareholders: [{ name: 'Wisnu' }, { name: 'Wardha' }],
    };
  }
  
  handleShareholderNameChange = (idx) => (evt) => {
    const newShareholders = this.state.shareholders.map((shareholder, sidx) => {
    if (idx !== sidx) return shareholder;
     return { ...shareholder, name: evt.target.value };
    });
    
    this.setState({ shareholders: newShareholders });
  }
  
  handleSubmit = (evt) => {
    const { name, shareholders } = this.state;
  }
  
  handleAddShareholder = (env) => {
    const { name, shareholders } = this.state;
    if (`${shareholders.length}` < 4){
    	this.setState({ shareholders: this.state.shareholders.concat([{ name: `` }]) });
    }else{
	alert(`1 Kamar asrama hanya dapat menampung maxsimal ${shareholders.length} penghuni`);
    }

  }
  
  handleRemoveShareholder = (idx) => () => {
    this.setState({ shareholders: this.state.shareholders.filter((s, sidx) => idx !== sidx) });
  }
  
render() {    
    return (
      <form onSubmit={this.handleSubmit} method="GET" action="/Asrama/store">
	<div class="form-group"><label for="l1">No Surat:</label>
	<input type="text" class="form-control" id="l1" name="kode"/>
	</div>
	
	<input type="hidden" name="pg" value={window.myId}/>
	
	<div class="form-group">	
	<label>Fakultas:</label>
	<select class="form-control" name="fakultas">
	<option value='Teknik Informatika'>Teknik Informatika</option>
	<option value='Teknik Elektro'>Teknik Elektro</option>
	<option value='Teknik Kimia'>Tenik Kimia</option>
	</select>
	</div>

	<div class="form-group">
	<label>Tanggal <u>CekIn</u>:&nbsp;<i class="fa fa-calendar"></i>&nbsp;</label>
	<input type="date" name="cekin"/>
	<label>&nbsp;&nbsp;<u>CekOut</u>:&nbsp;<i class="fa fa-calendar"></i>&nbsp;</label>
	<input type="date" name="cekout"/>
	</div>

        <table class="table table-bordered">
    	<thead>
      		<tr>
		<th>Nama</th>
		<th>Gander</th>
		<th>Penagung Jawab</th>
		<th>Remove</th>
		</tr>
	</thead>
	<tbody>
        {this.state.shareholders.map((shareholder, idx) => (
	<tr>
		<input type="hidden" name="en_answer" value={`${idx + 1}`}/>
        	<td><input name={`name[${idx + 1}]`} type="text" placeholder={`Penghuni #${idx + 1} `} value={shareholder.name} onChange={this.handleShareholderNameChange(idx)}/></td>
		<td><input type="radio" name={`gander[${idx + 1}]`} value="P" id="famele"/><label for="famele">&nbsp;Perempuan&nbsp;&nbsp;&nbsp;</label>
		<input type="radio" name={`gander[${idx + 1}]`} value="L" id="male"/><label for="male">&nbsp;Laki-laki  </label></td>
		<td>{window.myVar}</td>
        	<td><button type="button" onClick={this.handleRemoveShareholder(idx)} className="small">-</button></td>
	</tr>
        ))}</tbody>
	</table>
        <button type="button" onClick={this.handleAddShareholder} className="small">+ Tambah Orang</button>
        <button type="submit" class="btn btn-primary float-right">Proses</button>
      </form>
    )
  }
}


ReactDOM.render(<IncorporationForm/>, document.getElementById("add"));
