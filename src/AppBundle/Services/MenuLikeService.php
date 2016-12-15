<?php

namespace AppBundle\Services;

class MenuLikeService {


  protected $em;


  public function __construct(\Doctrine\ORM\EntityManager $em)
  {
    $this->em = $em;
  }


  public function allnotes($menusolo)
  {
      return $this->em->getRepository('AppBundle:MenuLike')->toutesLesNotes($menusolo);
  }


  public function moyennedesnotes($menusolo)
  {
    return $this->em->getRepository('AppBundle:MenuLike')->moyenneDesNotes($menusolo);
  }


}
 ?>
