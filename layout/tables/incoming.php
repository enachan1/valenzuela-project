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
                            <a href="<?= $rows['filepath'] ?>" target="_blank" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg></a>
                            <a data-bs-toggle="modal" data-bs-target="#confirmation" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <!-- Confirmation Modal -->
                    <div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <?php include('modal-action.php') ?>
                    </div>
                    <!-- End of Modal -->

                <?php  } ?>
            </tbody>

        </table>
    </div>
</div>