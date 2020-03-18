<div class="row">
	<div class="col-12">
		<div class="card border-primary mb-3">
		    <div class="card-header text-primary">
		    	Users <a href="<?=URL?>main/create"><i class="fas fa-user-plus ml-2 float-right mt-1"></i></a>
		    </div>
		    <div class="card-body text-dark">
			    <table class="table table-striped border">
				  	<thead class="bg-light">
					    <tr>
					    	<th>name</th>
					    	<th>username</th>
					    	<th style="width: 26%">action</th>
					    </tr>
					</thead>
				    <tbody>
					    <?php 
						  	foreach ($users as $user) {
						?>
						<tr>
							<td><?=$user["name"]?></td>
					    	<td><?=$user["username"]?></td>
					      	<td>
					      		<a href="<?=URL?>main/delete/<?=$user["id"]?>" type="button" class="btn btn-primary mt-1"><i class="far fa-eye"></i></a>
					      		<a href="<?=URL?>main/edit/<?=$user["id"]?>" type="button" class="btn btn-warning text-white mt-1"><i class="fas fa-edit"></i></a>
							  	<a href="<?=URL?>main/delete/<?=$user["id"]?>" type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></a>
						  	</td>	 
						</tr>
						<?php
						  	}
						?> 
				  	</tbody>
				</table>
		    </div>
		</div>
	</div>
</div>





