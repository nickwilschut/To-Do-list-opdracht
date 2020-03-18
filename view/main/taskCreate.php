<div class="card border-primary mb-3">
    <div class="card-header text-primary">Add task</div>
    <div class="card-body text-dark">
    <form name="create" method="post" action="create">
		<form method="post" action="model/MainModel"/>
		<input type="hidden" name="table" value="users"/>

	 	<label for="name"><b>name</b></label>
	    <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

		<label for="description"><b>description</b></label>
	    <input type="text" name="description" class="form-control mb-4" placeholder="Enter description" required>

	    <label for="duration"><b>duration</b></label>
	    <input type="text" name="duration" class="form-control mb-4" placeholder="Enter duration" required>

	    <button type="submit" class="btn btn-primary mb-3">Send</button>
	</form>
    </div>
</div>