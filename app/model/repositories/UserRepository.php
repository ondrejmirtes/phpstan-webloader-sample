<?php

namespace App\Model\Repositories;

use App\Model\EntityRepository;

class UserRepository extends EntityRepository
{

	/**
	 * @param int $id
	 *
	 * @return array|null
	 */
	public function getUserArray($id)
	{
		$query = $this->createQueryBuilder('u')
			->where('u.id = :id')
			->setParameter('id', $id)
			->getQuery();

		return $query->getOneOrNullResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
	}

	/**
	 *
	 * @return null|array
	 */
	public function fetchUsersArray()
	{
		return $this->createQueryBuilder('u')
				->select('u')
				->getQuery()
				->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
	}
}
