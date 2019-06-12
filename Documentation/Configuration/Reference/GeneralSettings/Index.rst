.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _configuration-reference-general-settings:

General settings → settings.[options]
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

====================  ==========  =======================================================================================  =====================================================================================
Property:             Data type:  Description:                                                                             Default:
====================  ==========  =======================================================================================  =====================================================================================
player_form           string      The voice reader player style.                                                           1

                                  **Currently supported options:**

                                  1 => Rich

                                  0 => Mini
--------------------  ----------  ---------------------------------------------------------------------------------------  -------------------------------------------------------------------------------------
player_type           string      The voice reader players types.                                                          embedded

                                  **Currently supported options:**

                                  hover => Hovering player

                                  embedded => Embedded player

                                  popup => Pop-up player
--------------------  ----------  ---------------------------------------------------------------------------------------  -------------------------------------------------------------------------------------
player_color          string      The voice reader players color. Must correspond to the skin css                          black
                                  source (see setting vreader_css).

                                  **Currently supported options:**

                                  black | blue | grey
--------------------  ----------  ---------------------------------------------------------------------------------------  -------------------------------------------------------------------------------------
icon                  string      The voice reader icon. Can be text or html or predefined buttons.                        <span>Vorlesen/MP3-Download</span>

                                  **Currently supported options:**

                                  [Text] | [HTML] | 00 | 01 | 02 | 03 | 04 | 05
--------------------  ----------  ---------------------------------------------------------------------------------------  -------------------------------------------------------------------------------------
iconcolor             string      The color of the predefined buttons.

                                  **Currently supported options:**

                                  black | blue | grey | green | red
--------------------  ----------  ---------------------------------------------------------------------------------------  -------------------------------------------------------------------------------------
vreader_css           string      The voice reader css source.                                                             \http://vrweb15.linguatec.org/VoiceReaderWeb15User/player/styles/black/player_skin.css

                                  **Currently supported options:**

                                  \http://vrweb15.linguatec.org/VoiceReaderWeb15User/player/styles/black/player_skin.css

                                  \http://vrweb15.linguatec.org/VoiceReaderWeb15User/player/styles/blue/player_skin.css

                                  \http://vrweb15.linguatec.org/VoiceReaderWeb15User/player/styles/grey/player_skin.css
--------------------  ----------  ---------------------------------------------------------------------------------------  -------------------------------------------------------------------------------------
guilang               string      The language which is used in the audio player.                                          de

                                  **Currently supported options:**

                                  de | en | fr | es | cs | it | pt | nl | ru | pl | sv | zh
--------------------  ----------  ---------------------------------------------------------------------------------------  -------------------------------------------------------------------------------------
lang                  string      The language of the text, the reader is supposed to                                      de-de
                                  read. This means the language of the frontend. If you
                                  run wes_reader on a multi language website you need to
                                  set this parameter within conditional clauses.

                                  **Currently supported options:**

                                  arw | eu-ES | da-DK | de-DE | en-US | en-AU | en-GB | eni | en-IE | ens |
                                  en-ZA | fi-FI | fr-FR | fr-CA | gl-ES | el-GR | he-IL | hi-IN | id-ID |
                                  it-IT | ja-JP | zh-HK | ca-ES | ko-KR | zh-CN | zh-TW | nl-NL | nl-BE |
                                  no-NO | pl-PL | pt-PT | pt-BR | ro-RO | ru-RU | sv-SE | sk-SK | es-ES |
                                  es-AR | es-CO | es-MX | th-TH | cs-CZ | tr-TR | hu-HU | vae
--------------------  ----------  ---------------------------------------------------------------------------------------  -------------------------------------------------------------------------------------
sndgender             string      The gender of the voice.                                                                 W

                                  **Currently supported options:**

                                  M | W
--------------------  ----------  ---------------------------------------------------------------------------------------  -------------------------------------------------------------------------------------
class2read            string      Class name of HTML elements to be read.                                                  read
--------------------  ----------  ---------------------------------------------------------------------------------------  -------------------------------------------------------------------------------------
class2hush            string      Class name of HTML elements explicitly not to be read.                                   readnot
====================  ==========  =======================================================================================  =====================================================================================

[tsref:plugin.tx_wesreader.settings]
