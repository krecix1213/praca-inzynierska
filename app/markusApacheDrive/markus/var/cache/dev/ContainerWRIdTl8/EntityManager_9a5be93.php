<?php

namespace ContainerWRIdTl8;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere8940 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera123a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa5dbe = [
        
    ];

    public function getConnection()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getConnection', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getMetadataFactory', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getExpressionBuilder', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'beginTransaction', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getCache', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getCache();
    }

    public function transactional($func)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'transactional', array('func' => $func), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'wrapInTransaction', array('func' => $func), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'commit', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->commit();
    }

    public function rollback()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'rollback', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getClassMetadata', array('className' => $className), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'createQuery', array('dql' => $dql), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'createNamedQuery', array('name' => $name), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'createQueryBuilder', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'flush', array('entity' => $entity), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'clear', array('entityName' => $entityName), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->clear($entityName);
    }

    public function close()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'close', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->close();
    }

    public function persist($entity)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'persist', array('entity' => $entity), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'remove', array('entity' => $entity), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'refresh', array('entity' => $entity), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'detach', array('entity' => $entity), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'merge', array('entity' => $entity), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getRepository', array('entityName' => $entityName), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'contains', array('entity' => $entity), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getEventManager', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getConfiguration', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'isOpen', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getUnitOfWork', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getProxyFactory', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'initializeObject', array('obj' => $obj), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'getFilters', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'isFiltersStateClean', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'hasFilters', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return $this->valueHoldere8940->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera123a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere8940) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere8940 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere8940->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, '__get', ['name' => $name], $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        if (isset(self::$publicPropertiesa5dbe[$name])) {
            return $this->valueHoldere8940->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8940;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere8940;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8940;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere8940;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, '__isset', array('name' => $name), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8940;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere8940;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, '__unset', array('name' => $name), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere8940;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere8940;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, '__clone', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        $this->valueHoldere8940 = clone $this->valueHoldere8940;
    }

    public function __sleep()
    {
        $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, '__sleep', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;

        return array('valueHoldere8940');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera123a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera123a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera123a && ($this->initializera123a->__invoke($valueHoldere8940, $this, 'initializeProxy', array(), $this->initializera123a) || 1) && $this->valueHoldere8940 = $valueHoldere8940;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere8940;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere8940;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
