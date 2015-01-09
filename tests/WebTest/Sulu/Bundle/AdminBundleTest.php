<?php
/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace WebTest\Sulu\Bundle;

use Sauce\Sausage\WebDriverTestCase;

class AdminBundleTest extends WebDriverTestCase
{

    public static $browsers = array(
        array(
            'browserName' => 'firefox',
            //'host' => '%s:%s@localhost',
            //'port' => 4445,
            'desiredCapabilities' => array(
                'platform' => 'Windows 2012',
            )
        ),
        array(
            'browserName' => 'chrome',
            //'host' => '%s:%s@localhost',
            //'port' => 4445,
            'desiredCapabilities' => array(
                'platform' => 'Windows 2012',
            )
        ),
        /*array(
            'browserName' => 'firefox',
            'local' => true,
        ),*/
    );

    public function setUpPage()
    {
        $this->url('http://localhost:8000/admin/login');
    }

    public function testLoginFail()
    {
        $this->byId('username')->value('admin');
        $this->byId('password')->value('...');
        $this->byId('submit')->click();
        $driver = $this;

        $badCredentials = function () use ($driver) {
            return ($driver->byCssSelector('#login .error')->displayed());
        };

        $this->spinAssert('Bad credentials info never showed up!', $badCredentials);
    }

    public function testLogin()
    {
        $this->byId('username')->value('admin');
        $this->byId('password')->value('admin');
        $this->byId('submit')->click();
        $driver = $this;

        $header = function () use ($driver) {
            return $driver->byClassName('navigation')->displayed();
        };

        $this->spinAssert("Header never showed up!", $header);
    }
}
