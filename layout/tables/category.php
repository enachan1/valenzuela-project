<div class="">
    <table class="table table-hover table-striped table-bordered nowrap" style="width: 100%;" id="list-certification">
        <thead>
            <th>Category Name</th>
            <th class="last-child">Action</th>
        </thead>

        <tbody>
            <?php
            $iteration_query = "SELECT * FROM `setting_category`";
            $result = $sqlcon->query($iteration_query);

            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $rows['category_name']; ?></td>
                    <td>
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
                                <a href="../backend/delete-category.php?target_id=<?= $rows['id'] ?>&cat=category" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal -->

            <?php  } ?>
        </tbody>
    </table>
</div>