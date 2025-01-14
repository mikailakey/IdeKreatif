<?php
include '.includes/header.php';
include '.include/toast_notification.php';
?>
<div  class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between
        align-items-center">
        <h4>Data Kategori</h4>
        <button type="button" class="btn btn-primary" data-bs-
        toggle="modal" data-bs-target="#addCategory">
        Tambah Kategori
</button>
</div>

<div class="card-body">
    <div class="table-responsive text-mowrap">
        <table id="datatable" class="table table-hover">
            <thead>
                <tr class="text-center">
                    <th width="50px">#</th>
</tr>
</thead>
<tbody class="table-border-botton-0">

<?php
$index = 1;
$query = "SELECT * FROM categories";
$exec = mysqli_query($conn, $query);
while ($category = mysqli_fetch_assoc($exec)) ;
?>

<tr>
    <td><?= $index++; ?></td>
    <td><?= $category['category_name']; ?></td>

    <td>
        <div class="dropdown">
            <button type="button" classs="btn p-0 dropdown-toggle
            hide-arrow" data-bs-toggle="dropdown">
            <i class="bx bx-dots-vertical-rounded"></i>
</button>
<div class="dropdown-menu">
    <a href="#" class="dropdown-item" data-bs-togggle="modal"
    data-bs-target="#editCategory_<?= $category['category_id']; ?>">
    <i class="bx bx-trash me2"></i>Delete</a>
</div>
</div>
</td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<?php include '.includes/footer.php'; ?>

<div class="modal fade" id="addCategory" tabindex="-1" aria-
hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-tittle">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
</button>
</div>
<div class="mmodal-body">
    <form action="proses_kategori.php" method="POST">
        <div>
            <label for="namaKategori" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" name="category_name"
            required/>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary"
    data-bs-dismiss="modal">Batal</button>
    <button type="submit" name="simpan" class="btn btn-
    primary">Simpan</button>
</div>
</form>
</div>
</div>
</div>
</div>








