<?php 
if (isset($_POST['sell-submit'])) {

	require 'dbh.inc.php';

	$title = $_POST['book_title'];
	$isbn = $_POST['book_isbn'];
	$author = $_POST['book_author'];
	$publisher = $_POST['book_publisher'];
	$edition = $_POST['book_edition'];
	$price = $_POST['book_price'];

	if (empty($title) || empty($isbn) || empty($price)) {
		header("Location: ../catalog.php?error=emptyfields&title=".$title."&isbn=".$isbn."$author".$author."$publisher".$publisher."$edition".$edition);
		exit();
	}else if (empty($title)){
		header("Location: ../catalog.php?error=emptyfields&title=".$title."&isbn=".$isbn."$author".$author."$publisher".$publisher."$edition".$edition);
		exit();
	}else if (empty($isbn)) {
		header("Location: ../catalog.php?error=emptyfields&title=".$title."&isbn=".$isbn."$author".$author."$publisher".$publisher."$edition".$edition);
		exit();
	}else if (empty($price)){
		header("Location: ../catalog.php?error=emptyfields&title=".$title."&isbn=".$isbn."$author".$author."$publisher".$publisher."$edition".$edition."$price=");
		exit();
	}else{
		$stmt = mysqli_stmt_init($conn);
		$sql = "INSERT INTO books (bookTitle, bookISBN, bookAuthor, bookPublisher, bookEdition, bookPrice) VALUES (?, ?, ?, ?, ?, ?)";

		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../catalog.php?error=sqlerror");
			exit();
		}else{
			mysqli_stmt_bind_param($stmt, "sissid", $title, $isbn, $author, $publisher, $edition, $price);
			mysqli_stmt_execute($stmt);

			header("Location: ../catalog.php?sell-book=success");
			exit();
		}
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);


}else{

	header("Location: ../catalog.php");
	exit();

}