<?php
require_once("config.php");
class MySQLDatabase{

	public $connection;
	public $table;
	public $registration_data;
	public $updation_date;
	public $id;
	public $search_id;

	public function __construct()
	{
		$this->open_connection();
	}

	/**
	 *creating connection to DB
	 *
	 *@param 
	 *@return 
	 */


	public function open_connection(){
		$this->connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

		if(!$this->connection)
		{
			die("Database connection failed: ".mysqli_error($this->connection));
		}
	}

	/**
	 *insert data into DB
	 *
	 *@param 
	 *@return 
	 */

	public function insert_record(){
		$column_part=array_keys($this->array_attributes);
		$value_part=array_values($this->array_attributes);

		$column_part=implode(", ", $column_part);
		$value_part=implode(", ", $value_part);

		$query="INSERT INTO {$this->table} ($column_part) VALUES ($value_part)";
		$result=$this->query($query); 
		
		if($result) {
			echo "User inserted";
		} else {
			echo "user not inserted";
		} 
	}

	/**
	 *get all data from DB
	 *
	 *@param 
	 *@return 
	 */

	public function show_record(){
		$query="SELECT * FROM {$this->table}";
		 return $value[]=$this->query($query);
	}

	/**
	 *Search data from DB
	 *
	 *@param 
	 *@return 
	 */


	public	function search_record(){
		$query="SELECT * FROM {$this->table} WHERE $this->id = {$this->search_id}";

		$result=$this->query($query);

		$data = [];

		while ($row=$this->fetch_array($result))
		{
			$data[] = $row;
		}

		return $data;
	}

	/**
	 *Delete data from DB
	 *
	 *@param 
	 *@return 
	 */


	public function delete_record(){
		$query="DELETE  FROM {$this->table} WHERE {$this->id} = $this->search_id";
		$this->query($query);	
	}
	
	/**
	 *updationg data from DB
	 *
	 *@param 
	 *@return 
	 */

	public function update_record(){
		$string="";

		foreach ($this->array_attributes as $key => $value) {
			$string.="{$key}={$value},";
		}

		$updated_values=substr_replace($string,"",-1);

		$query="UPDATE {$this->table} SET $updated_values WHERE {$this->id} = $this->search_id";
		var_dump($query);
		$result=$this->query($query); 
		
		if($result) {
			echo "User Updated";
		} else {
			echo "user not updated";
		}
	}

	/**
	 *calculate days, months and years before when accont was update
	 *
	 *@param strings
	 *@return string
	 */ 
	public function update_before($updating_date,$registring_data){
		if(strtotime($updating_date) == strtotime($registring_data))
		{
			return "No";
		}
		else{
		$seconds=strtotime($this->today_data())-strtotime($updating_date);
		$days=$seconds/86400;

		if($days<31){
			if($days==0){
				return "Today";
			}
			elseif($days==1){
				return "Yesterday";
			}
			else{
			return $days." days";
			}
		}

		elseif($days<365){
			$months=round($days/30);
			$days=$days%30;

			return $months." months ".$days." days";
		}

		else{
			$years=round($days/365);
			$days=$days%30;
			if($days<31){
				return $years." years ".$days." days";
			}
			else{
				$months = round($days/30);
				$days = $days%30;
				return $years." years ".$months." months ".$days." days";
			}
		}
	}
	}


	/**
	 *today data calculating
	 *
	 *@param
	 *@return date
	 */

	public function today_data(){
		date_default_timezone_set('asia/karachi');
		return date("j-n-Y");
	}

	/**
	 *run query
	 *
	 *@param query
	 *@return result
	 */

	public function query($sql){
		$result=mysqli_query($this->connection,$sql);
		$this->confirm_query($result);

		return $result;
	}	

	/**
	 *Confirm query
	 *
	 *@param query
	 *@return error exists or not
	 */

	public function confirm_query($result_set){	
		if(!$result_set)
		{
			die("Database query failed: ".mysqli_error($this->connection));
		}
	}

	/**
	 *Fetch datafrom DB in array
	 *
	 *@param Query
	 *@return array
	 */

	public function fetch_array($result)
	{
		return  mysqli_fetch_assoc($result);
	}

	/**
	 *Login User
	 *
	 *@param query
	 *@return array
	 */

	public function login($email){
		$query="SELECT * FROM {$this->table} WHERE 
		usr_email = \"{$email}\" ";
		$result=$this->query($query);
		return $this->fetch_array($result);

	}
	/**
	 * count rows of reslt
	 *
	 * @param query
	 * @return object
	 */
	public function num_rows(){
		$query="SELECT * FROM {$this->table} WHERE $this->id = {$this->search_id}";

		$result=$this->query($query);

		return mysqli_num_rows($result);		
	}

	/**
	 *close DB connection
	 *
	 *@param query
	 *@return 
	 */

	public function close_connection(){
		if(isset($connection))
		{
			mysqli_close($this->connection);
			unset($this->connection);
		}
	}

	public	function search_by_join(){
		$query="SELECT * 
		FROM user as U
		INNER JOIN restaurant as R
		ON U.usr_id = R.usr_id
		INNER JOIN dishes as D
		ON D.res_id = R.res_id
		INNER JOIN comments as C
		ON C.dis_id = D.dis_id
		WHERE D.dis_id = $this->search_id";
		
		$result=$this->query($query);

		$data = [];

		while ($row=$this->fetch_array($result))
		{
			$data[] = $row;
		}

		return $data;
	}

	public function authentication(){
		$query="SELECT * FROM {$this->table} WHERE 
		usr_email = \"{$this->email}\" ";
		$result=$this->query($query);
		return $this->fetch_array($result);

		/*if(strlen($this->password)<6){
			session_start();
			$_SESSION['passworError'] = "* Pleaz enter password greater then 6 character";
			header("Location:../../user-form.php");

			return 0;
		}*/
	}
}

$database=new MySQLDatabase();

?>
