<?php
namespace App\Repositories;

use App\Models\Attribute;

class AttributeRepository extends BaseRepository 
{

	/**
	 * @return mixed
	 */
	public function getModel() {
        return Attribute::class;
	}
}