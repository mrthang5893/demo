<?php 
	class userDAO
	{
		public function insert($userDTO)
		{
			$con = mysqli_connect("mysql.hostinger.vn","u852828225_root","123456");
			mysqli_select_db("u852828225_local", $conn);
			$strQuery = "insert into user(user,name,email,pass) values ('$userDTO->user','$userDTO->name','$userDTO->email','$userDTO->pass')";
			mysqli_query($strQuery);
			mysqli_close($con);
		}

		public function update($userDTO)
		{
			$con = mysqli_connect("mysql.hostinger.vn","u852828225_root","123456");
			mysqli_select_db("u852828225_local", $conn);
			$strQuery = "update user set user='{$userDTO->user}', name='{$userDTO->name}',email='{$userDTO->email}',pass='{$userDTO->pass}' where ma={$userDTO->ma}";
			mysqli_query($strQuery);
			mysqli_close($con);

		}

		public function deleteById($ma)
		{
			$con = mysqli_connect("mysql.hostinger.vn","u852828225_root","123456");
			mysqli_select_db("u852828225_local", $conn);
			$strQuery = "delete from user where ma=$ma";
			mysqli_query($strQuery);
			mysqli_close($con);
		}

		public function getAll()
		{
			$con = mysqli_connect("mysql.hostinger.vn","u852828225_root","123456");
			mysqli_select_db("u852828225_local", $conn);
			$strQuery = "select * from user";
			$result = mysqli_query($strQuery);
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
			mysqli_close($con);
			return $arrUser;

		}

		public function getById($ma)
		{
			$con = mysqli_connect("mysql.hostinger.vn","u852828225_root","123456");
			mysqli_select_db("u852828225_local", $conn);
			$strQuery = "select *from user where ma=$ma";
			$result =mysqli_query($strQuery);
			$us = new userDTO();
			if($row=mysqli_fetch_array($result)){
				$us->ma = $row["ma"];
				$us->user = $row["user"];
				$us->name = $row["name"];
				$us->email = $row["email"];
				$us->pass = $row["pass"];
			}
			mysqli_close($con);
			return $us;
		}

	}
 ?>