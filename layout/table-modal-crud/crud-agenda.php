<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add E-Agenda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form method="POST" action="../backend/upload-agenda.php" enctype="multipart/form-data" autocomplete="off">
            <div class="form-floating mb-2">
                <input class="form-control" id="message-text" name="title" placeholder="Title"></input>
                <label for="recipient-name" class="col-form-label">Title</label>
            </div>
            <div class="form-floating mb-2">
                <input type="date" class="form-control" name="date" id="auth">
                <label for="auth" class="col-form-label">Date</label>
            </div>
            <div class="mb-2">
                <label for="message-text" class="col-form-label">PDF Upload</label>
                <input type="file" class="form-control" name="pdf" id="auth">
            </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary">Add Agenda</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</div>