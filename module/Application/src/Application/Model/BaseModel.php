<?php

namespace Application\Model;

use Doctrine\ORM\EntityRepository,
    Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Tools\Pagination\CountWalker;
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * AlbumModel
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
abstract class BaseModel extends EntityRepository {

    private $query = null;
    private $queryBuilder = null;

    public abstract function getEntityClass();

    public function getFieldValue($entity, $name) {
        return $this->_class->getFieldValue($entity, $name);
    }

    public function getIdentifierValues($entity) {
        return $this->_class->getIdentifierValues($entity);
    }

    public function getIdentifier() {
        $identifier = $this->_class->getIdentifier();
        return @$identifier[0];
//        return @array_shift($identifier);
    }

    public function getEntity($array = null) {
        if (is_object($array)) {
            $array = get_object_vars($array);
        }
        if (is_array($array)) {
            $hydrator = new \DoctrineORMModule\Stdlib\Hydrator\DoctrineEntity($this->_em);
            $identifier = $this->getIdentifier();
            $id = $array[$identifier];
            if ($id) {
                try {
                    $entity = $this->find($id);
                    if ($entity == null) {
                        throw new \Exception();
                    }
                } catch (\Exception $e) {
                    $array[$identifier] = null;
                    $entityClass = $this->getEntityClass();
                    $entity = new $entityClass();
                }
            } else {
                $array[$identifier] = null;
                $entityClass = $this->getEntityClass();
                $entity = new $entityClass();
            }

            foreach ($array as $fieldName => $value) {
                if ($this->_class->hasAssociation($fieldName))
                    if ($value === "") {
                        $array[$fieldName] = null;
                    } else if (is_array($value) || is_object($value)) {
                        $associationMapping = $this->_class->getAssociationMapping($fieldName);
                        $targetEntity = $associationMapping["targetEntity"];
                        $classMetadata = $this->_em->getClassMetadata($targetEntity);
                        $targetIdentifier = $classMetadata->getIdentifier();
                        $targetIdentifier = @$targetIdentifier[0];
                        if (is_array($value)) {
                            $array[$fieldName] = $value[$targetIdentifier];
                        } else {
                            $array[$fieldName] = $value->$targetIdentifier;
                        }
                    }
            }
            $hydrator->hydrate($array, $entity);
            return $entity;
        } else {
            $entityClass = $this->getEntityClass();
            return new $entityClass();
        }
    }

    public function getAlias() {
        $entityClass = $this->getEntityClass();
        $alias = substr(strrchr($entityClass, "\\"), 1);
//        $alias = lcfirst($alias);
        return $alias;
    }

    public function getEntityManager() {
        return parent::getEntityManager();
    }

    public function __construct($em = null) {
        if ($em == null) {
            $em = $GLOBALS["em"];
        }
        $classMetadata = $em->getClassMetadata($this->getEntityClass());
        parent::__construct($em, $classMetadata);
    }

    public function save($id, &$array) {
        if ($id == null || $id <= 0) {
            $this->insert($array);
        } else {
            $this->update($id, $array);
        }
    }

    public function insert(&$array) {
        $entity = $this->getEntity();

        $this->fill($array, $entity);
        $array = $entity;
        //$this->getClassMetadata()->setIdentifierValues($entity, array());
        $this->getEntityManager()->detach($entity);
        $this->getEntityManager()->persist($entity);
        $this->flush();
    }

    public function insertAll(&$array) {
        foreach ($array as $id => $data) {
            $entity = $this->getEntity();

            $this->fill($data, $entity);
            $array[$id] = $entity;

            $this->getEntityManager()->persist($entity);
        }

        $this->flush();
    }

    public function update($id, &$array) {
        $entity = $this->find($id);

        $this->fill($array, $entity);
        $array = $entity;

        $this->flush();
    }

    public function saveAll($newArray, $oldArray = null) {
        //$entity = $this->getEntityManager()->merge($entity);
        $oldIdArray = array();

        if (is_array($oldArray)) {
            foreach ($oldArray as $oldEntity) {
                array_push($oldIdArray, array_shift($this->getIdentifierValues($oldEntity)));
                //echo "old: " . array_shift($this->getIdentifierValues($oldEntity)) . "<br/>";
            }
        }

        foreach ($newArray as $entity) {
            $identifier = $this->getIdentifier();
            if (is_array($entity)) {
                //$type = $this->_class->getTypeOfColumn($identifier);
                $id = $entity[$identifier];
                try {
                    $this->find($id);
                } catch (\Exception $exc) {
                    $entity[$identifier] = null;
                    $id = null;
                }
            } else {
                $id = @array_shift($this->getIdentifierValues($entity));
            }

            if ($id == null || empty($id)) {// || !in_array($id, $oldIdArray)
                $insertEntity = $this->getEntity();
                $this->fill($entity, $insertEntity);
                if (is_object($entity)) {
                    $this->getEntityManager()->detach($entity);
                }
                $this->getEntityManager()->persist($insertEntity);
                //echo "insert: " . @array_shift($this->getIdentifierValues($entity)) . "<br/>";
            } else {
                if (!is_array($oldArray) || in_array($id, $oldIdArray)) {
                    $updateEntity = $this->find($id);
                    $this->fill($entity, $updateEntity);
                    $oldIdArray = array_diff($oldIdArray, array($id));
                    //echo "update: " . $id . "<br/>";
                }
            }
        }

        foreach ($oldIdArray as $id) {
            $deleteEntity = $this->find($id);
            $this->getEntityManager()->remove($deleteEntity);
            //echo "delete: " . $id . "<br/>";
        }

        $this->flush();
    }

