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
          <b>Nama Wilayah   : </b> Kabupaten Lampung Tengah <br>
          <b>Status   : </b> Resiko Tinggi <br>
          <b>Jumlah Positif   : </b> 200 <br> 
          <b>Jumlah Sembuh   : </b> 10 <br>
          <b>Jumlah Meninggal   : </b> 0 <br>
      </td>
    </tr>


  </tbody>
</table>

@endsection