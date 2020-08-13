<?php
namespace ProtectedNet\FrontendTest;

use Cubex\Context\Context;
use Cubex\Cubex;
use Cubex\Events\Handle\ResponsePreSendHeadersEvent;
use Packaged\Http\Response;
use Packaged\Routing\Handler\Handler;
use ProtectedNet\FrontendTest\Controllers\DefaultController;
use ProtectedNet\FrontendTestFramework\AbstractFrontendTestSite;
use ProtectedNet\FrontendTestFramework\Dispatch\Dispatcher;

class FrontendTestSite extends AbstractFrontendTestSite
{
  /**
   * FrontendTestSite constructor.
   *
   * @param Cubex $cubex
   */
  public function __construct(Cubex $cubex)
  {
    parent::__construct($cubex);

    // Resource Handler
    Dispatcher::i(dirname(__DIR__));
  }

  /** @return Handler */
  protected function _defaultHandler(): Handler
  {
    return new DefaultController();
  }

  protected function _initialize()
  {
    parent::_initialize();

    //Send debug headers locally
    $this->getCubex()->listen(
      ResponsePreSendHeadersEvent::class,
      function (ResponsePreSendHeadersEvent $e) {
        $response = $e->getResponse();
        $response->headers->set(
          'Content-Security-Policy',
          "default-src * 'unsafe-inline' 'unsafe-eval'; script-src * 'unsafe-inline' 'unsafe-eval'; connect-src * 'unsafe-inline'; img-src * data: blob: 'unsafe-inline'; frame-src *; style-src * 'unsafe-inline';"

        );
      }
    );
  }

}
