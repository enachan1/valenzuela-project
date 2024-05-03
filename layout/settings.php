<div class="col m-3">
    <div role="tabpanel">
        <!-- List group -->
        <div class="row flex-column justify-content-center">
            <div class="col">
                <div class="list-group d-flex flex-row text-center fw-medium" id="myList" role="tablist">
                    <a class="list-group-item border border-2 rounded-3 list-group-item-action active" data-bs-toggle="list" href="#home" role="tab">Category Maintenance</a>
                    <a class="list-group-item border border-2 rounded-3 list-group-item-action" data-bs-toggle="list" href="#profile" role="tab">Authors Maintenance</a>
                    <a class="list-group-item border border-2 rounded-3 list-group-item-action" data-bs-toggle="list" href="#messages" role="tab">User Maintenance</a>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="col mt-3 border border-dark-subtle rounded-4 shadow-sm">
                <div class="tab-content mt-3">
                    <!-- Category Setting -->
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="row p-3 gap-3">
                            <div class="col d-flex align-items-center justify-content-center mx-auto">
                                <h1>Add Category</h1>
                            </div>
                            <form action="../backend/add-category.php" method="post">
                                <div class="col-12 d-flex justify-content-center align-items-center grid gap-3 flex-column border rounded-1 p-3 mx-auto">
                                    <div class="form-floating mb-3 fw-semibold">
                                        <input type="text" name="category-name" class="form-control" id="category-name" placeholder="Category Name">
                                        <label for="category-name" class="form-label">Category Name:</label>
                                    </div>
                                    <div class="d-grid col-1 mx-auto">
                                        <button class="btn btn-primary" style="max-width: 50ch;">Add</button>
                                    </div>
                                </div>
                            </form>
                            <?php include('../layout/tables/category.php') ?>
                        </div>
                    </div>
                    <!-- Author Setting -->
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="row p-3 gap-3">
                            <div class="col d-flex align-items-center justify-content-center mx-auto">
                                <h1>Add Author</h1>
                            </div>
                            <form action="../backend/add-author.php" method="post">
                                <div class="col-12 d-flex justify-content-center align-items-center grid gap-3 flex-column border rounded-1 p-3 mx-auto">
                                    <div class="form-floating mb-3 fw-semibold">
                                        <input type="text" name="author-name" class="form-control" id="author-name" placeholder="Author Name">
                                        <label for="category-name" class="form-label">Author Name:</label>
                                    </div>
                                    <div class="d-grid col-1 mx-auto ">
                                        <button class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </form>
                            <?php include('../layout/tables/authors.php') ?>
                        </div>
                    </div>
                    <!-- User Setting-->
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <div class="row p-3 gap-3">
                            <div class="col d-flex align-items-center justify-content-center mx-auto">
                                <h1>User Accounts</h1>
                            </div>
                            <div class="col-12 d-flex grid gap-3 flex-column border rounded-1 p-3 mx-auto">
                                <div class="row mb-3 fw-semibold">
                                    <form action="../backend/add-user.php" method="post">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <!-- Label and Textbox -->
                                            <input type="text" name="a_username" class="form-control" id="userInput" placeholder="Username" required>
                                            <label for="userInput" class="form-label">Username:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="user-type" name="user_type" aria-lable="User Type">
                                                <option value="0">Superadmin</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Records</option>
                                            </select>
                                            <label for="user_type">User Type</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-2">
                                            <input type="password" class="form-control" name="password" id="passInput" placeholder="Password" required>
                                            <label for="passInput" class="form-label">Password</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="showPass" onclick="showPass()">
                                            <label class="form-check-label" for="showPass">
                                                Show Password
                                            </label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="password" class="form-control" name="conf_pass" id="confirmPass" placeholder="Confirm Password" required>
                                            <label for="confirmPass">Confirm Password</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="showPass" onclick="showPassConfirm()">
                                            <label class="form-check-label" for="showPass">
                                                Show Password
                                            </label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" id="">Add Account</button>
                                </div>
                                </form>
                            </div>
                            <form></form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>