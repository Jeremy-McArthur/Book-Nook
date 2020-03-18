<?php
	require 'header.php';
?>

	<main>
		<input class="search" type="text" placeholder="Search" aria-label="Search">
		<?php
			if(isset($_SESSION['userId'])){
				echo '<p class="selling_text">Selling a book? <a href="#" data-toggle="modal" data-target="#sell_modal">Click here!</a></p>';
			}else{
				echo '<p class="selling_text">Selling a book? <a data-toggle="modal" data-target="#signin_modal">Click here!</a></p>';
			}
		?>
	</main>

	<!-- Sell Modal -->
	<div class="modal" id="sell_modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="text-center" method="post" action="includes/sell_book.inc.php">
					<button type="button" class="close close_btn" data-dismiss="modal"><span>&times;</span></button>
					<p class="sell_header h3 mb-4">Book Info</p>
					<hr>
					<!-- Inputs -->
					<img src="images/book_placeholder.png" height="80" width="80"><br /><br />
					<button type="submit" class="btn-secondary">Upload Image</button><br /><br />
					<input type="text" class="book_title form-control mb-4" id="book_title" name="book_title" placeholder="Title">
					<input type="number" class="book_isbn form-control mb-4" id="book_isbn" name="book_isbn" placeholder="ISBN">
					<p><small>What is my <a class="isbn_modal_link" data-toggle="modal" data-target="#isbn_modal" data-dismiss="modal" data-target="sell_modal">ISBN?</a></small></p>
					<input type="text" class="book_author form-control mb-4" id="book_author" name="book_author" placeholder="Author">
					<input type="text" class="book_publisher form-control mb-4" id="book_publisher" name="book_publisher" placeholder="Publisher">
					<input type="number" min="0" class="book_edition form-control mb-4" id="book_edition" name="book_edition" placeholder="Edition">
					<input type="number" min="0"  step="any" class="book_price form-control mb-4" id="book_price" name="book_price" placeholder="Price">
					<button type="submit" name="sell-submit" class="btn btn-primary my-4 sell_submit">Confirm</button>
				</form>
			</div>
		</div>		
	</div>

	<!-- ISBN modal -->
	<div class="modal" id="isbn_modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="text-center">
					<button type="button" class="close close_btn" data-dismiss="modal" data-toggle="modal" data-target="#sell_modal"><span>&times;</span></button>
					<p class="isbn_header h3 mb-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is an ISBN?</p>
					<hr>
					<img src="images/isbn_info.png" class="isbn_image"><br />
					<a data-toggle="modal" data-target="#sell_modal" data-dismiss="modal" data-target="#isbn_modal"><button type="button" class="btn btn-primary isbn_back_button">Back</button></a>
				</form>
			</div>
		</div>
	</div>


	<!-- use a for loop to make a div in which it prints the contents of all the books in the db -->



<?php
	require 'footer.php';
?>