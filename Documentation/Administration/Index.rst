.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _administration:

Administration
==============

In order to get wes_reader to do its job simply include the USER TypoScript for the WesReader controller. However
do not forget to include the static TS template of the extension into your main template. Finally
you need to tell wes_reader which parts of the website are to be read. To do this, ensure content is
inside an element having class “read” assigned. You can change the class name via TypoScript
setup.

**Example:**

<div id=”header” class=”read”>

Read me!

</div>

<ul id=”nav”>

<li>Do not read me.</li>

...

</div>

<div id=”content” class=”read”>

Read me again!

</div>

.. toctree::
    :maxdepth: 2
    :titlesonly:

    PluginOptions/Index
    Integration/Index
