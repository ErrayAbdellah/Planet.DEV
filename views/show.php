<?php 
$article = Article::show();
$i = 1;
?>


<section id="home"class="col ftco-section mt-2  ">
	<div class="container w-100">
		<div class="row">
			<div class="col-md-12">
				
				<div class="table-wrap">
					<table id="dataTable" class="display" >
						<thead>
							<tr>
								<!-- <th>#</th> -->
								<th>title</th>
								<th>categorie</th>
								<th>dateCreate</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($article as $row) {?>
							<tr>
								<td><?= $row['title'] ?></td>
								<td><?= $row['categorie'] ?></td>
								<td><?= $row['dateCreate'] ?></td>
								<td ><?= $row['content']?> </td>
								<?php  }?>
								
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>