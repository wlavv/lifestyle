<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9fc78 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd8d53 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0eede = [
        
    ];

    public function getConnection()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getConnection', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getMetadataFactory', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getExpressionBuilder', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'beginTransaction', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getCache', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'transactional', array('func' => $func), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'commit', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->commit();
    }

    public function rollback()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'rollback', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getClassMetadata', array('className' => $className), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'createQuery', array('dql' => $dql), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'createNamedQuery', array('name' => $name), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'createQueryBuilder', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'flush', array('entity' => $entity), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'clear', array('entityName' => $entityName), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->clear($entityName);
    }

    public function close()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'close', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->close();
    }

    public function persist($entity)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'persist', array('entity' => $entity), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'remove', array('entity' => $entity), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'refresh', array('entity' => $entity), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'detach', array('entity' => $entity), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'merge', array('entity' => $entity), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'contains', array('entity' => $entity), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getEventManager', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getConfiguration', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'isOpen', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getUnitOfWork', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getProxyFactory', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'initializeObject', array('obj' => $obj), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'getFilters', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'isFiltersStateClean', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'hasFilters', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return $this->valueHolder9fc78->hasFilters();
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

        $instance->initializerd8d53 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9fc78) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9fc78 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9fc78->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, '__get', ['name' => $name], $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        if (isset(self::$publicProperties0eede[$name])) {
            return $this->valueHolder9fc78->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fc78;

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

        $targetObject = $this->valueHolder9fc78;
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
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fc78;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9fc78;
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
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, '__isset', array('name' => $name), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fc78;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9fc78;
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
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, '__unset', array('name' => $name), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fc78;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9fc78;
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
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, '__clone', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        $this->valueHolder9fc78 = clone $this->valueHolder9fc78;
    }

    public function __sleep()
    {
        $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, '__sleep', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;

        return array('valueHolder9fc78');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd8d53 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd8d53;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd8d53 && ($this->initializerd8d53->__invoke($valueHolder9fc78, $this, 'initializeProxy', array(), $this->initializerd8d53) || 1) && $this->valueHolder9fc78 = $valueHolder9fc78;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9fc78;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9fc78;
    }
}
