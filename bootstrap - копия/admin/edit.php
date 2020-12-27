<?php include 'inc/header.php' ?>
		<?php $result = select('products',$_GET['id']); $r = mysqli_fetch_object($result);?>
		<main class="main">
			<div class="main_content" style="display: flex; justify-content: center;">
				<div class="main_content-form">
					<form method="POST">
						<input type="hidden" name="id" value="<?php echo $r->id ?>">
						<label>Name</label>
						<input type="text" placeholder="Product name" value="<?php echo $r->name ?>" name="name">
						<label>Price</label>
						<input type="number" placeholder="10000" min="0" value="<?php echo $r->price ?>" name="price">
						<label>Img</label>
						<input type="text" placeholder="image.jpg" value="<?php echo $r->img ?>" name="img">
						<label>Meta</label>
						<textarea placeholder="Enter product description" name="meta"><?php echo $r->meta ?></textarea>
						<input type="submit" value="Send" name="update">
					</form>
					<?php if (isset($_POST['update'])){update();}?>
				</div>
			</div>
		</main>
<?php include 'inc/footer.php' ?>