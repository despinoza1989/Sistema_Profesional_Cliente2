<?php

require_once 'config/db.php';

class AsignacionProfesionalModel {

    function getById($id_asignacion_profesional) {
        
        $conexion= Database::connect();
        $query = "SELECT 
        ap.id_asignacion_profesional, ap.id_cliente_ap, ap.id_personal_ap,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        p.id_personal, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero,
        r.tipo_rubro
        FROM asignacion_profesional AS ap
		LEFT JOIN personal AS p ON p.id_personal = ap.id_personal_ap
        LEFT JOIN cliente AS c ON c.id_cliente = ap.id_cliente_ap	
        LEFT JOIN rubro AS r ON  r.id_rubro = c.id_rubro WHERE ap.id_asignacion_profesional  = '". $id_asignacion_profesional ."'"; 
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT 
        ap.id_asignacion_profesional, ap.id_cliente_ap, ap.id_personal_ap,
        c.id_cliente, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        p.id_personal, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero
        FROM asignacion_profesional AS ap
        LEFT JOIN cliente AS c ON c.id_cliente = ap.id_cliente_ap
        LEFT JOIN personal AS p ON p.id_personal = ap.id_personal_ap";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAllByPersonal($id_personal) {

        $conexion= Database::connect();
        $query = "SELECT 
        ap.id_asignacion_profesional, ap.id_cliente_ap, ap.id_personal_ap,
        c.id_cliente, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        p.id_personal, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero
        FROM asignacion_profesional AS ap
        LEFT JOIN cliente AS c ON c.id_cliente = ap.id_cliente_ap
        LEFT JOIN personal AS p ON p.id_personal = ap.id_personal_ap WHERE p.id_personal  = '". $id_personal ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAllByCliente($id_cliente) {

        $conexion= Database::connect();
        $query = "SELECT 
        ap.id_asignacion_profesional, ap.id_cliente_ap, ap.id_personal_ap,
        c.id_cliente, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        p.id_personal, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero
        FROM asignacion_profesional AS ap
        LEFT JOIN cliente AS c ON c.id_cliente = ap.id_cliente_ap
        LEFT JOIN personal AS p ON p.id_personal = ap.id_personal_ap WHERE c.id_cliente  = '". $id_cliente ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function create($data) {

        $conexion= Database::connect();
        $queryInsert = "INSERT INTO asignacion_profesional (id_cliente_ap, id_personal_ap) VALUES ('". $data['id_cliente_ap']."', '". $data['id_personal_ap']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE asignacion_profesional SET id_personal_ap = '".$data['id_personal_ap']."' WHERE id_asignacion_profesional = '".$data['id_asignacion_profesional']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        echo $queryUpdate;

        return $result;
        
    }

    function delete($id_asignacion_profesional) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM asignacion_profesional WHERE id_asignacion_profesional ='".$id_asignacion_profesional."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>