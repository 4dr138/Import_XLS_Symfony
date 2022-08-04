<?php

namespace ContainerYyd9Zs3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc432c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer32352 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties990dc = [
        
    ];

    public function getConnection()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getConnection', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getMetadataFactory', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getExpressionBuilder', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'beginTransaction', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getCache', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'transactional', array('func' => $func), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'commit', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->commit();
    }

    public function rollback()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'rollback', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getClassMetadata', array('className' => $className), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'createQuery', array('dql' => $dql), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'createNamedQuery', array('name' => $name), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'createQueryBuilder', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'flush', array('entity' => $entity), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'clear', array('entityName' => $entityName), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->clear($entityName);
    }

    public function close()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'close', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->close();
    }

    public function persist($entity)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'persist', array('entity' => $entity), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'remove', array('entity' => $entity), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'refresh', array('entity' => $entity), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'detach', array('entity' => $entity), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'merge', array('entity' => $entity), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'contains', array('entity' => $entity), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getEventManager', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getConfiguration', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'isOpen', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getUnitOfWork', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getProxyFactory', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'initializeObject', array('obj' => $obj), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'getFilters', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'isFiltersStateClean', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'hasFilters', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return $this->valueHolderc432c->hasFilters();
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

        $instance->initializer32352 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc432c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc432c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc432c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, '__get', ['name' => $name], $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        if (isset(self::$publicProperties990dc[$name])) {
            return $this->valueHolderc432c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc432c;

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

        $targetObject = $this->valueHolderc432c;
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
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc432c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc432c;
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
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, '__isset', array('name' => $name), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc432c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc432c;
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
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, '__unset', array('name' => $name), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc432c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc432c;
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
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, '__clone', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        $this->valueHolderc432c = clone $this->valueHolderc432c;
    }

    public function __sleep()
    {
        $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, '__sleep', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;

        return array('valueHolderc432c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer32352 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer32352;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer32352 && ($this->initializer32352->__invoke($valueHolderc432c, $this, 'initializeProxy', array(), $this->initializer32352) || 1) && $this->valueHolderc432c = $valueHolderc432c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc432c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc432c;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
