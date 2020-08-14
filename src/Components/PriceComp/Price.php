<?php
namespace ProtectedNet\FrontendTest\Components\PriceComp;

use ProtectedNet\FrontendTest\Components\AbstractComponent;

class Price extends AbstractComponent
{
    /** @var string */
    protected $_title;

    /** @var string */
    protected $_price;

    /** @var string */
    protected $_subtitle;

    /** @var string */
    protected $_description;


    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }


    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->_title = $title;

        return $this;
    }


    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->_price;
    }


    /**
     * @param string $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->_price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtitle()
    {
        return $this->_subtitle;
    }

    /**
     * @param string $subtitle
     *
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        $this->_subtitle = $subtitle;

        return $this;
    }



    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->_description = $description;

        return $this;
    }

    /** @return string */
    protected function _getTemplateClass(): string
    {
        return self::class;
    }
    /** @return string */
    public function getBlockName(): string
    {
        return 'Price';
    }

    /** @return $this */
    public static function i()
    {
        return new static();
    }


}
