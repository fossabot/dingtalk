<?php
/**
 * This file is part of the dingtalk.
 * User: Ilham Tahir <yantaq@bilig.biz>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Aplisin\DingTalk;

use Aplisin\DingTalk\Auth\AccessToken;
use Aplisin\DingTalk\Kernel\ServiceContainer;

/**
 * Class Application
 * @property AccessToken $access_token
 */
class Application extends ServiceContainer
{
    protected $defaultConfig = [
        // http://docs.guzzlephp.org/en/stable/request-options.html
        'http' => [
            'base_uri' => 'https://oapi.dingtalk.com/',
        ],
    ];

    public function __call($method, $arguments)
    {
        return $this['base']->$method(...$arguments);
    }
}
