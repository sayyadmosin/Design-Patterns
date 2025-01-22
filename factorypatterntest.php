<?php
class book{
	private $bookName;
	Private $bookauther;
	
	public function __construct($name,$auther)
	{
		
		$this->BookName=$name;
		$this->bookauther=$auther;
	}
	
	public function getbookNAuther(){
		
		return "Book Name is :".$this->BookName. " And Auther Is: ".$this->bookauther."<br>";
	}
	  }

class bookfactory{
	
	public static function createBook($name,$auther){
	
		return new book($name,$auther);
		
		}
}

$book1= bookfactory::createBook("Agni Pankh","Dr. APJ Kalam");

$book2=bookfactory::createBook("C Language","Dennis Rechie");


echo $book1->getbookNAuther();
echo $book2->getbookNAuther();

?>






