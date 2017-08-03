<?php
class OperationData {
	public static $tablename = "operation";


	public function OperationData(){
		$this->item_id = "";
		$this->client_id = "";
		$this->start_at = "";
		$this->finish_at = "";
		$this->returned_at = NULL;
		$this->user_id = "";
		$this->receptor_id = NULL;

	}

	public function getItem(){ return ItemData::getById($this->item_id); }
	public function getClient(){ return ClientData::getById($this->client_id); }

	public function convertDateTypesToDB(){
		$this->start_at = Dates::convertDateTypesToDB($this->start_at);
		$this->finish_at = Dates::convertDateTypesToDB($this->finish_at);
	}

	public function add(){
		$this->convertDateTypesToDB();
		$sql = "insert into ".self::$tablename." (item_id,client_id,start_at,finish_at,user_id) ";
		$sql .= "value (\"$this->item_id\",\"$this->client_id\",\"$this->start_at\",\"$this->finish_at\",\"$this->user_id\")";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto OperationData previamente utilizamos el contexto
	public function update(){
		$this->convertDateTypesToDB();
		echo $this->start_at;
		$sql = "update ".self::$tablename." set client_id=\"$this->client_id\", start_at=\"$this->start_at\", finish_at=\"$this->finish_at\" where id=$this->id";
		Executor::doit($sql);
	}

	public function finalize(){
		$sql = "update ".self::$tablename." set returned_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new OperationData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Dates::convertDataTypesToView(Model::many($query[0],new OperationData()));
	}
	public static function getRentsByRange($start,$finish){
		$start = Dates::convertDateTypesToDB($start);
		$finish = Dates::convertDateTypesToDB($finish);
		$sql = "select * from ".self::$tablename." where (  (\"$start\">=start_at and \"$finish\"<=finish_at) or (start_at>=\"$start\" and finish_at<=\"$finish\") )  and returned_at is NULL ";
		$query = Executor::doit($sql);
		return Dates::convertDataTypesToView(Model::many($query[0],new OperationData()));
	}


	public static function getByRange($start,$finish){
		$start = Dates::convertDateTypesToDB($start);
		$finish = Dates::convertDateTypesToDB($finish);
		$sql = "select * from ".self::$tablename." where returned_at>=\"$start\" and returned_at<=\"$finish\" and returned_at is not NULL ";
		$query = Executor::doit($sql);
		return Dates::convertDataTypesToView(Model::many($query[0],new OperationData()));
	}

	public static function getRents(){
		$sql = "select * from ".self::$tablename." where returned_at is NULL";
		$query = Executor::doit($sql);
		return Dates::convertDataTypesToView(Model::many($query[0],new OperationData()));
	}

	public static function getAllByItemId($id){
		$sql = "select * from ".self::$tablename." where item_id=$id";
		$query = Executor::doit($sql);
		return Dates::convertDataTypesToView(Model::many($query[0],new OperationData()));
	}

	public static function getAllByItemIdAndRange($id,$start,$finish){
		$start = Dates::convertDateTypesToDB($start);
		$finish = Dates::convertDateTypesToDB($finish);
		$sql = "select * from ".self::$tablename." where item_id=$id and ((returned_at>=\"$start\" and returned_at<=\"$finish\") or (start_at>=\"$start\" and start_at<=\"$finish\") or (finish_at>=\"$start\" and finish_at<=\"$finish\")) ";
		$query = Executor::doit($sql);
		return Dates::convertDataTypesToView(Model::many($query[0],new OperationData()));
	}
	public static function getAllByClientId($id){
		$sql = "select * from ".self::$tablename." where client_id=$id";
		$query = Executor::doit($sql);
		return Dates::convertDataTypesToView(Model::many($query[0],new OperationData()));
	}

	public static function getAllByClientIdAndRange($id,$start,$finish){
		$start = Dates::convertDateTypesToDB($start);
		$finish = Dates::convertDateTypesToDB($finish);
		$sql = "select * from ".self::$tablename." where client_id=$id and ((returned_at>=\"$start\" and returned_at<=\"$finish\") or (start_at>=\"$start\" and start_at<=\"$finish\") or (finish_at>=\"$start\" and finish_at<=\"$finish\")) ";
		$query = Executor::doit($sql);
		return Dates::convertDataTypesToView(Model::many($query[0],new OperationData()));
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new OperationData());
	}


}

?>
