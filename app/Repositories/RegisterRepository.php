<?php
namespace App\Repositories;

use App\Models\Admin;

class RegisterRepository extends BaseRepository 
{

	/**
	 * @return mixed
	 */
	public function getModel() {
        return Admin::class;
	}
}