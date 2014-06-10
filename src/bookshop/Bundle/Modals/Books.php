<?php
namespace bookshop\Bundle\Modals;

class Books
{
private $books;
private $totalpages;
private $currentpage;
public function setBooks($books)
{
$this->books = $books;
}
public function setTotalpages($totalpages)
{
$this->totalpages = $totalpages;
}
public function setCurrentpage($currentpage)
{
$this->currentpage = $currentpage;
}
public function getBooks()
{
return $this->books;
}
public function getTotalpages()
{
return $this->totalpages;
}
public function getCurrentpage()
{
return $this->currentpage;
}
}
 
?>
