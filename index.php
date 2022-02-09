<?php
include 'src/Model/SolicitudAdmin.php';

$solicitudAdmin = new SolicitudAdmin();

$conn = new mysqli('localhost','root','','test_aux');

if(isset($_GET['date'])){
    $date = $_GET['date'];

    $data = $solicitudAdmin->getDataSolicitud("SELECT * FROM clientes WHERE fecha_nac = '$date' ");

    if (is_null($data)) {
        echo "No hay Datos";
    }else{
        $values = [];

        foreach($data as $row){
            $cedula = $row['cedula'];
            $fecha_nac = $row['fecha_nac'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];

            $values [] = "('$cedula','$fecha_nac','$nombre','$apellido')";
        }
        $sql = "INSERT INTO clientes (cedula,fecha_nac,nombre,apellido) VALUES\n" . implode(",\n", $values);

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

        /*$sql = "INSERT INTO clientes (cedula,fecha_nac,nombre,apellido) VALUES ('$cedula','$fecha_nac','$nombre','$apellido')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();*/
        /*foreach($data  as $row){
                $cedula = $row['cedula'];
                $fecha_nac = $row['fecha_nac'];
                $nombre = $row['nombre'];
                $apellido = $row['apellido'];

                $code = $row['code'];
                $cod_verif = $row['cod_verif'];
                $dnombre = $row['dnombre'];
                $dcedula = $row['dcedula'];
                $ddireccion = $row['ddireccion'];
                $dreferencia = $row['dreferencia'];
                $dtelefono = $row['dtelefono'];
                $gnombre = $row['gnombre'];
                $gcedula = $row['gcedula'];
                $gdireccion = $row['gdireccion'];
                $greferencia = $row['greferencia'];
                $gtelefono = $row['gtelefono'];
                $destado = $row['destado'];
                $gestado = $row['gestado'];
                fecha' => $row['fecha'],
                cod_ven' => $row['cod_ven'],
                cod_agen' => $row['cod_agen'],
                etd' => $row['etd'],
                lista' => $row['lista'],
                fins' => $row['fins'],
                fupd'=> $row['fupd'],
                idsujeto'=> $row['idsujeto'],
                agencia' => $row['agencia'],
                zona' => $row['zona'],
                eto' => $row['eto'],
                idapno'=> $row['idapno'],
                fecapno' => $row['fecapno'],
                f_map'=> $row['f_map'],
                f_doc' => $row['f_doc'],
                f_val' => $row['f_val'],
                iddel' => $row['iddel'],
                f_del'=> $row['f_del'],
                u_map' => $row['u_map'],
                u_doc'=> $row['u_doc'],
                u_val'=> $row['u_val'],
                lapso'=> $row['lapso'],
                obs'=> $row['obs'],
                nota'=> $row['nota'],
                aud'=> $row['aud'],
                dvgeo' => $row['dvgeo'],
                gvgeo'=> $row['gvgeo'],
                copia'=> $row['copia'],
                ncode'=> $row['ncode'],
                dscore'=> $row['dscore'],
                gscore'=> $row['gscore'],
                etp'=> $row['etp'],
                u_pre' => $row['u_pre'],
                f_pre'=> $row['f_pre'],
                stp'=> $row['stp'],
                sbaco' => $row['sbaco'],
                migra'=> $row['migra']*/
        }
        /*$code = $newData['code'];
		$cod_verif = $newData['cod_verif'];
        $dnombre = $newData['dnombre'];
        $dcedula = $newData['dcedula'];
        $ddireccion = $newData['ddireccion'];
        $dreferencia = $newData['dreferencia'];
        $dtelefono = $newData['dtelefono'];
        $gnombre = $newData['gnombre'];
        $gcedula = $newData['gcedula'];
        $gdireccion = $newData['gdireccion'];
        $greferencia = $newData['greferencia'];
        $gtelefono = $newData['gtelefono'];
        $destado = $newData['destado'];
        $gestado = $newData['gestado'];
        $fecha = $newData['fecha'];
        $cod_ven = $newData['cod_ven'];
        $cod_agen = $newData['cod_agen'];
        $etd = $newData['etd'];
        $lista = $newData['lista'];
        $fins = $newData['fins'];
        $fupd = $newData['fupd'];
        $idsujeto = $newData['idsujeto'];
        $agencia = $newData['agencia'];
        $zona = $newData['zona'];
        $eto = $newData['eto'];
        $agencia = $newData['agencia'];
        $zona = $newData['zona'];
        $eto = $newData['eto'];
        $idapno = $newData['idapno'];
        $fecapno = $newData['fecapno'];
        $f_map = $newData['f_map'];
        $f_doc = $newData['f_doc'];
        $f_val = $newData['f_val'];
        $iddel = $newData['iddel'];
        $f_del = $newData['f_del'];
        $u_map = $newData['u_map'];
        $u_doc = $newData['u_doc'];
        $u_val = $newData['u_val'];
        $lapso = $newData['lapso'];
        $obs = $newData['obs'];
        $nota = $newData['nota'];
        $aud = $newData['aud'];
        $dvgeo = $newData['dvgeo'];
        $gvgeo = $newData['gvgeo'];
        $copia = $newData['copia'];
        $ncode = $newData['ncode'];
        $dscore = $newData['dscore'];
        $gscore = $newData['gscore'];
        $etp = $newData['etp'];
        $u_pre= $newData['u_pre'];
        $f_pre = $newData['f_pre'];
        $stp = $newData['stp'];
        $sbaco = $newData['sbaco'];
        $migra = $newData['migra'];

        $sql =  'INSERT INTO `solicitud` ( `code`, `cod_verif`,`dnombre`,`dcedula`,`ddireccion`,`dreferencia`,`dtelefono`,`gnombre`,`gcedula`,`gdireccion`,`greferencia`,`gtelefono`,`destado`,`gestado`,`fecha`,`cod_ven`,`cod_agen`,`etd`,`lista`)
            VALUES (
                "' . $code . '",
                "' . $cod_verif . '",
                "' . $dnombre . '",
                "' . $dcedula . '",
                "' . $ddireccion . '",
                "' . $dreferencia . '",
                "' . $dtelefono . '",
                "' . $gnombre . '",
                "' . $gcedula . '",
                "' . $gdireccion . '",
                "' . $greferencia . '",
                "' . $gtelefono . '",
                "' . $destado . '",
                "' . $gestado . '",
                "' . $fecha . '",
                "' . $cod_ven . '",
                "' . $cod_agen . '",
                "' . $etd . '",
                "' . $lista . '"
            )';*/
    //}
}