<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Incoming</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form method="POST" action="upload.php" enctype="multipart/form-data" autocomplete="off">
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Title">
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating mb-2">
                <select class="form-select" id="floatingSelect" aria-label="Category">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingSelect">Category</label>
            </div>
            <div class="form-floating mb-2">
                <input type="date" class="form-control" name="date" id="auth">
                <label for="auth" class="col-form-label">Date</label>
            </div>
            <div class="mb-2">
                <input type="file" class="form-control" name="pdf" id="auth">
            </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary">Add Incoming</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</div>