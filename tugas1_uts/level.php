<?php
if(!isset($_SESSION['user'])){
    echo "<div class='alert alert-danger'>Silakan login terlebih dahulu</div>";
    return;
}

// INSERT
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    mysqli_query($conn, "INSERT INTO level (nama) VALUES ('$nama')");
    header("Location: index.php?page=level");
}

// DELETE
if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM level WHERE id='$id'");
    header("Location: index.php?page=level");
}

// EDIT
$edit = null;
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $edit = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM level WHERE id='$id'"));
}

// UPDATE
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    mysqli_query($conn, "UPDATE level SET nama='$nama' WHERE id='$id'");
    header("Location: index.php?page=level");
}
?>

<div class="card shadow">
  <div class="card-header bg-primary text-white">
    <h5 class="mb-0">Data Level</h5>
  </div>

  <div class="card-body">

    <!-- FORM -->
    <form method="POST" class="mb-3">
        <?php if($edit): ?>
            <input type="hidden" name="id" value="<?= $edit['id']; ?>">
        <?php endif; ?>

        <div class="input-group">
            <input type="text" name="nama" class="form-control" placeholder="Nama Level"
                value="<?= $edit ? $edit['nama'] : '' ?>" required>

            <?php if($edit): ?>
                <button type="submit" name="update" class="btn btn-warning">Update</button>
                <a href="index.php?page=level" class="btn btn-secondary">Batal</a>
            <?php else: ?>
                <button type="submit" name="simpan" class="btn btn-primary">Tambah</button>
            <?php endif; ?>
        </div>
    </form>

    <!-- TABLE -->
    <table class="table table-striped table-hover shadow-sm">
        <thead>
            <tr class="table-primary">
                <th>No</th>
                <th>Nama Level</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM level");

        while($row = mysqli_fetch_assoc($data)):
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td>
                    <a href="index.php?page=level&edit=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="index.php?page=level&hapus=<?= $row['id']; ?>" 
                       class="btn btn-sm btn-danger"
                       onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>

    </table>

  </div>
</div>