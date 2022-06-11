<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>
    <div class="container col-md-12 w-75">
        <h3 class="container-fluid text-center">Daftar Dosen</h3>
        <table class="table table-striped container-fluid text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama</th>
                    <th>gender</th>
                    <th>tmp_lahir</th>
                    <th>tgl_lahir</th>
                    <th>nidn</th>
                    <th>pendidikan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($dosen as $dsn) {
                ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $dsn->nama  ?></td>
                        <td><?php echo $dsn->gender ?></td>
                        <td><?php echo $dsn->tmp_lahir ?></td>
                        <td><?php echo $dsn->tgl_lahir ?></td>
                        <td><?php echo $dsn->nidn  ?></td>
                        <td><?php echo $dsn->pendidikan ?></td>
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