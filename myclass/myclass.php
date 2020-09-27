
<?php
class Ecom 
{
	function connect()
	{
		$con=@mysqli_connect("localhost","root","","webtmdt");
		if(!$con)
		{
			die("không thể kết nối csdl");
			exit();
		}
		else
		{
			@mysqli_set_charset($con,'utf8');
			return $con;	
		}
	}
	function getCategories()
	{
		$categories=@mysqli_query(
			$this->connect(),
			"SELECT * FROM category"
		);
		return $categories;
	}
	function getProducts()
	{
		$products = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products"
		);
		return $products;
	}
	public function getProductById ($id)
	{
		$result = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products WHERE ID = '$id'"
		);
		$product = @mysqli_fetch_array($result);
		return $product;
	}
	function export_cart($id){
		$connect=$this->connect();
		$sql="SELECT * FROM products WHERE ID='$id'";
		$result=mysqli_query($connect,$sql);
		if(!$result){
			die('Không thể thực hiện');
		}else{
			return mysqli_fetch_assoc($result);
		}
}

}

?>
