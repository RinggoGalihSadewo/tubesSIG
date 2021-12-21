@extends('layout.admin')

@section('title', 'Admin | Edit data')

@section('mainContent')

<h1>Nama Kabupaten</h1>
<div class="d-flex align-items-center justify-content-center" style="margin-top: 5%;">
    <table class="table">
        <th><b>Keterangan<b></th>
        <th><b>Jumlah</b></th>

        <form action="">

        <tr>
            <td>Positif</td>
            <td>
                <input type="text" class="form-control" name="positif" value="123">
            </td>
        </tr>

        <tr>
            <td>Sembuh</td>
            <td>
                <input type="text" class="form-control" name="sembuh" value="23">
            </td>
        </tr>

        <tr>
            <td>Meninggal</td>
            <td>
                <input type="text" class="form-control" name="meninggal" value="23">
            </td>
        </tr>
        
        <tr>
            <td collspan="2"></td>
            <td>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </td>
        </tr>
        </form>
    </table>
</div>

@endsection