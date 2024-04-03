<?php
$iteration_query = "SELECT * FROM `e-agenda`";
$result = $sqlcon->query($iteration_query);

while ($rows = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?= $rows['agenda_no']; ?></td>
        <td><?= $rows['title']; ?></td>
        <td><?= $rows['author']; ?></td>
        <td><?= $rows['date']; ?></td>
        <td>
            <a href="<?= $rows['filepath'] ?>" target="_blank" class="btn btn-primary">Download</a>
            <a data-bs-toggle="modal" data-bs-target="#confirmation" class="btn btn-danger">Delete</a>
        </td>
    </tr>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="delete.php?target_id=<?= $rows['id'] ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

<?php  } ?>