    public function updateAll(&$array) {
        foreach ($array as $id => $data) {
            $entity = $this->find($id);
            $this->fill($data, $entity);
            $array[$id] = $entity;
        }

        $this->flush();
    }

    public function delete($id) {
        $entity = $this->find($id);
        if ($entity) {
            $this->getEntityManager()->remove($entity);
            $this->flush();
        }
    }

    public function deleteAll(&$array) {
        foreach ($array as $id => $data) {
            if (!is_object($data)) {
                $data = $this->find($data);
            }
            $this->getEntityManager()->remove($data);
        }

        $this->flush();
    }

    public function flush() {
        $this->getEntityManager()->flush();
    }

    private function fill($array, &$object) {
        $targetClass = $this->getEntityClass();
        $hydrator = new \DoctrineORMModule\Stdlib\Hydrator\DoctrineEntity($GLOBALS['em'],$targetClass);
        if (is_object($array)) {
//            $array = $hydrator->extract($array);
            $object = $array;
            return;
        }
//        foreach ($array as $key => $value) {
//            if($value instanceof \Doctrine\ORM\PersistentCollection){
////                $value =new \Doctrine\ORM\PersistentCollection();
////                $value = $value->takeSnapshot();
//                $value->takeSnapshot();
//            }
//        }
        $hydrator->hydrate($array, $object);
    }

    /**
     * @return \Doctrine\ORM\QueryBuilder $queryBuilder
     */
    public function getQueryBuilder() {
        if ($this->queryBuilder == null) {
            $this->queryBuilder = parent::createQueryBuilder($this->getAlias());
        }
        return $this->queryBuilder;
    }

//    /**
//     * @param \Doctrine\ORM\QueryBuilder $queryBuilder
//     */
//    public function setQueryBuilder($queryBuilder) {
//        $this->queryBuilder = $queryBuilder;
//    }

    /**
     * @return \Doctrine\ORM\Query $query
     */
    public function getQuery() {
        return $this->getQueryBuilder()->getQuery();
    }

    /**
     * @return \Doctrine\ORM\AbstractQuery $result
     */
    public function getQueryResult() {
        return $this->getQuery()->getResult();
    }

    /**
     * @return int $count
     */
    public function getQueryCount() {
        return $this->getCount($this->getQuery());
    }

    /**
     * @return int $count
     */
    public function getCount($query = null) {
        if ($query == null)
            $query = $this->getQueryBuilder()->getQuery();

        if (!$query->getHint(CountWalker::HINT_DISTINCT)) {
            $query->setHint(CountWalker::HINT_DISTINCT, true);
        }

        if ($query->getHint(Query::HINT_CUSTOM_OUTPUT_WALKER) == false) {
            $platform = $query->getEntityManager()->getConnection()->getDatabasePlatform(); // law of demeter win

            $rsm = new ResultSetMapping();
            $rsm->addScalarResult($platform->getSQLResultCasing('dctrn_count'), 'count');

            $query->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Doctrine\ORM\Tools\Pagination\CountOutputWalker');
            $query->setResultSetMapping($rsm);
        } else {
            $query->setHint(Query::HINT_CUSTOM_TREE_WALKERS, array('Doctrine\ORM\Tools\Pagination\CountWalker'));
        }

        $query->setFirstResult(null)->setMaxResults(null);

        try {
            $data = $query->getScalarResult();
            $data = array_map('current', $data);
            $count = array_sum($data);
        } catch (NoResultException $e) {
            $count = 0;
        }
        return $count;
    }

    public function joinAll() {
        $cm = $this->getClassMetadata();
        $qb = $this->getQueryBuilder();
        $alias = $this->getAlias();
        $qb->select($alias);
        foreach ($cm->getAssociationMappings() as $associationMapping) {
            //echo "$alias.{$associationMapping['fieldName']}";
            $qb->leftJoin("$alias.{$associationMapping['fieldName']}", "$alias{$associationMapping['fieldName']}");
            $qb->addSelect("$alias{$associationMapping['fieldName']}");
        }
    }

}

