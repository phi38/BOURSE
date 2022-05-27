<?php

namespace ContainerBx4XnA4;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6d693 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0f347 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties88564 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getConnection', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getMetadataFactory', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getExpressionBuilder', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'beginTransaction', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getCache', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'transactional', array('func' => $func), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'commit', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->commit();
    }

    public function rollback()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'rollback', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getClassMetadata', array('className' => $className), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'createQuery', array('dql' => $dql), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'createNamedQuery', array('name' => $name), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'createQueryBuilder', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'flush', array('entity' => $entity), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'clear', array('entityName' => $entityName), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->clear($entityName);
    }

    public function close()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'close', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->close();
    }

    public function persist($entity)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'persist', array('entity' => $entity), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'remove', array('entity' => $entity), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'refresh', array('entity' => $entity), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'detach', array('entity' => $entity), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'merge', array('entity' => $entity), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'contains', array('entity' => $entity), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getEventManager', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getConfiguration', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'isOpen', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getUnitOfWork', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getProxyFactory', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'initializeObject', array('obj' => $obj), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'getFilters', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'isFiltersStateClean', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'hasFilters', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return $this->valueHolder6d693->hasFilters();
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

        $instance->initializer0f347 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6d693) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6d693 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6d693->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, '__get', ['name' => $name], $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        if (isset(self::$publicProperties88564[$name])) {
            return $this->valueHolder6d693->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d693;

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

        $targetObject = $this->valueHolder6d693;
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
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d693;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6d693;
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
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, '__isset', array('name' => $name), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d693;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6d693;
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
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, '__unset', array('name' => $name), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d693;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6d693;
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
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, '__clone', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        $this->valueHolder6d693 = clone $this->valueHolder6d693;
    }

    public function __sleep()
    {
        $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, '__sleep', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;

        return array('valueHolder6d693');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0f347 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0f347;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0f347 && ($this->initializer0f347->__invoke($valueHolder6d693, $this, 'initializeProxy', array(), $this->initializer0f347) || 1) && $this->valueHolder6d693 = $valueHolder6d693;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6d693;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6d693;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
