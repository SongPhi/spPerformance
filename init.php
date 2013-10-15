<?php

OW::getEventManager()->bind( 
  OW_EventManager::ON_AFTER_DOCUMENT_RENDER,
  array( 'SPPERFORMANCE_CLASS_EventHandler', 'on_after_document_render' )
);
