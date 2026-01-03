<?php

	class connect
	{
		public $server_name="localhost";
		public $user_name="root";
		public $password="";
		public $db_name="admission";

		public $link;
		public $msg;

		public function __construct()
		{
			$this->db_connect();
		}

		public function db_connect()
		{
			$this->link=new mysqli($this->server_name,$this->user_name,$this->password,$this->db_name);
			if(!$this->link)
			{
				die('Connection Failed!!'.$this->link->error.'('.$this->link->error.')');
			}
			else
			{
				$this->msg="Connection Successfully!!";
			}

		}

		public function search($query)
		{
			$result=$this->link->query($query);
			if($result)
			{
				$fetch=$result->fetch_array();
				return $fetch[0].'and'.$fetch[1].'and'.$fetch[2];
			}
			else
			{
				return false;
			}
		}

		public function insert($query)
		{
			$result=$this->link->query($query);
			if($result)
			{
				return("Insert Successfully");
			}
			else
			{
				return("Insert Unsuccessfully");
			}
		}

		public function update($update)
		{
			$result=$this->link->query($update);
			if($result)
			{
				$this->msg="Update Successfully";
			}
			else
			{
				$this->msg="Update Unsuccessfully";
			}
		}		

		public function delete($query)
		{
			$result=$this->link->query($query);
			if($result)
			{
				$this->msg="Delete Successfully";
			}
			else
			{
				$this->msg="Delete Unsuccessfully";
			}
		}

		public function __destruct()
		{
			$this->link->close();
		}
	}


?>