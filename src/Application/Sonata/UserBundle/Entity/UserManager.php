<?php
/**
 * Created by PhpStorm.
 * User: Angellous
 * Date: 29/07/16
 * Time: 4:15 PM
 */

namespace Application\Sonata\UserBundle\Entity;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class UserManager
{
    /**
     * Holds the Doctrine entity manager for database interaction
     * @var EntityManager
     */
    protected $em;

    /**
     * Entity-specific repo, useful for finding entities, for example
     * @var EntityRepository
     */
    protected $repo;

    /**
     * The Fully-Qualified Class Name for our entity
     * @var string
     */
    protected $class = User::class;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->repo = $em->getRepository($this->class);
    }

    /**
     * @param $id
     * @return Post
     */
    public function find($id)
    {
        return $this->repo->find($id);
    }

}