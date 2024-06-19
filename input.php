<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-=device-width, initial-scale=1.0">
  <title>Form Pendaftaran Event</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form method="POST" action="hasilkirim.php">
    <table width="400" align="center" cellpadding="2" cellspacing="2">
      <h1>Registrasi</h1>
      <tr>
        <td width="130">Email</td>
        <td><input type="email" name="email" placeholder="Masukkan email Anda"></td>
      </tr>
      <tr>
        <td width="130">Nama Lengkap</td>
        <td><input type="text" name="nama" placeholder="Masukkan nama lengkap Anda"></td>
      </tr>
      <tr>
        <td width="130">Jenis Kelamin</td>
         <td>
          <select name="jeniskelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </td>
      </tr>
      <tr>
        <td width="130">Tanggal Lahir</td>
        <td><input type="date" name="tgllahir"></td>
      </tr>
      <tr>
        <td width="130">No Telepon</td>
        <td><input type="text" name="notelepon" placeholder="Masukkan no telepon Anda"></td>
      </tr>
      <tr>
        <td width="130">Alamat</td>
        <td>
          <select name="alamat">
            <option value="Jakarta">Jakarta</option>
            <option value="Bekasi">Bekasi</option>
            <option value="Tangerang">Tangerang</option>
          </select>
        </td>
      </tr>
      <tr>
        <td width="130">Username</td>
        <td><input type="text" name="username" placeholder="Masukkan username Anda"></td>
      </tr>
      <tr>
        <td width="130">Password</td>
        <td><input type="password" name="password" placeholder="Masukkan password Anda"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="Daftar">
        </td>
      </tr>
    
    </table>
  </form>
</body>
</html>