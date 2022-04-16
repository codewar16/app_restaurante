<?php
require_once 'conexion.php';
class Personal extends Conexion
{

    public $mysqli;
    public $data;

    public function __construct()
    {
        $this->mysqli = parent::conectar();
        $this->data = array();
    }

    // ----------------------------REGISTRAR
    public function consultaClientes()
    {
        $resultado = $this->mysqli->query("SELECT * FROM tbl_clientes ORDER BY fechareg DESC");
        while ($fila = $resultado->fetch_assoc()) {
            $data[] = $fila;
        }

        if (isset($data)) {
            return $data;
        }
    }


    // ----------------------------CONSULTAR
    public function registroClientes()
    {
    echo    $consulta = sprintf(
            "INSERT INTO tbl_clientes values(null, %s, %s, %s, %s, %s, %s, null, %s, null, null, null, null, null, %s, null, null, null, null, null);",
            parent::comillas_inteligentes($_POST['cedula']),
            parent::comillas_inteligentes($_POST['tipoidentificacion']),
            parent::comillas_inteligentes($_POST['nombres']),
            parent::comillas_inteligentes($_POST['apellidos']),
            parent::comillas_inteligentes($_POST['telefono']),
            parent::comillas_inteligentes($_POST['fechareg']),
            // parent::comillas_inteligentes($_POST['estado']),
            parent::comillas_inteligentes($_POST['direccion']),
            // parent::comillas_inteligentes($_POST['aplicativa']),
            // parent::comillas_inteligentes($_POST['nombresucursal']),
            // parent::comillas_inteligentes($_POST['ciudad']),
            // parent::comillas_inteligentes($_POST['nombreidentificacion']),
            // parent::comillas_inteligentes($_POST['codtipocliente']),
            parent::comillas_inteligentes($_POST['nombretipocliente']),
            // parent::comillas_inteligentes($_POST['codcliente']),
            // parent::comillas_inteligentes($_POST['provincia']),
            // parent::comillas_inteligentes($_POST['telefono2']),
            // parent::comillas_inteligentes($_POST['telefono3']),
            // parent::comillas_inteligentes($_POST['trweb']),
        );
        $this->mysqli->query($consulta);
    }





    // ---------------------------MODIFICAR
    public function activarCodigo_facturero_fisico($id)
    {
        // $query = sprintf(
        //     "UPDATE tbl_facturero_fisico SET estado_codigo = 1 WHERE id_facturero_fisico= %s;",
        //     parent::comillas_inteligentes($id)
        // );
        // $this->mysqli->query($query);
        // header("Location: ../admin/adminfacf.php");
    }








    // --------------------------ELIMINAR
    public function eliminar_pedido_proforma($id, $idq)
    {
        // $query = sprintf(
        //     "DELETE FROM tbl_proforma_detalle WHERE producto_id = %s AND proforma_cabecera_id = %s ;",
        //     parent::comillas_inteligentes($id),
        //     parent::comillas_inteligentes($idq)
        // );
        // $this->mysqli->query($query);
        // header("Location: ../admin/adminusers.php");
    }










    // ----------------------------CONSULTA POR ID
    public function HistoriaClinicaVet_porIdMAscota($id)
    {
        // $consulta = sprintf(
        //     "SELECT * FROM tbl_historia
        //     INNER JOIN tbl_mascota ON tbl_historia.mascota_id = tbl_mascota.id_mascota
        //     INNER JOIN tbl_cita ON tbl_historia.cita_id = tbl_cita.id_cita
        //      WHERE id_mascota = %s  AND servicio_id = 1 ORDER BY fecha_r_hc DESC",
        //     parent::comillas_inteligentes($id)
        // );

        // $resultado = $this->mysqli->query($consulta);

        // while ($fila = $resultado->fetch_assoc()) {
        //     $data[] = $fila;
        // }

        // if (isset($data)) {
        //     return $data;
        // }
    }

}