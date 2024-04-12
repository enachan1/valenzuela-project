<div class="col">
    <div role="tabpanel">
        <!-- List group -->
        <div class="row flex-column justify-content-center">
            <div class="col border border-info">
                <div class="list-group d-flex flex-row" id="myList" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#home" role="tab">Category Maintenance</a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#profile" role="tab">Authors Maintenance</a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#messages" role="tab">User Maintenance</a>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="col border border-danger">
                <div class="tab-content mt-3">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="row p-3">
                            <div class="col d-flex align-items-center justify-content-center border border-danger mx-auto">
                                <h1>Add Category</h1>
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center grid gap-3 flex-column border p-3 mx-auto">
                                    <label for="category-name">Category Name</label>
                                    <input type="text" class="form-control w-25" name="category-name" id="category-name">
                                    <button type="button" class="btn btn-primary" style="max-width: 50ch;">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="row p-3">
                            <div class="col d-flex align-items-center justify-content-center border border-danger mx-auto">
                                <h1>Add Author</h1>
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center grid gap-3 flex-column border p-3 mx-auto">
                                    <label for="category-name">Author Name</label>
                                    <input type="text" class="form-control w-25" name="category-name" id="category-name">
                                    <button type="button" class="btn btn-primary" style="max-width: 50ch;">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">idi</div>
                </div>
            </div>
        </div>
    </div>
</div>