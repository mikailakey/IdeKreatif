<!-- Modal untuk Update Data kategori-->
<div id="editCategory_<?= $category['category_id']; ?>" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-titlle">Update Data kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body">
    <form action="proses_kategori.php" method="POST">
<!--Input tersembunyi untuk menyimpan ID kategori -->
<input type="hidden" name="catID" value="<?= $category['category_id']; ?> ">
<div class="form-group">
    <label>Nama kategori</label>
<!-- Input untuk nama kategori -->
 <input type="text" value="<?= $category['category_name']; ?>" name="category_name" class="form-control">
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
    <button type="submit" name="update" class="btn btn-warning">Update</button>
</div>
</form>
</div>
</div>
</div>
</div>
