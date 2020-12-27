<?php include 'inc/header.php' ?>
		<?php $result = select('products'); ?>
		<main class="main">
			<div class="main_content">
				<h2 class="text-center">Welcome to Admin dashboard</h2>
				<div class="main_content-table">
					<?php if(mysqli_num_rows($result) > 0): ?>
					<table class="products_table">
						<tr>
							<th>ID</th>
							<th>Image</th>
							<th>Name</th>
							<th>Price</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						<?php foreach ($result as $value):?>
							<tr>
								<td><?php echo $value['id'] ?></td>
								<td><img src="../img/<?php echo $value['img'] ?>" alt=""></td>
								<td><?php echo $value['name'] ?></td>
								<td><?php echo $value['price'] ?><?php if (!empty($value['price'])) {echo '$';} ?></td>
								<td><a href="edit.php?id=<?php echo $value['id'] ?>" class="btn"><span>Edit</span></a></td>
								<td><a href="?delete=<?php echo $value['id'] ?>" class="btn"><span>Delete</span></a></td>
							</tr>
						<?php endforeach; ?>
					</table>
					<?php else: ?>
						<h2 class="text-center">Products not found</h2>
					<?php endif; ?>
				</div>
			</div>
		</main>
<?php include 'inc/footer.php' ?>