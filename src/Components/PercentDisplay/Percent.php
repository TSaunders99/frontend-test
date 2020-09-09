<?php
namespace ProtectedNet\FrontendTest\Components\PercentDisplay;

use ProtectedNet\FrontendTest\Components\AbstractComponent;
use Packaged\Dispatch\ResourceManager;

class Percent extends AbstractComponent
{
    /** @var string */
    protected $_percent;


    public function __construct()
    {
        parent::__construct();
        $this->setAttribute('percent-counter', true);
    }


    /**
     * @return string
     */
    public function getPercent()
    {
        return $this->_percent;
    }

    /**
     * @param string $percent
     *
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->_percent = $percent;

        return $this;
    }



    /** @return string */
    public function getBlockName(): string
    {
        return 'Percent';
    }

    /** @return string */
    protected function _getTemplateClass(): string
    {
        return self::class;
    }

    /** @return $this */
    public static function i()
    {
        return new static();
    }

    public function rotate25()
    {
        return $this->_addModifier('rotate-25');
    }
    public function rotate50()
    {
        return $this->_addModifier('rotate-50');
    }
    public function rotate75()
    {
        return $this->_addModifier('rotate-75');
    }
    public function green()
    {
        return $this->_addModifier('green');
    }

    /**
     * Used to set the blockname as an attribute on the component
     * This is used for linking it to typescript component of the same nam
     *
     * @return $this
     */
    protected function _setPrimaryAttributes()
    {
        return $this->setAttribute($this->getBlockName(), true);
    }


    /**
     * The resource manager is used to load any resources that aren't being included by default
     * This is normally anything that's compiled local to the component or partial
     *
     * @param ResourceManager $manager
     *
     * @throws Exception
     */
    protected function _requireResources(ResourceManager $manager)
    {
        parent::_requireResources($manager);
        $manager->requireJs('ts/Percent.c.js');
    }

}

