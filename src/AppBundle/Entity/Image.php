<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image", indexes={@ORM\Index(name="id_repository", columns={"id_repository"})})
 * @ORM\Entity
 */
class Image
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="legend", type="text", length=65535, nullable=true)
     */
    private $legend;

    /**
     * @var integer
     *
     * @ORM\Column(name="orientation", type="integer", nullable=false)
     */
    private $orientation;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Repository
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Repository")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_repository", referencedColumnName="id")
     * })
     */
    private $idRepository;



    /**
     * Set title
     *
     * @param string $title
     * @return Image
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set legend
     *
     * @param string $legend
     * @return Image
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;

        return $this;
    }

    /**
     * Get legend
     *
     * @return string
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * Set orientation
     *
     * @param integer $orientation
     * @return Image
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * Get orientation
     *
     * @return integer
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

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
     * Set idRepository
     *
     * @param \AppBundle\Entity\Repository $idRepository
     * @return Image
     */
    public function setIdRepository(\AppBundle\Entity\Repository $idRepository = null)
    {
        $this->idRepository = $idRepository;

        return $this;
    }

    /**
     * Get idRepository
     *
     * @return \AppBundle\Entity\Repository
     */
    public function getIdRepository()
    {
        return $this->idRepository;
    }

    public function deleteImagesFromPath($kernel){

      $path = $this->getPath();

      $originalFolder = $kernel->getRootDir()."/../web/images/original/".$path;

      $largeFolder = $kernel->getRootDir()."/../web/images/large/".$path;

      $smallFolder = $kernel->getRootDir()."/../web/images/small/".$path;

      return unlink($originalFolder) && unlink($largeFolder) && unlink($smallFolder);

    }
}
