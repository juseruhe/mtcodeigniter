<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'usuarios';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
	'tipo_documento_id','numero_documento','nombres','apellidos','genero_id','fecha_nacimiento',
	'correo','contrasena','direccion','telefono','rol_id','ciudad_id' 
	];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function login($datos){

		$usuario = $this->db->table('usuarios');

       $usuario->where($datos);

	   return $usuario->get()->getResultArray();
	}
}
