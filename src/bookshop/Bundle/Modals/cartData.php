<?php
namespace bookshop\Bundle\Modals;

class cartData
{
	private $id;
	private $page;
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setPage($page)
	{
		$this->page = $page;
	}
	public function getPage()
	{
		return $this->page;
	}
}
?>
