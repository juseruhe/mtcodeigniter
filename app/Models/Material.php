<?php

namespace App\Models;

use CodeIgniter\Model;

class Material extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'materiales';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		"nombre"
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



// Consultas a la Base de Datos
	public function listarMateriales(){
		$materiales = $this->db->query("SELECT * from materiales ");
		return $materiales->getResult();
	}

	public function crearMaterial($datos){

		$valores = $this->db->table('materiales');

		$valores->insert($datos);

		}


		public function mostrarMaterial($id){

			$materiales = $this->db->query("SELECT * from materiales");

			$materiales->where($id);

			return $materiales->get()->getResultArray();
			
		}
}
