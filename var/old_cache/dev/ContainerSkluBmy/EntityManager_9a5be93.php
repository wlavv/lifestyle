<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder30f12 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer96e42 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa7d92 = [
        
    ];

    public function getConnection()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getConnection', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getMetadataFactory', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getExpressionBuilder', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'beginTransaction', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getCache', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getCache();
    }

    public function transactional($func)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'transactional', array('func' => $func), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'wrapInTransaction', array('func' => $func), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'commit', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->commit();
    }

    public function rollback()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'rollback', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getClassMetadata', array('className' => $className), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'createQuery', array('dql' => $dql), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'createNamedQuery', array('name' => $name), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'createQueryBuilder', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'flush', array('entity' => $entity), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'clear', array('entityName' => $entityName), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->clear($entityName);
    }

    public function close()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'close', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->close();
    }

    public function persist($entity)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'persist', array('entity' => $entity), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'remove', array('entity' => $entity), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'refresh', array('entity' => $entity), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'detach', array('entity' => $entity), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'merge', array('entity' => $entity), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getRepository', array('entityName' => $entityName), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'contains', array('entity' => $entity), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getEventManager', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getConfiguration', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'isOpen', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getUnitOfWork', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getProxyFactory', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'initializeObject', array('obj' => $obj), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'getFilters', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'isFiltersStateClean', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'hasFilters', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return $this->valueHolder30f12->hasFilters();
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

        $instance->initializer96e42 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder30f12) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder30f12 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder30f12->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, '__get', ['name' => $name], $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        if (isset(self::$publicPropertiesa7d92[$name])) {
            return $this->valueHolder30f12->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30f12;

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

        $targetObject = $this->valueHolder30f12;
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
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30f12;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder30f12;
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
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, '__isset', array('name' => $name), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30f12;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder30f12;
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
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, '__unset', array('name' => $name), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30f12;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder30f12;
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
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, '__clone', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        $this->valueHolder30f12 = clone $this->valueHolder30f12;
    }

    public function __sleep()
    {
        $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, '__sleep', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;

        return array('valueHolder30f12');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer96e42 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer96e42;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer96e42 && ($this->initializer96e42->__invoke($valueHolder30f12, $this, 'initializeProxy', array(), $this->initializer96e42) || 1) && $this->valueHolder30f12 = $valueHolder30f12;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder30f12;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder30f12;
    }
}
