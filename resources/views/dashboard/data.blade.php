@extends('layout')
@section('content')
{{--
session_start();
require_once '../config/db.laptop';

if (!isset($SESSION['id_user'])) {
    header('Location: ../index.php');
}

$sql = "SELECT *FROM barang LEFT JOIN users ON barang.id_user = users.id_iser";
$query =$conn->query($sql);
$data_barang = $query->fetch_all(MYSQLI_ASSOC);

$no = 1; require_once 'includes/header.php';

if(!isset($_GET['p'])) {
    require_once'includes/data.;
}
?> --}}
  <!-- jumlah -->
  <div class="container " style="margin-top: 75px;">

    <div class="count row text-center justify-content-center"> 
        <div class="col-md-3">   
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color: rgb(172, 186, 255)">
                    <h5 class="card-title">Data Peminjaman</h5>
                    <p class="card-text">Jumlah yang dipinjam</p>
                    <h4>{{$project->where('retdate', '=', null)->count()}}</h4>
                    <a href="dashboard.data" class="card-link">Lihat data</a>
                </div>
            </div> 
        </div>
        <div class="col-md-4">   
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color: rgb(172, 186, 255)">
                    <h5 class="card-title">Data Peminjaman</h5>
                    <p class="card-text">Jumlah yang dikembalikan</p>
                    <h4>{{$project->where('retdate', '!=', null)->count()}}</h4>
                    <a href="dashboard.peminjaman" class="card-link">Lihat data </a>
                </div>
            </div> 
        </div>
    </div>
   </div>
  {{-- end jumlah --}}
<div style="margin-top: 50px">
<table class="table justify-content-center">
    <thead style="background-color: rgba(132, 151, 249, 0.768)">
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIS</th>
        <th scope="col">Name</th>
        <th scope="col">Region</th>
        <th scope="col">Purpores</th>
        <th scope="col">Ket</th>
        <th scope="col">Date</th>
        <th scope="col">Return Date</th>
        <th scope="col">Teacher</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($project   as $number => $laptop)
        <tr>
        <th scope="row">{{$number +1}}</th>
        <td>{{$laptop['nis']}}</td>
        <td>{{$laptop['name']}}</td>
        <td>{{$laptop['region']}}</td>
        <td>{{$laptop['purposes']}}</td>
        <td>{{$laptop['ket']}}</td>
        <td>{{$laptop['date']}}</td>
        <td>{{$laptop['retdate']}}</td>
        <td>{{$laptop['teacher']}}</td>
          <td>
          <button class="bg-transparent" style="border: none" ><a href="{{route('delete', $laptop->id)}}" style="color: rgb(229, 83, 83)"><i class="fa-solid fa-trash"></i></a></button>
          <button class="bg-transparent ms-2" style="border: none"  data-bs-toggle="modal" data-bs-target="#edit{{$laptop->id}}"><a href="/done/{{$laptop->id}}"> <i class="fas fa-check" style="color: rgb(93, 204, 235)"></i></a></button>

          

          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
