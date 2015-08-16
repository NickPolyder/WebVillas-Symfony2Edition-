<?php


namespace WebVL\WebVillasBundle\Entity;

use Doctrine\ORM\EntityRepository;


class UsersRepository extends EntityRepository 
{
    public function findByusername($username)
{
        $query = createQuery(
"SELECT u FROM WebVLWebVillasBundle:Users u WHERE u.username = :username")
        ->setParameter('username', $username);
return $query->getSingleResult();
}


}