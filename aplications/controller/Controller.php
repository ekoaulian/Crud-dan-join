<?php  

class Database
	{
		private $koneksi;
		
		function __construct()
		{
			$this->getConnection();
		}

		public function getConnection()
		{
			$this->koneksi = mysqli_connect('localhost', 'root', '', 'data_alamat');
			if(mysqli_connect_error())
			{
				die("Database tidak terhubung : " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}

		public function get($table, $select = null, $options = null)
		{
			$query 	 = "SELECT".((trim($select) != null) ? $select : "*")." FROM ".$table.((trim($options) != null) ? " ".$options : "");
			$execute = mysqli_query($this->koneksi, $query) or die (mysqli_error($this->koneksi));
			$data 	 = mysqli_fetch_all($execute, MYSQLI_ASSOC);
			return $data;
		}

		public function create($table, $rows)
	    {
	        $fields = "";
	        $data = "";
	        
	        foreach ($rows as $key => $value) {
	            $fields .= ($fields == "") ? $key : ','.$key;
	            $data .= ($data == "") ? '"'.$value.'"' : ',"'.$value.'"';
	        }
	        $query = "INSERT INTO ".$table." (".$fields.") VALUES (".$data.")";
	        return $this->raw($query);
	    }

	    public function delete($table, $where = null)
	    {
	        $query = "DELETE FROM ".$table.((trim($where) != null) ? " WHERE ".$where : "");
	        return $this->raw($query);
	    }

	    public function first($table, $options = null)
	    {
	        $query = "SELECT * FROM ".$table.((trim($options) != null) ? " ".$options : "");
	        $execute = mysqli_query($this->koneksi, $query) or die(mysqli_error($this->koneksi));
	        $data = mysqli_fetch_assoc($execute);
	        return $data;
	    }

	    public function update($table, $rows, $where = null)
	    {
	        $set = "";
	        
	        foreach ($rows as $key => $value) {
	            $set .= ($set == "") ? $key."='".$value."'" : ",".$key."='".$value."'";
	        }

	        $query = "UPDATE ".$table." SET ".$set.((trim($where) != null) ? " WHERE ".$where : "");
	        return $this->raw($query);
	    }

	    public function raw($query)
	    {
	        if(mysqli_query($this->koneksi, $query) or die(mysqli_error($this->koneksi)))
	        {
	            return true;
	        }
	        else
	        {
	            return false;
	        }
	    }

	}

$db = new Database();
$db->getConnection();