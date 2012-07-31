<?php
// src/DarkRises/WebBundle/Entity/Fanart.php
namespace DarkRises\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fanart")
 */
class Fanart
{
	/**
	 * @ORM\Column(type="datetime")
	 */
	 protected $agregado;

	/**
     * @ORM\Column(type="string",length=200)
     */
	protected $autor;
	
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
	
	/**
     * @ORM\Column(type="string",length=500)
     */
	protected $likeAddress;
	
	/**
     * @ORM\Column(type="string",length=500)
     */
	protected $shareFacebook;
	
	/**
     * @ORM\Column(type="string",length=500)
     */
	protected $shareTwitter;
	
	/**
     * @ORM\Column(type="string",length=500)
     */
	protected $shareGoogle;
    
    /**
     * @ORM\Column(type="string",length=1000)
     */
    protected $commentsFacebook;
    
    /**
     * @ORM\Column(type="string",length=500)
     */
	protected $path;

	public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../testing/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/fanart';
    }
    
     /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;
    
    /**
     * Set agregado
     *
     * @param datetime $agregado
     */
    public function setAgregado($agregado)
    {
        $this->agregado = $agregado;
    }

    /**
     * Get agregado
     *
     * @return datetime 
     */
    public function getAgregado()
    {
        return $this->agregado;
    }

    /**
     * Set autor
     *
     * @param string $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
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
     * Set likeAddress
     *
     * @param string $likeAddress
     */
    public function setLikeAddress($likeAddress)
    {
        $this->likeAddress = $likeAddress;
    }

    /**
     * Get likeAddress
     *
     * @return string 
     */
    public function getLikeAddress()
    {
        return $this->likeAddress;
    }

    /**
     * Set shareFacebook
     *
     * @param string $shareFacebook
     */
    public function setShareFacebook($shareFacebook)
    {
        $this->shareFacebook = $shareFacebook;
    }

    /**
     * Get shareFacebook
     *
     * @return string 
     */
    public function getShareFacebook()
    {
        return $this->shareFacebook;
    }

    /**
     * Set shareTwitter
     *
     * @param string $shareTwitter
     */
    public function setShareTwitter($shareTwitter)
    {
        $this->shareTwitter = $shareTwitter;
    }

    /**
     * Get shareTwitter
     *
     * @return string 
     */
    public function getShareTwitter()
    {
        return $this->shareTwitter;
    }

    /**
     * Set shareGoogle
     *
     * @param string $shareGoogle
     */
    public function setShareGoogle($shareGoogle)
    {
        $this->shareGoogle = $shareGoogle;
    }

    /**
     * Get shareGoogle
     *
     * @return string 
     */
    public function getShareGoogle()
    {
        return $this->shareGoogle;
    }

    /**
     * Set commentsFacebook
     *
     * @param string $commentsFacebook
     */
    public function setCommentsFacebook($commentsFacebook)
    {
        $this->commentsFacebook = $commentsFacebook;
    }

    /**
     * Get commentsFacebook
     *
     * @return string 
     */
    public function getCommentsFacebook()
    {
        return $this->commentsFacebook;
    }
}