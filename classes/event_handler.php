<?php

/**
* 
*/
class SPPERFORMANCE_CLASS_EventHandler
{
  function on_after_document_render() {
    $pattern = '#([\"\(]http(?s)\:\/\/)([^"]*)(ow_static.*?\.(css|js|jpg|png)(\?[a-z0-9]+)*?[\"\)])#i';
    $html = OW::getResponse()->getMarkup();
    $matches = array();
    $staticCname = "static.oxwall.dev";
    $replacement = '${1}'.$staticCname.'/$3';
    preg_match_all($pattern, $html, $matches);
    $html = preg_replace($pattern, $replacement, $html);
    OW::getResponse()->setMarkup($html);
  }
}