<?php 
	class userDAO
	{
		public function insert($userDTO)
		{
			$conn = mysqli_connect("mysql.hostinger.vn","u799364762_user","123456","u852828225_test");
			$strQuery = "insert into user(user,name,email,pass) values ('$userDTO->user','$userDTO->name','$userDTO->email','$userDTO->pass')";
			mysqli_query($conn,$strQuery);
			mysqli_close($conn);
		}

		public function update($userDTO)
		{
			$conn = mysqli_connect("mysql.hostinger.vn","u799364762_user","123456","u852828225_test");
			$strQuery = "update user set user='{$userDTO->user}', name='{$userDTO->name}',email='{$userDTO->email}',pass='{$userDTO->pass}' where ma={$userDTO->ma}";
			mysqli_query($conn,$strQuery);
			mysqli_close($conn);

		}

		public function deleteById($ma)
		{
			$conn = mysqli_connect("mysql.hostinger.vn","u799364762_user","123456","u852828225_test");
			$strQuery = "delete from user where ma=$ma";
			mysqli_query($conn,$strQuery);
			mysqli_close($conn);
		}

		public function getAll()
		{
			$conn = mysqli_connect("mysql.hostinger.vn","u799364762_user","123456","u852828225_test");
			$strQuery = "select * from user";
			$result = mysqli_query($conn,$strQuery);
			$arrUser = array();
			while($row = mysqli_fetch_array($result))
			{
				$us = new userDTO();
				$us->ma =$row["ma"];
				$us->user=$row["user"];
				$us->name=$row["name"];
				$us->email=$row["email"];
				$us->pass=$row["pass"];
			//Thêm đối tượng $us vào mảng $arrUs
				$arrUser[] = $us;	
			}
			mysqli_close($conn);
			return $arrUser;

		}

		public function getById($ma)
		{
			$conn = mysqli_connect("mysql.hostinger.vn","u799364762_user","123456","u852828225_test");
			$strQuery = "select *from user where ma=$ma";
			$result =mysqli_query($conn,$strQuery);
			$us = new userDTO();
			if($row=mysqli_fetch_array($result)){
				$us->ma = $row["ma"];
				$us->user = $row["user"];
				$us->name = $row["name"];
				$us->email = $row["email"];
				$us->pass = $row["pass"];
			}
			mysqli_close($conn);
			return $us;
		}

	}
 ?>