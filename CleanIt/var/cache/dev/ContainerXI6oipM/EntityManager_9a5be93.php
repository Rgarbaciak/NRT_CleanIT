<?php

namespace ContainerXI6oipM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderec4ba = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere1e9e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1b379 = [
        
    ];

    public function getConnection()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getConnection', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getMetadataFactory', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getExpressionBuilder', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'beginTransaction', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getCache', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getCache();
    }

    public function transactional($func)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'transactional', array('func' => $func), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'wrapInTransaction', array('func' => $func), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'commit', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->commit();
    }

    public function rollback()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'rollback', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getClassMetadata', array('className' => $className), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'createQuery', array('dql' => $dql), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'createNamedQuery', array('name' => $name), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'createQueryBuilder', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'flush', array('entity' => $entity), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'clear', array('entityName' => $entityName), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->clear($entityName);
    }

    public function close()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'close', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->close();
    }

    public function persist($entity)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'persist', array('entity' => $entity), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'remove', array('entity' => $entity), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'refresh', array('entity' => $entity), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'detach', array('entity' => $entity), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'merge', array('entity' => $entity), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getRepository', array('entityName' => $entityName), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'contains', array('entity' => $entity), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getEventManager', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getConfiguration', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'isOpen', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getUnitOfWork', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getProxyFactory', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'initializeObject', array('obj' => $obj), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'getFilters', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'isFiltersStateClean', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'hasFilters', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return $this->valueHolderec4ba->hasFilters();
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

        $instance->initializere1e9e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderec4ba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderec4ba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderec4ba->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, '__get', ['name' => $name], $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        if (isset(self::$publicProperties1b379[$name])) {
            return $this->valueHolderec4ba->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4ba;

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

        $targetObject = $this->valueHolderec4ba;
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
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4ba;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec4ba;
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
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, '__isset', array('name' => $name), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4ba;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderec4ba;
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
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, '__unset', array('name' => $name), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4ba;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderec4ba;
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
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, '__clone', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        $this->valueHolderec4ba = clone $this->valueHolderec4ba;
    }

    public function __sleep()
    {
        $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, '__sleep', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;

        return array('valueHolderec4ba');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere1e9e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere1e9e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere1e9e && ($this->initializere1e9e->__invoke($valueHolderec4ba, $this, 'initializeProxy', array(), $this->initializere1e9e) || 1) && $this->valueHolderec4ba = $valueHolderec4ba;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec4ba;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec4ba;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
