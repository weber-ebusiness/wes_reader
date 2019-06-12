<?php
namespace WES\WesReader\Controller;

 /***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Weber eBusiness Services GmbH <info@weber-ebusiness.de>, Weber eBusiness Services GmbH
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ReaderController extends ActionController
{
    protected static $extConf;

    /**
     * index action
     *
     * @return void
     */
    public function indexAction()
    {
        if (self::getExtConfig('customerid') == '' || self::getExtConfig('typo3codeid') == '') {
            return 'ERROR: No Linguatec customerid or typo3codeid defined. Please define a valid customerid and typo3codeid in the extension configuration.';
        } else {
            $this->view->assignMultiple(
                [
                    'customerid' => trim(self::getExtConfig('customerid')),
                    'api' => $this->getAPISource(self::getExtConfig('typo3codeid')),
                ]
            );
        }
    }

    private static function getExtConfig($key)
    {
        if (!self::$extConf) {
            self::$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['wes_reader']);
        }
        return self::$extConf[$key];
    }

    private function getAPISource($id)
    {
        return '//vrweb15.linguatec.org/VoiceReaderWeb15User/player/scripts/'.trim($id).'.js';
    }
}
