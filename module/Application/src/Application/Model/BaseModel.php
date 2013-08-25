<?php

namespace Application\Model;

use Doctrine\ORM\EntityRepository;

abstract class BaseModel extends EntityRepository {

    public abstract function getEntityClass();

    public function __construct($em) {
        $class = $em->getClassMetadata($this->getEntityClass());
        parent::__construct($em, $class);
    }

}

?>
