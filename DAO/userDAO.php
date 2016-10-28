<?php 
	class userDAO
	{
		public function insert($userDTO)
		{
			$con = mysql_connect("localhost","root","");
			mysql_select_db("test");
			$strQuery = "insert into user(user,name,email,pass) values ('$userDTO->user','$userDTO->name','$userDTO->email','$userDTO->pass')";
			mysql_query($strQuery);
			mysql_close($con);
		}

		public function update($userDTO)
		{
			$con = mysql_connect("localhost","root","");
			mysql_select_db("test");
			$strQuery = "update user set user='{$userDTO->user}', name='{$userDTO->name}',email='{$userDTO->email}',pass='{$userDTO->pass}' where ma={$userDTO->ma}";
			mysql_query($strQuery);
			mysql_close($con);

		}

		public function deleteById($ma)
		{
			$con = mysql_connect("localhost","root","");
			mysql_selectdb("test");
			$strQuery = "delete from user where ma=$ma";
			mysql_query($strQuery);
			mysql_close($con);
		}

		public function getAll()
		{
			$con = mysql_connect("localhost","root","");
			mysql_selectdb("test");
			$strQuery = "select * from user";
			$result = mysql_query($strQuery);
			$arrUser = array();
			while($row = mysql_fetch_array($result))
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
			mysql_close($con);
			return $arrUser;

		}

		public function getById($ma)
		{
			$con = mysql_connect("localhost","root","");
			mysql_select_db("test");
			$strQuery = "select *from user where ma=$ma";
			$result =mysql_query($strQuery);
			$us = new userDTO();
			if($row=mysql_fetch_array($result)){
				$us->ma = $row["ma"];
				$us->user = $row["user"];
				$us->name = $row["name"];
				$us->email = $row["email"];
				$us->pass = $row["pass"];
			}
			mysql_close($con);
			return $us;
		}

	}
 ?>