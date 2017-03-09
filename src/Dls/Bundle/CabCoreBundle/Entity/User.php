<?php
# @Author: David LOUISET <dlouiset>
# @Date:   2017-03-08T21:36:29+01:00
# @Last modified by:   dlouiset
# @Last modified time: 2017-03-09T11:30:22+01:00



namespace Dls\Bundle\CabCoreBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
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
     * Constructor
     * Logique de construction de l'objet User
     */
    public function __construct()
    {
        parent::__construct();

    }
}
