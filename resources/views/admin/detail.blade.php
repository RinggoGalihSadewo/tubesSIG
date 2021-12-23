@extends('layout.admin')

@section('title', 'Admin | Detail data')

@section('mainContent')

<table class="table table-bordered mt-5" style="border:1px solid #4366A3;">
  <thead style="background-color: #4366A3;">
    <tr class="text-white text-center">
      <th scope="col">Detail Data Persebaran COVID-19 Provinsi Lampung</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
          <b>Nama Wilayah   : </b> Kabupaten {{$wilayah}}<br>
          <b>Status   : </b> Resiko  {{$data['positif'] > 50 ? "Tinggi" : "Rendah"}} <br>
          <b>Jumlah Positif   : </b> {{$data['positif']}} <br> 
          <b>Jumlah Sembuh   : </b> {{$data['sembuh']}} <br>
          <b>Jumlah Meninggal   : </b> {{$data['meninggal']}} <br>
      </td>
    </tr>


  </tbody>
</table>

@endsection