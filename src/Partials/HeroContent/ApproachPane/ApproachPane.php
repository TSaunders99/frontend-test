<?php
namespace ProtectedNet\FrontendTest\Partials\HeroContent\ApproachPane;

use ProtectedNet\FrontendTest\Partials\AbstractPartial;

class ApproachPane extends AbstractPartial
{
    /** @return string */
    public function getBlockName(): string
    {
        return 'approach-pane';
    }

    /** @return $this */
    public static function i()
    {
        return new static();
    }
}
