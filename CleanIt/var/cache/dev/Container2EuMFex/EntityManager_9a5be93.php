<?php

namespace Container2EuMFex;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder382c2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerea859 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties149f2 = [
        
    ];

    public function getConnection()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getConnection', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getMetadataFactory', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getExpressionBuilder', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'beginTransaction', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getCache', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'transactional', array('func' => $func), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'commit', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->commit();
    }

    public function rollback()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'rollback', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getClassMetadata', array('className' => $className), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'createQuery', array('dql' => $dql), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'createNamedQuery', array('name' => $name), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'createQueryBuilder', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'flush', array('entity' => $entity), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'clear', array('entityName' => $entityName), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->clear($entityName);
    }

    public function close()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'close', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->close();
    }

    public function persist($entity)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'persist', array('entity' => $entity), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'remove', array('entity' => $entity), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'refresh', array('entity' => $entity), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'detach', array('entity' => $entity), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'merge', array('entity' => $entity), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'contains', array('entity' => $entity), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getEventManager', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getConfiguration', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'isOpen', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getUnitOfWork', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getProxyFactory', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'initializeObject', array('obj' => $obj), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'getFilters', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'isFiltersStateClean', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'hasFilters', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return $this->valueHolder382c2->hasFilters();
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

        $instance->initializerea859 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder382c2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder382c2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder382c2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, '__get', ['name' => $name], $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        if (isset(self::$publicProperties149f2[$name])) {
            return $this->valueHolder382c2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder382c2;

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

        $targetObject = $this->valueHolder382c2;
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
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder382c2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder382c2;
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
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, '__isset', array('name' => $name), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder382c2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder382c2;
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
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, '__unset', array('name' => $name), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder382c2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder382c2;
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
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, '__clone', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        $this->valueHolder382c2 = clone $this->valueHolder382c2;
    }

    public function __sleep()
    {
        $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, '__sleep', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;

        return array('valueHolder382c2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerea859 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerea859;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerea859 && ($this->initializerea859->__invoke($valueHolder382c2, $this, 'initializeProxy', array(), $this->initializerea859) || 1) && $this->valueHolder382c2 = $valueHolder382c2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder382c2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder382c2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
