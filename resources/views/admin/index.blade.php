@extends('layout.admin')

@section('title', 'Admin | Dashboard')

@section('mainContent')

<div style="margin-left: 5%;">
    <form action="" method="GET">
        @csrf
        <div class="form-group" id="search">
            <div class="row">
                <div class="col-10">
                    <input type="text" class="form-control" id="search" name="search" placeholder="Masukan nama kabupaten" autofocus>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn text-white" id="btnSearch" style="background-color: #4366A3;"><i class="fas fa-search"></i> Cari</button>
                </div>
            </div>
        </div>
    </form>
</div>  


<table class="table table-bordered mt-5" style="border:1px solid #4366A3;">
  <thead style="background-color: #4366A3;">
    <tr class="text-white text-center">
      <th scope="col">No.</th>
      <th scope="col">Nama Kabupaten</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="text-center">1</th>
      <td>Lampung Selatan</td>
      <td>Resiko Sedang</td>
      <td>
          <div class="d-flex justify-content-center">
              <a href="{{url('/detail')}}" style="margin-right: 8px;">
                  <img src="/img/detail.png" alt="">
              </a>
              <a href="{{url('/edit/lampungSelatan')}}" style="margin-right: 8px;">
                  <img src="/img/edit.png" alt="">
              </a>
              <a href="" onclick="return confirm('Ingin menghapus data ini ?')">
                  <img src="/img/hapus.png" alt="">
              </a>
          </div>
      </td>
    </tr>

    <tr>
      <th scope="row" class="text-center">2</th>
      <td>Bandar Lampung</td>
      <td>Resiko Tinggi</td>
      <td>
          <div class="d-flex justify-content-center">
              <a href="{{url('/detail')}}" style="margin-right: 8px;">
                  <img src="/img/detail.png" alt="">
              </a>
              <a href="{{url('/edit/bandarLampung')}}" style="margin-right: 8px;">
                  <img src="/img/edit.png" alt="">
              </a>
              <a href="" onclick="return confirm('Ingin menghapus data ini ?')">
                  <img src="/img/hapus.png" alt="">
              </a>
          </div>
      </td>
    </tr>

    <tr>
      <th scope="row" class="text-center">3</th>
      <td>Mesuji</td>
      <td>Resiko Rendah</td>
      <td>
          <div class="d-flex justify-content-center">
              <a href="{{url('/detail')}}" style="margin-right: 8px;">
                  <img src="/img/detail.png" alt="">
              </a>
              <a href="{{url('/edit/mesuji')}}" style="margin-right: 8px;">
                  <img src="/img/edit.png" alt="">
              </a>
              <a href="" onclick="return confirm('Ingin menghapus data ini ?')">
                  <img src="/img/hapus.png" alt="">
              </a>
          </div>
      </td>
    </tr>

    <tr>
      <th scope="row" class="text-center">4</th>
      <td>Lampung Barat</td>
      <td>Resiko Sedang</td>
      <td>
          <div class="d-flex justify-content-center">
              <a href="{{url('/detail')}}" style="margin-right: 8px;">
                  <img src="/img/detail.png" alt="">
              </a>
              <a href="{{url('/edit/lampungBarat')}}" style="margin-right: 8px;">
                  <img src="/img/edit.png" alt="">
              </a>
              <a href="" onclick="return confirm('Ingin menghapus data ini ?')">
                  <img src="/img/hapus.png" alt="">
              </a>
          </div>
      </td>
    </tr>

    <tr>
      <th scope="row" class="text-center">5</th>
      <td>Lampung Utara</td>
      <td>Resiko Tinggi</td>
      <td>
          <div class="d-flex justify-content-center">
              <a href="{{url('/detail')}}" style="margin-right: 8px;">
                  <img src="/img/detail.png" alt="">
              </a>
              <a href="{{url('/edit/lampungUtara')}}" style="margin-right: 8px;">
                  <img src="/img/edit.png" alt="">
              </a>
              <a href="" onclick="return confirm('Ingin menghapus data ini ?')">
                  <img src="/img/hapus.png" alt="">
              </a>
          </div>
      </td>
    </tr>
  </tbody>
</table>
<script src="https://kit.fontawesome.com/dfa1cbbb7b.js" crossorigin="anonymous"></script>
@endsection