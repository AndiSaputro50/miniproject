<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">

        <h3 class="text-center">Data</h3>
        <?php foreach ($guru as $data_guru) : ?>
        <form action="<?php echo base_url('admin/aksi_ubah_guru') ?>"
        enctype="multipart/form-data"
        method="post" class="row">
        <input name="id_guru" type="hidden" value="<?php echo $data_guru->id_guru?>">
        <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Guru</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_guru->nama_guru ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_guru->nik ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option selected value="<?php echo $data_guru->gender ?>">
                </option>
                <option selected>Pilih Gender</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="mapel" class="form-label">Mapel</label>
                <select name="id_mapel" class="form-select">
                    <option selected value="<?php echo $data_guru->id_mapel ?>">
                    <?php echo $data_guru->id_guru ?>
                    </option>
                    <?php foreach($mapel as $row): ?>
                        <option value="<?php echo $row->id ?>">
                            <?php echo $row->nama_mapel; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-info" type="submit">Ubah</button>
                    </div>
                </div>
            </form>
            <?php endforeach ?>
            
        </div>
</body>

</html>