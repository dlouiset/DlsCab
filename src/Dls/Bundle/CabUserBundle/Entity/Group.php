<?php
# @Author: David LOUISET <dlouiset>
# @Date:   2017-03-09T15:20:22+01:00
# @Last modified by:   dlouiset
# @Last modified time: 2017-03-10T16:03:59+01:00



namespace Dls\Bundle\CabUserBundle\Entity;

#use FOS\UserBundle\Entity\Group as BaseGroup; # FOSUser 1.3
use FOS\UserBundle\Model\Group as BaseGroup; # FOSUser 2.0
use Doctrine\ORM\Mapping as ORM;
use Dls\Bundle\CabUserBundle\DlsCabUserBundle;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_group")
 */
class Group extends BaseGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;
}
