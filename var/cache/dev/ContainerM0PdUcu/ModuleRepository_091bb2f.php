<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder452a4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer96b05 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb13d0 = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, 'getList', array(), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        return $this->valueHolder452a4->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, 'getInstalledModules', array(), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        return $this->valueHolder452a4->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, 'getMustBeConfiguredModules', array(), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        return $this->valueHolder452a4->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, 'getUpgradableModules', array(), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        return $this->valueHolder452a4->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        return $this->valueHolder452a4->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        return $this->valueHolder452a4->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, 'setActionUrls', array('collection' => $collection), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        return $this->valueHolder452a4->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        return $this->valueHolder452a4->clearCache($moduleName, $allShops);
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

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer96b05 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder452a4) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder452a4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder452a4->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, '__get', ['name' => $name], $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        if (isset(self::$publicPropertiesb13d0[$name])) {
            return $this->valueHolder452a4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder452a4;

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

        $targetObject = $this->valueHolder452a4;
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
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder452a4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder452a4;
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
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, '__isset', array('name' => $name), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder452a4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder452a4;
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
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, '__unset', array('name' => $name), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder452a4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder452a4;
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
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, '__clone', array(), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        $this->valueHolder452a4 = clone $this->valueHolder452a4;
    }

    public function __sleep()
    {
        $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, '__sleep', array(), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;

        return array('valueHolder452a4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer96b05 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer96b05;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer96b05 && ($this->initializer96b05->__invoke($valueHolder452a4, $this, 'initializeProxy', array(), $this->initializer96b05) || 1) && $this->valueHolder452a4 = $valueHolder452a4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder452a4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder452a4;
    }
}
