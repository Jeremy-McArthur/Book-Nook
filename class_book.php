<?php

	class book {
		var $title;
		var $isbn;
		var $author;
		var $publisher;
		var $edition;
		var $price;

		// Book Title
		function set_title($new_title) {
			$this->title = $new_title;
		}
		function get_title() {
			return $this->title;
		}
		// Book isbn
		function set_isbn($new_isbn){
			$this->isbn = $new_isbn;
		}
		function get_isbn() {
			return $this->isbn;
		}
		// Book author
		function set_author($new_author) {
			$this->author = $new_author;
		}
		function get_author() {
			return $this->author;
		}
		// Book Publisher
		function set_publisher($new_publisher){
			$this->publisher = $new_publisher;
		}
		function get_publisher {
			return $this->publisher;
		}
		// Book edition
		function set_edition($new_edition) {
			$this->edition = $new_edition;
		}
		function get_edition() {
			return $this->edition;
		}
		// Book Price
		function set_price($new_price) {
			$this->price = $new_price;
		}
		function get_price() {
			return $this->price;
		}

	}

?>