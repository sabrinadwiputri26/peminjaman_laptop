@extends('layout')
@section('content')

  @if ($errors->any())
  <div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
        <li> {{$error}} </li>
    @endforeach  
  </ul>  
  </div>    

@endif 
  @csrf 
<div class="wrapper">
    <div class="title">
    Tambah Data
    </div>
    <div class="form">  
      <form action="/store" method="POST">
        @csrf  
       <div class="inputfield">
          <label>NIS</label>
          <input type="string" name="nis" class="input">
       </div>  
        <div class="inputfield">
          <label>NAMA</label>
          <input type="text" class="input" name="name">
       </div>  

        <div class="inputfield">
          <label>RAYON</label>  
          <div class="custom_select">
            <select name="region">
              <option value="">Select</option>
              <option value="" hidden>select</option>
              <option value="Ciawi 1">Ciawi 1</option>
              <option value="Ciawi 2">Ciawi 2</option>
              <option value="Ciawi 3">Ciawi 3</option>
              <option value="Ciawi 4">Ciawi 4</option>
              <option value="Ciawi 5">Ciawi 5</option>
              <option value="Cibedug 1">Cibedug 1</option>
              <option value="Cibedug 2">Cibedug 2</option>
              <option value="Cibedug 3">Cibedug 3</option>
              <option value="Cicurug 1">Cicurug 1</option>
              <option value="Cicurug 2">Cicurug 2</option>
              <option value="Cicurug 3">Cicurug 3</option>
              <option value="Cicurug 4">Cicurug 4</option>
              <option value="Cicurug 5">Cicurug 5</option>
              <option value="Cicurug 6">Cicurug 6</option>
              <option value="Cicurug 7">Cicurug 7</option>
              <option value="Cisarua 1">Cisarua 1</option>
              <option value="Cisarua 2">Cisarua 2</option>
              <option value="Cisarua 3">Cisarua 3</option>
              <option value="Cisarua 4">Cisarua 4</option>
              <option value="Cisarua 5">Cisarua 5</option>
              <option value="Cisarua 6">Cisarua 6</option>
              <option value="Sukasari 1">Sukasari 1</option>
              <option value="Sukasari 2">Sukasari 2</option>
              <option value="Tajur 1">Tajur 1</option>
              <option value="Tajur 2">Tajur 2</option>
              <option value="Tajur 3">Tajur 3</option>
              <option value="Tajur 4">Tajur 4</option>
              <option value="Tajur 5">Tajur 5</option>

            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Keterangan</label>
          <input type="text" class="input" name="purposes">
       </div> 
      <div class="inputfield">
          <label>Tujuan</label>
          <textarea class="textarea" name="ket"></textarea>
       </div> 
       <div class="inputfield">
        <label>Tanggal</label>
        <input type="date" class="input" name="date">
     </div> 
      <div class="inputfield">
          <label>Teacher Name</label>
          <input type="text" class="input" name="teacher">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
          </label>
       </div> 
      <div class="inputfield">
        <input type="submit" value="submit" class="btn">
      </div>
    </form>
    </div>
</div>	
</body>
</html>
@endsection