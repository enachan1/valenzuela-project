<div class="">
        <table class="table table-hover table-striped table-bordered nowrap" style="width: 100%;" id="list-certification">
            <thead>
                <th>Author Name</th>
                <th class="last-child">Action</th>
            </thead>

            <tbody>
                <?php
                $iteration_query = "SELECT * FROM `setting_author`";
                $result = $sqlcon->query($iteration_query);

                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?= $rows['author_name']; ?></td>
                        <td>
                            <a data-bs-toggle="modal" data-bs-target="#confirmation" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <!-- Confirmation Modal -->
                    <div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <?php include('../tables/modal-action.php') ?>
                    </div>
                    <!-- End of Modal -->

                <?php  } ?>
            </tbody>
        </table>
    </div>