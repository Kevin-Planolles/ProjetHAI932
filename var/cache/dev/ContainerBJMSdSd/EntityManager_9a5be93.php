<?php

namespace ContainerBJMSdSd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdf068 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5002f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9dc81 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getConnection', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getMetadataFactory', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getExpressionBuilder', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'beginTransaction', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getCache', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'transactional', array('func' => $func), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'commit', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->commit();
    }

    public function rollback()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'rollback', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getClassMetadata', array('className' => $className), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'createQuery', array('dql' => $dql), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'createNamedQuery', array('name' => $name), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'createQueryBuilder', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'flush', array('entity' => $entity), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'clear', array('entityName' => $entityName), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->clear($entityName);
    }

    public function close()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'close', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->close();
    }

    public function persist($entity)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'persist', array('entity' => $entity), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'remove', array('entity' => $entity), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'refresh', array('entity' => $entity), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'detach', array('entity' => $entity), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'merge', array('entity' => $entity), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'contains', array('entity' => $entity), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getEventManager', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getConfiguration', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'isOpen', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getUnitOfWork', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getProxyFactory', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'initializeObject', array('obj' => $obj), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'getFilters', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'isFiltersStateClean', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'hasFilters', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return $this->valueHolderdf068->hasFilters();
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

        $instance->initializer5002f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdf068) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdf068 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdf068->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, '__get', ['name' => $name], $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        if (isset(self::$publicProperties9dc81[$name])) {
            return $this->valueHolderdf068->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf068;

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

        $targetObject = $this->valueHolderdf068;
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
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf068;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdf068;
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
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, '__isset', array('name' => $name), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf068;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdf068;
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
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, '__unset', array('name' => $name), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf068;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdf068;
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
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, '__clone', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        $this->valueHolderdf068 = clone $this->valueHolderdf068;
    }

    public function __sleep()
    {
        $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, '__sleep', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;

        return array('valueHolderdf068');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5002f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5002f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5002f && ($this->initializer5002f->__invoke($valueHolderdf068, $this, 'initializeProxy', array(), $this->initializer5002f) || 1) && $this->valueHolderdf068 = $valueHolderdf068;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdf068;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdf068;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
