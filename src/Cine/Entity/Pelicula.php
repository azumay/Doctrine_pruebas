<?php
namespace Cine\Entity;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Column;
/**
* Pelicula
*
* @Entity
* @Table( name="movie" )
*
*/
class Pelicula {
	
	/**
	 * @var int
	 *
	 * @Id
	 * @GeneratedValue
	 * @Column(type="integer")
	 */
	private $id;
	/**
	 * @var string
	 *
	 * @Column(type="string", length=100, name="spanish_title")
	 */
	private $titulo;
	/**
	 * @var string
	 *
	 * @Column(type="string", length=100, name="original_title", nullable=false)
	 */
	private $tituloOriginal;
	/**
	 * @var string
	 *
	 * @Column(type="string", length=100)
	 */
	private $director;
	/**
	 * @var int
	 *
	 * @Column(type="integer", name="year", nullable=false, unique=false,
	 options={"unsigned":true, "default":0})
	 */
	private $anyo;

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
     * Set titulo
     *
     * @param string $titulo
     * @return Pelicula
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set tituloOriginal
     *
     * @param string $tituloOriginal
     * @return Pelicula
     */
    public function setTituloOriginal($tituloOriginal)
    {
        $this->tituloOriginal = $tituloOriginal;

        return $this;
    }

    /**
     * Get tituloOriginal
     *
     * @return string 
     */
    public function getTituloOriginal()
    {
        return $this->tituloOriginal;
    }

    /**
     * Set director
     *
     * @param string $director
     * @return Pelicula
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return string 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set anyo
     *
     * @param integer $anyo
     * @return Pelicula
     */
    public function setAnyo($anyo)
    {
        $this->anyo = $anyo;

        return $this;
    }

    /**
     * Get anyo
     *
     * @return integer 
     */
    public function getAnyo()
    {
        return $this->anyo;
    }
}
