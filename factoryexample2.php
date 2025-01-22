<?php

class book{
	
	private $bookName;
	Private $bookAuther;
	
	public function __construct($book,$auther)
	{
		
		$this->bookName=$book;
		$this->bookAuther=$auther;
	}
	
	public function getbook(){
		
		return "Book is :".$this->bookName." And Auther is : ".$this->bookAuther."<br>";
	}
		
}

class bookFactory{
	
	public static function createBook($BookName,$autherName){
				
		return new book($BookName,$autherName);
	}
}



$book1=bookFactory::createBook("Agni", "Mosin");

$book2=bookFactory::createBook("pankh", "Kalam");


echo $book1->getbook();

echo $book2->getbook();
