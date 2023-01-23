<div id="editSet" class="col mt-5">
    <section id="add"  >
        <h4 class="text-center my-5">Setting Article</h4>
        <form action="" method="post">
            <div class="d-flex justify-content-end w-100 align-items-center">
                <div class="mx-5">
                    <select class="form-select form-select-lg mb-3 shadow  bg-body-tertiary "name="" id="">
                        <option selected>..Chose Categorie..</option>
                        <?php foreach ($cat as $row){ ?>
                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                        <?php }?>
                    </select>
                </div>
                
                <div class="w-75">
                <div class="w-25 my-1">
                    <label for="title"></label>
                    <input class="form-control" type="text" name="txtTitle" id="txtTitle" placeholder="Title">
                </div> 
                    <textarea class="w-100" name="txtArticle" id="txtArticle" cols="70" rows="6"></textarea>
                </div>  
            </div>
            <div class="d-flex justify-content-end mt-3">
                <!-- <button type="button" class="btn btn-danger mx-3" onclick="cancelSettings()">Cancel</button>
                <button type="button" class="btn btn-info mx-3" onclick="">Add new Article</button> -->
                <input type="submit" class="btn btn-secondary mx-3" name="bntADD" value="Save">
            </div>
        </form>
    </section>
    <section>
    <div class="row">
			<div class="col-md-12">
			
				<div class="table-wrap">
					<table class="w-100 table myaccordion table-hover" id="accordion">
						<thead>
						<tr>
							<th>#</th>
							<th>title</th>
							<th>categorie</th>
							<th>dateCreate</th>
							<th>&nbsp;</th>
						</tr>
						</thead>
						<tbody>
							<?php foreach ($article as $row) {?>
						<tr data-bs-toggle="collapse" data-bs-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapseOne">
							<th scope="row"><?= $i ?></th>
							<td><?= $row['title'] ?></td>
							<td><?= $row['categorie'] ?></td>
							<td><?= $row['dateCreate'] ?></td>
							<td><i class="fa" aria-hidden="false"></i></td>
						</tr> 
						<tr id="collapse<?=$i?>" class="collapse" class="w-100 bg-light-cyan border-2" >
							<td colspan="5">
								<p><?= $row['content']?></p>
							</td>
						</tr>
						<?php  $i++; }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </section>
</div>


