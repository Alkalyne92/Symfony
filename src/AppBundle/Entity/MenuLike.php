<?php
namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MenuLikeRepository")
 * @ORM\Table(name="menu_like")
 */
class MenuLike {


    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var int
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;


    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Menu")
     * @ORM\JoinColumn(name="menu_id", referencedColumnName="id")
     */
    private $menuassociated;


    /**
     * @var string
     * @ORM\Column(name="user", type="string")
     */
    private $user;

    /**
     * @var string
     * @ORM\Column(name="commentaire", type="string")
     */
    private $commentaire;




    /**
     * Get the value of Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param int id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set the value of Rating
     *
     * @param int rating
     *
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get the value of Menuassociated
     *
     * @return int
     */
    public function getMenuassociated()
    {
        return $this->menuassociated;
    }

    /**
     * Set the value of Menuassociated
     *
     * @param int menuassociated
     *
     * @return self
     */
    public function setMenuassociated($menuassociated)
    {
        $this->menuassociated = $menuassociated;

        return $this;
    }

    /**
     * Get the value of User
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of User
     *
     * @param string user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }


    /**
     * Get the value of Commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set the value of Commentaire
     *
     * @param string commentaire
     *
     * @return self
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

}


?>
