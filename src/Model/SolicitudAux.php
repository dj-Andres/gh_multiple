<?php
 include_once 'Conexion.php';

 class SolicitudAux {
 	public function __construct()
 	{
 		$db = new Conexion('localhost','root','','db_credito');
		$this->accesso = $db->conexion;
 	}
	public function getDataSolicitud(string $sql)
	{
		$result = $this->accesso->query($sql);

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
	public function insertData(array $data){
		$code = $data['code'];
		$cod_verif = $data['cod_verif'];
        $dnombre = $data['dnombre'];
        $dcedula = $data['dcedula'];
        $ddireccion = $data['ddireccion'];
        $dreferencia = $data['dreferencia'];
        $dtelefono = $data['dtelefono'];
        $gnombre = $data['gnombre'];
        $gcedula = $data['gcedula'];
        $gdireccion = $data['gdireccion'];
        $greferencia = $data['greferencia'];
        $gtelefono = $data['gtelefono'];
        $destado = $data['destado'];
        $gestado = $data['gestado'];
        $fecha = $data['fecha'];
        $cod_ven = $data['cod_ven'];
        $cod_agen = $data['cod_agen'];
        $etd = $data['etd'];
        $lista = $data['lista'];
        $fins = $data['fins'];
        $fupd = $data['fupd'];
        $idsujeto = $data['idsujeto'];
        $agencia = $data['agencia'];
        $zona = $data['zona'];
        $eto = $data['eto'];
        $agencia = $data['agencia'];
        $zona = $data['zona'];
        $eto = $data['eto'];
        $idapno = $data['idapno'];
        $fecapno = $data['fecapno'];
        $f_map = $data['f_map'];
        $f_doc = $data['f_doc'];
        $f_val = $data['f_val'];
        $iddel = $data['iddel'];
        $f_del = $data['f_del'];
        $u_map = $data['u_map'];
        $u_doc = $data['u_doc'];
        $u_val = $data['u_val'];
        $lapso = $data['lapso'];
        $obs = $data['obs'];
        $nota = $data['nota'];
        $aud = $data['aud'];
        $dvgeo = $data['dvgeo'];
        $gvgeo = $data['gvgeo'];
        $copia = $data['copia'];
        $ncode = $data['ncode'];
        $dscore = $data['dscore'];
        $gscore = $data['gscore'];
        $etp = $data['etp'];
        $u_pre= $data['u_pre'];
        $f_pre = $data['f_pre'];
        $stp = $data['stp'];
        $sbaco = $data['sbaco'];
        $migra = $data['migra'];

        /*try {

            $response = "";

            $sql =  'INSERT INTO `solicitud` ( `code`, `cod_verif`,`dnombre`,`dcedula`,`ddireccion`,`dreferencia`,`dtelefono`,`gnombre`,`gcedula`,`gdireccion`,`greferencia`,`gtelefono`,`destado`,`gestado`,`fecha`,`cod_ven`,`cod_agen`,`etd`,`lista`,`fins` ,`fupd`,`idsujeto`,`agencia`,`zona`,`eto`,`fecapno`,`f_map`,`f_doc`,`f_val`,`iddel`,`f_del`,`u_map`,`u_doc`,`u_val`,`lapso`,`obs`,`nota`,`aud`,`dvgeo`,`gvgeo`,`copia`,`ncode`,`dscore`,`gscore`,`etp`,`u_pre`,`f_pre`,`stp`,`sbaco`,`migra`) VALUES ( "' . $code . '","' . $cod_verif . '","' . $dnombre . '","' . $dcedula . '","' . $ddireccion . '","' . $dreferencia . '","' . $dtelefono . '","' . $gnombre . '","' . $gcedula . '","' . $gdireccion . '","' . $greferencia . '","' . $gtelefono . '","' . $destado . '","' . $gestado . '","' . $fecha . '","' . $cod_ven . '","' . $cod_agen . '","' . $etd . '","' . $lista . '","' . $fins . '","' . $fupd . '",' . $idsujeto . ',"' . $agencia . '","' . $zona . '","' . $eto . '",' . $idapno . ',"' . $fecapno . '","' . $f_map . '","' . $f_doc . '","' . $f_val . '",' . $iddel . ',"' . $f_del . '",' . $u_map . ',' . $u_doc . ',"' . $u_val . '",' . $lapso . ',"' . $obs . '","' . $nota . '","' . $aud . '","' . $dvgeo . '","' . $gvgeo . '","' . $copia . '",' . $ncode . ',' . $dscore . ',' . $gscore . ',"' . $etp . '",' . $u_pre . ',"' . $f_pre . '","' . $stp . '",' . $sbaco . ',' . $migra . ')';
            $result = $this->accesso->query($sql);
            
            if ($result == true) {
                $response = "Insert Successfully";
            }
            
        } catch (\Exception $e) {
            $response = "Error: ".$e->getMessage();
        }

        return $response;*/
        //$sql =  'INSERT INTO `solicitud` ( `code`, `cod_verif`,`dnombre`,`dcedula`,`ddireccion`,`dreferencia`,`dtelefono`,`gnombre`,`gcedula`,`gdireccion`,`greferencia`,`gtelefono`,`destado`,`gestado`,`fecha`,`cod_ven`,`cod_agen`,`etd`,`lista`,`fins` ,`fupd`,`idsujeto`,`agencia`,`zona`,`eto`,`fecapno`,`f_map`,`f_doc`,`f_val`,`iddel`,`f_del`,`u_map`,`u_doc`,`u_val`,`lapso`,`obs`,`nota`,`aud`,`dvgeo`,`gvgeo`,`copia`,`ncode`,`dscore`,`gscore`,`etp`,`u_pre`,`f_pre`,`stp`,`sbaco`,`migra`) VALUES ( "' . $code . '","' . $cod_verif . '","' . $dnombre . '","' . $dcedula . '","' . $ddireccion . '","' . $dreferencia . '","' . $dtelefono . '","' . $gnombre . '","' . $gcedula . '","' . $gdireccion . '","' . $greferencia . '","' . $gtelefono . '","' . $destado . '","' . $gestado . '","' . $fecha . '","' . $cod_ven . '","' . $cod_agen . '","' . $etd . '","' . $lista . '","' . $fins . '","' . $fupd . '",' . $idsujeto . ',"' . $agencia . '","' . $zona . '","' . $eto . '",' . $idapno . ',"' . $fecapno . '","' . $f_map . '","' . $f_doc . '","' . $f_val . '",' . $iddel . ',"' . $f_del . '",' . $u_map . ',' . $u_doc . ',"' . $u_val . '",' . $lapso . ',"' . $obs . '","' . $nota . '","' . $aud . '","' . $dvgeo . '","' . $gvgeo . '","' . $copia . '",' . $ncode . ',' . $dscore . ',' . $gscore . ',"' . $etp . '",' . $u_pre . ',"' . $f_pre . '","' . $stp . '",' . $sbaco . ',' . $migra . ')';
        $sql =  'INSERT INTO `solicitud` ( `code`, `cod_verif`,`dnombre`,`dcedula`)  VALUES ( "1698332"," 75336 ","FRANCO PIZA LLENIFER ELIZABETH","0913515763")';
        $result = $this->accesso->query($sql);
        if ($result != 1) {
            return 0;
        }
        echo ($sql);
        return 1;
	}
 }
