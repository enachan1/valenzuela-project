<div class="col-sm col-md col-lg">
    <div class="d-flex justify-content-end grid mb-3 gap-2 align-items-center">
        <label for="min-date">From:</label>
        <input type="date" class="form-control filter-input" id="min-date">
        <label for="max-date">To:</label>
        <input type="date" class="form-control filter-input" id="max-date">
    </div>
    <div class="">
        <table class="table table-hover table-striped table-bordered nowrap" style="width: 100%;" id="list-incoming">
            <thead>
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th class="last-child">Action</th>
            </thead>

            <tbody>
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
                        <?php include('modal-action.php')?>
                    </div>
                    <!-- End of Modal -->

                <?php  } ?>
            </tbody>

        </table>
    </div>
</div>