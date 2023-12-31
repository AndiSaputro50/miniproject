<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-70 m-auto p-3">
        <table class="table table-striped">
  <thead>
      <th scope="col">Siswa</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">NISN</th>
      <th scope="col">Gender</th>
      <th scope="col">Kelas</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>

  <tbody class="table-group-divider">  <?php $no= 0; foreach ($siswa as $row) : $no++?>
  <tr>
      <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $no ?></td>
         <td class="whitespace-nowrap px-4 py-2 text-gray-700">
            <?php echo $row->nama_siswa ?></td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nisn ?></td>
         <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->gender ?>
         </td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
               <?php echo tampil_full_kelas_byid($row->id_kelas) ?>
         </td>
               <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                  <a href="<?php echo base_url('admin/ubah_siswa/').$row->id_siswa?>" class="btn btn-outline-secondary">Ubah</a>
            <button onclick="hapus(<?php echo $row->id_siswa?>)" class="btn btn-outline-dark">Hapus</button>
         </td>
      </tr>
      <?php endforeach ?>
   </table>
  <a href="<?php echo base_url('admin/tambah_siswa') ?>" class="btn btn-outline-dark btn-lg">Tambah</a>
</div>
</tbody>
</html>
    <script>
        function hapus(id) {
            var yes = confirm('Benar Anda Ingin Menghapus?');
            if (yes == true) {
                window.location.href = "<?php echo base_url('admin/hapus_siswa/')?>" + id;
            }
        }
    </script>
