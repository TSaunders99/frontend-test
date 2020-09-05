<?php
namespace ProtectedNet\FrontendTest\Components\FillWrapper;

use Packaged\Dispatch\ResourceManager;
use ProtectedNet\FrontendTest\Components\AbstractComponent;
use ProtectedNet\FrontendTest\Components\PriceComp\Price;

class Border extends AbstractComponent
{
    protected $_content;

    /**
     * Border constructor.
     *
     * @param string $content
     */
    public function __construct(string $content)
    {
        parent::__construct();
        $this->_content = $content;
    }


    /**
     *
     * @param string $content
     *
     * @return $this
     */
    public static function i(string $content)
    {
        return new static($content);
    }



    /** @return string */
    public function getBlockName(): string
    {
        return 'Border';
    }

    /** @return string */
    protected function _getTemplateClass(): string
    {
        return self::class;
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


    //add 75%
}
