<?php
// src/DarkRises/WebBundle/Entity/Fanart.php
namespace DarkRises\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity
 * @ORM\Table(name="fanart")
 * @ORM\Entity(repositoryClass="DarkRises\WebBundle\Repository\FanartRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Fanart
{
	/**
	 * @ORM\Column(type="datetime")
	 */
	 protected $agregado;

	/**
     * @ORM\Column(type="string",length=200)
     * @Assert\NotBlank()
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
     * @Assert\Image()
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
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/fanart';
    }
    
     /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

// a property used temporarily while deleting
    private $filenameForRemove;

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            $this->path = str_replace(" ", "",$this->autor).str_replace(" ", "", $this->file->getClientOriginalName());
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }
		
        $this->file->move($this->getUploadRootDir(), str_replace(" ", "",$this->id.$this->autor).str_replace(" ", "", $this->file->getClientOriginalName()));

        unset($this->file);
    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->filenameForRemove = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($this->filenameForRemove) {
            unlink($this->filenameForRemove);
        }
    }
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
     * Set path
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
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
}