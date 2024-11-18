<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1>Selamat Datang!</h1>
      <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe iure ut consequatur quaerat. Quibusdam at velit iusto repudiandae pariatur quisquam debitis quaerat qui, nesciunt expedita optio sed unde a aspernatur architecto incidunt provident obcaecati iure corporis id quis tenetur laborum voluptatem. Adipisci atque praesentium, accusamus eaque ea odit dolorum vero debitis consequatur enim corrupti dolores at unde aliquam, laudantium fuga reprehenderit nisi? Illo beatae hic quo odit cumque, perferendis id quaerat explicabo facere laudantium soluta dolorem excepturi impedit obcaecati facilis repellat a sit unde. Quas alias optio dolorum perspiciatis id, ab, voluptates, earum fugit cum omnis aliquam facilis itaque esse.</b>
    </div>
  </div>
  <div class="row justify-content-center mt-3">
    <div class="col-md-4 text-center">
      <img src="/img/book.jpg" alt="book" class="img-fluid my-img">
      <h3 class="mt-3">Nama Pengguna: <i>Dwi Bagus Anggoro</i></h3>
      <p><b>NIM: 22MI0058</b></p>
      <p><b>Program Studi:</b> Manajemen Informatika</p>
    </div>
  </div>
  <!-- Tambahkan tabel di bawah gambar -->
  <div class="row justify-content-center mt-4">
    <div class="col-md-8">
      <table class="table table-striped table-bordered">
        <tbody>
          <tr>
            <td>NIM</td>
            <td>Program Studi</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
          </tr>
          <tr>
            <td>22MI0058</td>
            <td>Manajemen Informatika </td>
            <td>Jl. Kebon Jeruk</td>
            <td>Laki Laki</td>
          </tr>
          <tr>
            <td>22MI0058</td>
            <td>Manajemen Informatika </td>
            <td>Jl. Kebon Jeruk</td>
            <td>Laki Laki</td>
          </tr>
          <tr>
            <td>22MI0058</td>
            <td>Manajemen Informatika </td>
            <td>Jl. Kebon Jeruk</td>
            <td>Laki Laki</td>
          </tr>
          <tr>
            <td>22MI0058</td>
            <td>Manajemen Informatika </td>
            <td>Jl. Kebon Jeruk</td>
            <td>Laki Laki</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row justify-content-center mt-2">
    <div class="col-md-6 text-center">
      <a href="" class="btn btn-warning">Edit</a>
      <a href="" class="btn btn-success">Lihat Profile</a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>