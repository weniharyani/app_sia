[20.24, 7/6/2024] +62 813-9694-8661: <?php
if(isset($_POST['submit'])){
session_start();
include_once('../../koneksi.php');
$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_baru = $_POST['password_baru'];
$password_ulang = $_POST['password_ulang'];
if(empty($password)) {
$query = "UPDATE tbl_pengguna SET nama_lengkap='$nama_lengkap',
email='$email' WHERE username='$username'";
$exec = mysqli_query($koneksi, $query);
if($exec){
$_SESSION['pesan'] = "Data profile telah diperbaharui";
header('location:../../dashboard.php?modul=profile');
}else{
$_SESSION['pesan'] = "Data profile gagal diperbaharui"; header('location:../../dashboard.php?modul=profile');
}
}else{
$query = "SELECT * FROM tbl_pengguna WHERE user…
[20.24, 7/6/2024] +62 813-9694-8661: profil
[20.24, 7/6/2024] +62 813-9694-8661: inpo login n logout
[20.25, 7/6/2024] +62 813-9694-8661: <div class="card mb-3">
<div class="card-body">
<form action="" method="post">
<div class="row mb-3">
<div class="col-md-6">
<label for="invoice" class="form-label">Invoice</label>
<input type="text" class="form-control" name="invoice">
</div>
<div class="col-md-6">
<label for="tanggal" class="form-label">Tanggal</label>
<input type="date" class="form-control" name="tanggal">
</div>
</div>
<div class="row mb-3"> 
<div class="col-md-6">
<label for="total" class="form-label">Total</label>
<div class="input-group">
<span class="input-group-text">Rp.</span>
<input type="number" class="form-control" name="total">
</div>
</div>
<div class="col-md-6">
<label for="keterangan" class="form-label">Keterangan</label>
<input type="text" class="form-control" name="keterangan">
</div>
</div>
<hr class="text-secondary">
<div class="text-end">
<button type="reset" class="btn btn-secondary">Reset</button>
<button type="submit" class="btn btn-primary">Simpan</button>
</div>
</form>
</div>
</div>
<div class="card">
<div class="card-header">
<h3>Data Pembayaran</h3>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>#</th>
<th>Invoice</th>
<th>Tanggal</th>
<th>Total</th>
<th>Keterangan</th>
<th><i class="bi bi-gear-fill"></i></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>BY110324</td>
<td>11/03/2024</td>
<td>Rp. 1.000.000,-</td>
<td>Pembayaran tagihan indihome</td>
<td>
<a href="#editPembayaran" class="text-decoration-none" data-
bs-toggle="modal">
<i class="bi bi-pencil-square text-success"></i>
</a>
<a href="" class="text-decoration-none">
<i class="bi bi-trash text-danger"></i>
</a>
</td>
<!-- Modal -->
<div class="modal fade" id="editPembayaran" tabindex="-1" aria-
labelledby="exampleModalLabel" aria-hidden="true">
<form action="" method="post">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5"
id="exampleModalLabel">Edit Data Pembayaran</h1>
<button type="button" class="btn-close" data-bs-
dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="row mb-3">
<div class="col-md-6">
<label for="invoice" class="form-
label">Invoice</label>
<input type="text" class="form-control"
name="invoice" value="BY110324" disabled>
</div>
<div class="col-md-6">
<label for="tanggal" class="form-
label">Tanggal</label>
<input type="date" class="form-control"
name="tanggal" value="2024-03-11">
</div>
</div>
<div class="row mb-3">
<div class="col-md-6">
<label for="total" class="form-
label">Total</label>
<div class="input-group">
<span class="input-group-text">Rp.</span>
<input type="number" class="form-control"
name="total" value="1000000">
</div>
</div>
<div class="col-md-6">
label">Keterangan</label>
<label for="keterangan" class="form-
<input type="text" class="form-control"
name="keterangan" value="Pembayaran tagihan indihome">
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary"
data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-
primary">Simpan</button>
</div>
</div>
</div>
</form>
</div>
</tr>
<tr>
<td>2</td>
<td>BY100324</td>
<td>10/03/2024</td>
<td>Rp. 900.000,-</td>
<td>Pembayaran tagihan listrik</td>
<td>
<a href="" class="text-decoration-none">
</a>
<i class="bi bi-pencil-square text-success"></i>
<a href="" class="text-decoration-none">
<i class="bi bi-trash text-danger"></i>
</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>