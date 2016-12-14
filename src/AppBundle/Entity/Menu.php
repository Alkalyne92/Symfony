<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\NotBlank;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MenuRepository")
 * @ORM\Table(name="Menu")
 */
class Menu
{


  /**
   * @var int
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;


  /**
   * @var string
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;

  /**
   * @var string
   *
   * @ORM\Column(name="description", type="string", length=255)
   *@NotBlank()
   */
  private $description;

  /**
   * @var string
   *
   * @ORM\Column(name="ingredients", type="string", length=255)
   *@NotBlank()
   */
  private $ingredients;

  public function __construct()
  {
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
   * Get the value of Ingredients
   *
   * @return string
   */
  public function getIngredients()
  {
      return $this->ingredients;
  }

  /**
   * Set the value of Ingredients
   *
   * @param string ingredients
   *
   * @return self
   */
  public function setIngredients($ingredients)
  {
      $this->ingredients = $ingredients;

      return $this;
  }


    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param string name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param string description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }




}
