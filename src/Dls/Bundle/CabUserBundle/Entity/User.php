<?php
# @Author: David LOUISET <dlouiset>
# @Date:   2017-03-08T21:36:29+01:00
# @Last modified by:   dlouiset
# @Last modified time: 2017-03-10T16:03:10+01:00



namespace Dls\Bundle\CabUserBundle\Entity;

#use FOS\UserBundle\Entity\User as BaseUser; # FOSUser 1.3
use FOS\UserBundle\Model\User as BaseUser; # FOSUser 2.0
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Dls\Bundle\CabUserBundle\Entity\Group")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    /**
     * Constructor
     * Logique de construction de l'objet User
     */
    public function __construct()
    {
        parent::__construct();

    }
}
