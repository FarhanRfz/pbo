<?php

namespace App\Core;

use PDO;
use Exception;

class Model
{

	protected object $db;

	public function __construct()
	{

		try {

			$this->db = new PDO("mysql:host=localhost;dbname=bd-pbwl10", "root", "");
		} catch (Exception $e) {
			die("error! " . $e->getMessage());
		}
	}

	public function select($stmt)
	{
		//Menampilkan satu data
		return $stmt->fetch();
	}

	public function selects($stmt)
	{
		//Menampilkan banyak data
		$data = [];

		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
		}

		return $data;
	}
}
