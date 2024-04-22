<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Incoming</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form method="POST" action="upload-incoming.php" enctype="multipart/form-data" autocomplete="off">
            <div class="form-floating mb-2">
                <textarea rows="5" cols="50" class="form-control" name="title" id="floatingInput" placeholder="Title"></textarea>
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating mb-2">
                <select class="form-select" name="category" id="floatingSelect" aria-label="Category">
                    <?php
                        $cat_option = "SELECT * FROM `setting_category`";
                        $result_cat = $sqlcon->query($cat_option);
                        
                        while($rows = mysqli_fetch_assoc($result_cat)) {
                    ?>
                    <option value="<?= $rows['category_name'] ?>"><?= $rows['category_name'] ?></option>
                    <?php } ?>
                </select>
                <label for="floatingSelect">Category</label>
            </div>
            <div class="form-floating mb-2">
                <input type="date" class="form-control" name="date" id="auth">
                <label for="auth" class="col-form-label">Date</label>
            </div>
            <div class="mb-2">
                <input type="file" class="form-control" name="incoming-pdf" id="auth">
            </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary">Add Incoming</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</div>