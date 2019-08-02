<?php
namespace ProtectedNet\FrontendTest\Components;

use Exception;
use Packaged\Dispatch\ResourceManager;
use ProtectedNet\FrontendTestFramework\Components\AbstractComponent as GlobalAbstractComponent;

abstract class AbstractComponent extends GlobalAbstractComponent
{
  /**
   * @param ResourceManager $manager
   *
   * @throws Exception
   */
  protected function _requireResources(ResourceManager $manager)
  {
    ResourceManager::componentClass(self::class)->requireCss('styles/component-styles.min.css');
  }
}

