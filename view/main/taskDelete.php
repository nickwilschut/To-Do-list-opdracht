<div class="row">
    <div class="col-12 mt-4">
        <div class="alert alert-primary" role="alert">
            <div class="row text-primary ml-1">
                Delete
            </div>
        </div>
    </div>
</div>

<div class="card border-primary mb-3">
    <div class="card-header text-primary">Delete task</div>
    <div class="card-body text-dark">
	    <form name="delete" method="post" action="<?=URL?>main/destroyTask">
		    <input type="hidden" name="id" value="<?=$tasks["id"]?>"/>
		    <input type="hidden" name="table" value="Tasks"/>
			<div class="row mb-2">
				<div class="col-12">
					<p class="card-text">
						I am not a robot.
						<input type="checkbox" id="conformation" name="conformation" value="I am not a robot." required>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
			    	<button type="submit" class="btn btn-primary">delete</button>
			    </div>
		    </div>
		</form>
    </div>
</div>