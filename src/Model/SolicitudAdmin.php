<?php
 include 'Conexion.php';

 class SolicitudAdmin {
 	public function __construct()
 	{
 		//$db = new Conexion('66.1.0.8','liote','tucosa...73GH','dvcredito');
		 $db = new Conexion('localhost','root','','test_main');
		$this->access = $db->conexion;
 	}
	public function getDataSolicitud(string $sql)
	{
		$result = $this->access->query($sql);

		if ($result && $result->num_rows > 0) {
            while ($row[] = $result->fetch_assoc()) {
                $data  = $row;
            }
        }else{
            return null;
        }
        return $data;
	}
	public function dd($data){
        echo ('<pre>');
        print_r($data);
        echo ('</pre>');
    }
	public function insertData($data){
		$code = $data['code'];
		echo $code;
	}
 }
