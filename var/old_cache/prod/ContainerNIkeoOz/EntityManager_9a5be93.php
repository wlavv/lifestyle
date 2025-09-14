<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder30f09 = null;
    private $initializer115e6 = null;
    private static $publicPropertiesde99c = [
        
    ];
    public function getConnection()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getConnection', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getMetadataFactory', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getExpressionBuilder', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'beginTransaction', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getCache', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getCache();
    }
    public function transactional($func)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'transactional', array('func' => $func), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'wrapInTransaction', array('func' => $func), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'commit', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->commit();
    }
    public function rollback()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'rollback', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getClassMetadata', array('className' => $className), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'createQuery', array('dql' => $dql), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'createNamedQuery', array('name' => $name), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'createQueryBuilder', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'flush', array('entity' => $entity), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'clear', array('entityName' => $entityName), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->clear($entityName);
    }
    public function close()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'close', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->close();
    }
    public function persist($entity)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'persist', array('entity' => $entity), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'remove', array('entity' => $entity), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'refresh', array('entity' => $entity), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'detach', array('entity' => $entity), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'merge', array('entity' => $entity), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getRepository', array('entityName' => $entityName), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'contains', array('entity' => $entity), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getEventManager', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getConfiguration', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'isOpen', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getUnitOfWork', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getProxyFactory', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'initializeObject', array('obj' => $obj), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'getFilters', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'isFiltersStateClean', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'hasFilters', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return $this->valueHolder30f09->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer115e6 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder30f09) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder30f09 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder30f09->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, '__get', ['name' => $name], $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        if (isset(self::$publicPropertiesde99c[$name])) {
            return $this->valueHolder30f09->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30f09;
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
        $targetObject = $this->valueHolder30f09;
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
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30f09;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder30f09;
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
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, '__isset', array('name' => $name), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30f09;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder30f09;
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
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, '__unset', array('name' => $name), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30f09;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder30f09;
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
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, '__clone', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        $this->valueHolder30f09 = clone $this->valueHolder30f09;
    }
    public function __sleep()
    {
        $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, '__sleep', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
        return array('valueHolder30f09');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer115e6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer115e6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer115e6 && ($this->initializer115e6->__invoke($valueHolder30f09, $this, 'initializeProxy', array(), $this->initializer115e6) || 1) && $this->valueHolder30f09 = $valueHolder30f09;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder30f09;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder30f09;
    }
}
