1. <?php
2. $query = "SELECT * FROM tbl_pengguna WHERE username='$_SESSION[username]'";
3. $exec = mysqli_query($koneksi, $query);
4. $data = mysqli_fetch_array($exec);
5. ?>
6. <div class="card mb-3">
7. <div class="card-body">
8. <form action="modul/profile/aksi_profile.php" method="post">
9. <div class="row">
10. <div class="mb-3 col-md-4">
11. <label for="username" class="form-label">Username</label>
12. <input type="text" class="form-control" name="username" value="<?=
$data['username'] ?>" readonly>
13. </div>
14. <div class="mb-3 col-md-4">
15. <label for="nama_lengkap" class="form-label">Nama lengkap</label>
16. <input type="text" class="form-control" name="nama_lengkap"
value="<?= $data['nama_lengkap'] ?>">
17. </div>
18. <div class="mb-3 col-md-4">
19. <label for="email" class="form-label">Email</label>
20. <input type="email" class="form-control" name="email" value="<?=
$data['email'] ?>">
21. </div>
22. </div>
23. <div class="row">
24. <div class="mb-3 col-md-4">
25. <label for="password" class="form-label">Password</label>
26. <input type="password" class="form-control" name="password">
27. </div>
28. <div class="mb-3 col-md-4">
29. <label for="password_baru" class="form-label">Password
baru</label>
30. <input type="password" class="form-control" name="password_baru">
31. </div>
32. <div class="mb-3 col-md-4">
33. <label for="password_ulang" class="form-label">Ulangi
password</label>
34. <input type="password" class="form-control" name="password_ulang">
35. </div>
36. </div>
37. <hr class="text-secondary">
38. <div class="d-flex">
39. <span class="me-auto text-gray">
40. <?php
41. if(isset($_SESSION['pesan'])){
42. echo $_SESSION['pesan'];
43. unset($_SESSION['pesan']);
44. }
45. ?>
46. </span>
47. <button type="submit" name="submit" class="btn btnprimary">Perbaharui</button>
48. </div>
49. </form>
50. </div>
51. </div>
