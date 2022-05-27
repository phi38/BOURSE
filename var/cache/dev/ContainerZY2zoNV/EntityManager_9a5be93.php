<?php

namespace ContainerZY2zoNV;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder415e0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0a39c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6a375 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getConnection', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getMetadataFactory', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getExpressionBuilder', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'beginTransaction', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getCache', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'transactional', array('func' => $func), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'commit', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->commit();
    }

    public function rollback()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'rollback', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getClassMetadata', array('className' => $className), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'createQuery', array('dql' => $dql), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'createNamedQuery', array('name' => $name), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'createQueryBuilder', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'flush', array('entity' => $entity), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'clear', array('entityName' => $entityName), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->clear($entityName);
    }

    public function close()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'close', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->close();
    }

    public function persist($entity)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'persist', array('entity' => $entity), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'remove', array('entity' => $entity), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'refresh', array('entity' => $entity), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'detach', array('entity' => $entity), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'merge', array('entity' => $entity), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'contains', array('entity' => $entity), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getEventManager', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getConfiguration', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'isOpen', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getUnitOfWork', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getProxyFactory', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'initializeObject', array('obj' => $obj), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'getFilters', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'isFiltersStateClean', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'hasFilters', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return $this->valueHolder415e0->hasFilters();
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

        $instance->initializer0a39c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder415e0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder415e0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder415e0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, '__get', ['name' => $name], $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        if (isset(self::$publicProperties6a375[$name])) {
            return $this->valueHolder415e0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder415e0;

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

        $targetObject = $this->valueHolder415e0;
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
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder415e0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder415e0;
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
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, '__isset', array('name' => $name), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder415e0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder415e0;
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
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, '__unset', array('name' => $name), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder415e0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder415e0;
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
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, '__clone', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        $this->valueHolder415e0 = clone $this->valueHolder415e0;
    }

    public function __sleep()
    {
        $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, '__sleep', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;

        return array('valueHolder415e0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0a39c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0a39c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0a39c && ($this->initializer0a39c->__invoke($valueHolder415e0, $this, 'initializeProxy', array(), $this->initializer0a39c) || 1) && $this->valueHolder415e0 = $valueHolder415e0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder415e0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder415e0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
