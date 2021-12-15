@extends('layout.admin')

@section('title', 'Admin | Edit data')

@section('mainContent')

<div class="d-flex align-items-center justify-content-center" style="margin-top: 5%;">

    <table width="100%">
        <tr>
            <td>Jumlah</td>
            <td>Kabupaten</td>
            <td>Keterangan</td>
        </tr>
        
        <form action="" method="POST">

        <tr>
            <td>
                <input type="text" class="form-control" name="positif" value="3">
            </td>
            <td>Lampung Barat</td>
            <td>Positif</td>
        </tr>

        <tr>
            <td>
                <input type="text" class="form-control" name="positif" value="276">
            </td>
            <td>Lampung Barat</td>
            <td>Sembuh</td>
        </tr>

        <tr>
            <td>
                <input type="text" class="form-control" name="positif" value="70">
            </td>
            <td>Lampung Barat</td>
            <td>Meninggal</td>
        </tr>
        <br>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button type="submit" class="btn text-white" id="btnSearch" style="background-color: #4366A3;" name="simpan">SIMPAN</button>
            </td>
        </tr>

        </form>

    </table>

</div>

@endsection