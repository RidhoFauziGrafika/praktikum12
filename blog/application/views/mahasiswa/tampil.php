<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>

<body>
    <div class="container col-md-12 w-75">
        <h3 class="text-center">Daftar Mahasiswa</h3>
        <table class="table table-striped text-center container-fluid">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($mahasiswa as $mhs) {
                ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $mhs->nim  ?></td>
                        <td><?php echo $mhs->nama ?></td>
                        <td><?php echo $mhs->gender ?></td>
                        <td><?php echo $mhs->tmp_lahir ?></td>
                        <td><?php echo $mhs->tgl_lahir ?></td>
                        <td><?php echo $mhs->ipk ?></td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>