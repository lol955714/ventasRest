<?php

namespace ContainerKl5hdbV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder41051 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc7826 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4b408 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getConnection', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getMetadataFactory', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getExpressionBuilder', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'beginTransaction', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getCache', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'transactional', array('func' => $func), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'commit', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->commit();
    }

    public function rollback()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'rollback', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getClassMetadata', array('className' => $className), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'createQuery', array('dql' => $dql), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'createNamedQuery', array('name' => $name), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'createQueryBuilder', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'flush', array('entity' => $entity), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'clear', array('entityName' => $entityName), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->clear($entityName);
    }

    public function close()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'close', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->close();
    }

    public function persist($entity)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'persist', array('entity' => $entity), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'remove', array('entity' => $entity), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'refresh', array('entity' => $entity), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'detach', array('entity' => $entity), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'merge', array('entity' => $entity), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'contains', array('entity' => $entity), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getEventManager', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getConfiguration', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'isOpen', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getUnitOfWork', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getProxyFactory', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'initializeObject', array('obj' => $obj), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'getFilters', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'isFiltersStateClean', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'hasFilters', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return $this->valueHolder41051->hasFilters();
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

        $instance->initializerc7826 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder41051) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder41051 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder41051->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, '__get', ['name' => $name], $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        if (isset(self::$publicProperties4b408[$name])) {
            return $this->valueHolder41051->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41051;

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

        $targetObject = $this->valueHolder41051;
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
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41051;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder41051;
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
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, '__isset', array('name' => $name), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41051;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder41051;
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
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, '__unset', array('name' => $name), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41051;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder41051;
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
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, '__clone', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        $this->valueHolder41051 = clone $this->valueHolder41051;
    }

    public function __sleep()
    {
        $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, '__sleep', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;

        return array('valueHolder41051');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc7826 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc7826;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc7826 && ($this->initializerc7826->__invoke($valueHolder41051, $this, 'initializeProxy', array(), $this->initializerc7826) || 1) && $this->valueHolder41051 = $valueHolder41051;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder41051;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder41051;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
