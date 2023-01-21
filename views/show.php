<?php 
$article = Article::show();
$i = 1;
?>
<section id="home"class="col ftco-section mt-5 ">
	<div class="container mt-5 w-75">
		<form action="">
			<div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
				<div class="input-group">
					<input type="search" placeholder="What're you searching for?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
					<div class="input-group-append">
						<button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</form>
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
							<?php foreach ($article as $row) { ?>
						<tr data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							<th scope="row"><?= $i++ ?></th>
							<td><?= $row['title'] ?></td>
							<td><?= $row['categorie'] ?></td>
							<td><?= $row['dateCreate'] ?></td>
							<td><i class="fa" aria-hidden="false"></i></td>
						</tr> 
						<?php }?>
						<tr id="collapseOne" class="collapse" class="w-100 bg-light-cyan border-2" >
							<td colspan="5">
								<p><?= $row['content']?></p>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
