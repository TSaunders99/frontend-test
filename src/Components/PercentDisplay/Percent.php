<?php
namespace ProtectedNet\FrontendTest\Components\PercentDisplay;

use ProtectedNet\FrontendTest\Components\AbstractComponent;
use ProtectedNet\FrontendTest\Components\PriceComp\Price;

class Percent extends AbstractComponent
{
    /** @var string */
    protected $_percent;


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


}
