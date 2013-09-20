<?php

namespace Application\Model;

use Doctrine\ORM\EntityRepository,
    Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Tools\Pagination\CountWalker;
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\ResultSetMapping;

class EmptyModel extends EntityRepository {

    //put your code here
    public function __construct($em, $class) {
        if ($em == null) {
            $em = $GLOBALS["em"];
        }
        $classMetadata = $em->getClassMetadata($class);
        parent::__construct($em, $classMetadata);
    }

}

?>
