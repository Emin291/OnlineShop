<?php include 'inc/header.php' ?>
		<main class="main">
			<div class="main_content" style="display: flex; justify-content: center;">
				<div class="main_content-form">
					<form method="POST">
						<label>Name</label>
						<input type="text" placeholder="Product name" name="name">
						<?php if (isset($_POST['insert']) && empty($_POST['name'])) {errorCheck('Name is Empty');} ?>
						<label>Price</label>
						<input type="number" placeholder="10000" min="0" name="price">
						<?php if (isset($_POST['insert']) && empty($_POST['price'])) {errorCheck('Price is Empty');} ?>
						<label>Img</label>
						<input type="text" placeholder="image.jpg" name="img">
						<label>Meta</label>
						<textarea placeholder="Enter product description" name="meta"></textarea>
						<?php if (isset($_POST['insert']) && empty($_POST['meta'])) {errorCheck('Meta is Empty');} ?>
						<input type="submit" value="Send" name="insert">
					</form>
					<?php if (isset($_POST['insert'])){insert();}?>
				</div>
			</div>
		</main>
<?php include 'inc/footer.php' ?>