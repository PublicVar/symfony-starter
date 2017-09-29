<?php

namespace AppBundle\Entity\User;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    /**
     * @param \FOS\UserBundle\Model\Group $group Group of the agent
     * @return array
     */
    public function findAllAgents(\FOS\UserBundle\Model\Group $group)
    {
        $query =  $this->createQueryBuilder('u')
            ->join('u.groups','g')
            ->where('g.id = :id')
            ->andWhere('u.enabled = 1')
            ->setParameter('id',$group->getId())
            ->getQuery();

        return $query->getResult();
    }

    /**
     * @param array $ids Array of user's ids
     * @return array
     */
    public function findAllByIds(array $ids){
        if(count($ids) <= 0){
            return [];
        }

        $queryBuilder = $this->createQueryBuilder('u')
            ->where('u.id = :id0')
            ->setParameter(':id0', $ids[0])
            ;
        if(count($ids) >= 2){
            for ($i = 1; $i < count($ids); $i++){
                $queryBuilder->orWhere("u.id = :id$i")
                    ->setParameter("id$i",$ids[$i])
                ;
            }
        }
        return $queryBuilder->getQuery()->getResult();
    }
}