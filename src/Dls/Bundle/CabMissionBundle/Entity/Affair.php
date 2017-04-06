<?php
# @Author: David LOUISET <dlouiset>
# @Date:   2017-04-06T11:35:26+02:00
# @Last modified by:   dlouiset
# @Last modified time: 2017-04-06T16:50:21+02:00




namespace Dls\Bundle\CabMissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affair
 *
 * @ORM\Table(name="cab_affaire")
 * @ORM\Entity(repositoryClass="Dls\Bundle\CabMissionBundle\Repository\AffairRepository")
 */
class Affair
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="affaire_reference", type="string", length=20)
     */
    private $affaireReference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="affaire_date_creation", type="datetime")
     */
    private $affaireDateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="affaire_date_creation_utc", type="datetimetz")
     */
    private $affaireDateCreationUTC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="affaire_date_modification", type="datetime")
     */
    private $affaireDateModification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="affaire_date_modification_utc", type="datetimetz")
     */
    private $affaireDateModificationUTC;

    /**
     * @var int
     *
     * @ORM\Column(name="affaire_auteur", type="integer")
     */
    private $affaireAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="affaire_description", type="text")
     */
    private $affaireDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="affaire_statut", type="string", length=20)
     */
    private $affaireStatut;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affaire_archive", type="boolean")
     */
    private $affaireArchive = true;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set affaireReference
     *
     * @param string $affaireReference
     * @return Affair
     */
    public function setAffaireReference($affaireReference)
    {
        $this->affaireReference = $affaireReference;

        return $this;
    }

    /**
     * Get affaireReference
     *
     * @return string
     */
    public function getAffaireReference()
    {
        return $this->affaireReference;
    }

    /**
     * Set affaireDateCreation
     *
     * @param \DateTime $affaireDateCreation
     * @return Affair
     */
    public function setAffaireDateCreation($affaireDateCreation)
    {
        $this->affaireDateCreation = $affaireDateCreation;

        return $this;
    }

    /**
     * Get affaireDateCreation
     *
     * @return \DateTime
     */
    public function getAffaireDateCreation()
    {
        return $this->affaireDateCreation;
    }

    /**
     * Set affaireDateCreationUTC
     *
     * @param \DateTime $affaireDateCreationUTC
     * @return Affair
     */
    public function setAffaireDateCreationUTC($affaireDateCreationUTC)
    {
        $this->affaireDateCreationUTC = $affaireDateCreationUTC;

        return $this;
    }

    /**
     * Get affaireDateCreationUTC
     *
     * @return \DateTime
     */
    public function getAffaireDateCreationUTC()
    {
        return $this->affaireDateCreationUTC;
    }

    /**
     * Set affaireDateModification
     *
     * @param \DateTime $affaireDateModification
     * @return Affair
     */
    public function setAffaireDateModification($affaireDateModification)
    {
        $this->affaireDateModification = $affaireDateModification;

        return $this;
    }

    /**
     * Get affaireDateModification
     *
     * @return \DateTime
     */
    public function getAffaireDateModification()
    {
        return $this->affaireDateModification;
    }

    /**
     * Set affaireDateModificationUTC
     *
     * @param \DateTime $affaireDateModificationUTC
     * @return Affair
     */
    public function setAffaireDateModificationUTC($affaireDateModificationUTC)
    {
        $this->affaireDateModificationUTC = $affaireDateModificationUTC;

        return $this;
    }

    /**
     * Get affaireDateModificationUTC
     *
     * @return \DateTime
     */
    public function getAffaireDateModificationUTC()
    {
        return $this->affaireDateModificationUTC;
    }

    /**
     * Set affaireAuteur
     *
     * @param integer $affaireAuteur
     * @return Affair
     */
    public function setAffaireAuteur($affaireAuteur)
    {
        $this->affaireAuteur = $affaireAuteur;

        return $this;
    }

    /**
     * Get affaireAuteur
     *
     * @return integer
     */
    public function getAffaireAuteur()
    {
        return $this->affaireAuteur;
    }

    /**
     * Set affaireDescription
     *
     * @param string $affaireDescription
     * @return Affair
     */
    public function setAffaireDescription($affaireDescription)
    {
        $this->affaireDescription = $affaireDescription;

        return $this;
    }

    /**
     * Get affaireDescription
     *
     * @return string
     */
    public function getAffaireDescription()
    {
        return $this->affaireDescription;
    }

    /**
     * Set affaireStatut
     *
     * @param string $affaireStatut
     * @return Affair
     */
    public function setAffaireStatut($affaireStatut)
    {
        $this->affaireStatut = $affaireStatut;

        return $this;
    }

    /**
     * Get affaireStatut
     *
     * @return string
     */
    public function getAffaireStatut()
    {
        return $this->affaireStatut;
    }



    /**
     * Set affaireArchive
     *
     * @param boolean $affaireArchive
     * @return Affair
     */
    public function setAffaireArchive($affaireArchive)
    {
        $this->affaireArchive = $affaireArchive;

        return $this;
    }

    /**
     * Get affaireArchive
     *
     * @return boolean 
     */
    public function getAffaireArchive()
    {
        return $this->affaireArchive;
    }
}
