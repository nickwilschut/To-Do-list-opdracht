<div class="row">
    <div class="col-12 mt-4">
        <div class="alert alert-primary" role="alert">
            <div class="row text-primary ml-1">
                Update / Edit
            </div>
        </div>
    </div>
</div>

<div class="card border-primary mb-3">
    <div class="card-header text-primary">Change Task</div>
    <div class="card-body text-dark">
        <form name="update" method="post" action="<?=URL?>main/updateTask">
        <input type="hidden" name="table" value="Tasks"/>

        <label for="name"><b>name</b></label>
        <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

        <label for="description"><b>description</b></label>
        <input type="text" name="description" class="form-control mb-4" placeholder="Enter description" required>

        <label for="duration"><b>duration</b></label>
        <input type="text" name="duration" class="form-control mb-4" placeholder="Enter duration" required>

        <label for="List_id"><b>List</b></label>
        <input type="text" name="List_id" class="form-control mb-4" placeholder="Enter List id" required>

            <button type="submit" class="btn btn-primary">send</button>
        </form>
    </div>
</div>