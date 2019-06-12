.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _administration-integration-globally:

Globally
^^^^^^^^

The more common way of using wes_reader is globally i.e. on every page in your TYPO3 installation.
In order to accomplish this, you don't have to insert the plugin on every page by hand.

Then you could render the reader link with an TypoScript config using the cObject USER.
Finally this TypoScript could be assigned directly in your page object or in a marker value of your fluid page template.

The USER TypoScript would look like this:

.. code-block:: typoscript

  lib.reader = USER
  lib.reader {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    pluginName = Pi1
    extensionName = WesReader
    controller = Reader
    vendorName = WES
    view =< plugin.tx_wesreader.view
    settings =< plugin.tx_wesreader.settings
  }
