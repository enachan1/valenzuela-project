<div class="col m-3">
    <div role="tabpanel">
            <!-- List group -->
            <div class="row flex-column justify-content-center">
                <div class="col">
                    <div class="list-group d-flex flex-row gap-1 text-center fw-medium fs-5" id="myList" role="tablist">
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
                            <form action="../layout/table-modal-crud/add-category.php" method="post">
                            <div class="col-12 d-flex justify-content-center align-items-center grid gap-3 flex-column border rounded-1 p-3 mx-auto">
                                    <label for="category-name">Category Name</label>
                                    <input type="text" class="form-control w-auto" name="category-name" id="category-name" placeholder="Type here!">
                                    <button class="btn btn-primary" style="max-width: 50ch;">Add</button>
                            </div>
                            </form>
                            <?php include('../layout/tables/category.php')?>
                        </div>
                    </div>
                    <!-- Author Setting -->
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="row p-3 gap-3">
                            <div class="col d-flex align-items-center justify-content-center mx-auto">
                                <h1>Add Author</h1>
                            </div>
                            <form action="../layout/table-modal-crud/add-author.php" method="post">
                            <div class="col-12 d-flex justify-content-center align-items-center grid gap-3 flex-column border rounded-1 p-3 mx-auto">
                                    <label for="category-name">Author Name</label>
                                    <input type="text" class="form-control w-auto" name="author-name" id="author-name" placeholder="Type here!">
                                    <button class="btn btn-primary" style="max-width: 50ch;">Add</button>
                            </div>
                            </form>
                            <?php include('../layout/tables/authors.php')?>
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
                                        <div class="col-6">
                                            <form method="" id="">
                                            <!-- Label and Textbox -->
                                            <label for="" class="form-label">Username</label>
                                            <input type="text" name="a_username" class="form-control" id="" required>
                                            <label for="" class="form-label">Email</label>
                                            <input type="text" name="a_email" class="form-control" id="" required>
                                            <label for="" class="form-label">Contact</label>
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="col-6">
                                            <label for="" class="form-label">Password</label>
                                            <input type="password" name="a_password" class="form-control" id="" required>
                                            <label for="" class="form-label">Confirm Password</label>
                                            <input style="margin-bottom: 32px;" type="password" name="" class="form-control" id="" required>
                                            <div class="input-group">
                                                    <label class="input-group-text colorbox fw-semibold" for="uof">User Type</label>
                                                    <select class="form-select" id="user-type" name="user_type">
                                                    <option value="1">Admin</option>
                                                    <option value="0">Cashier</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" id="">Add Account</button>
                                    </div>
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