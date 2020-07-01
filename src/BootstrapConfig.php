<?php

use SilverStripe\ORM\DataExtension;
use SilverStripe\View\Requirements;

class BootstrapConfig extends ContentController 
{

    protected function init() {
        parent::init();
        Requirements::css('kalakotra/silverstripe-bootstrap-editor:client/src/styles/bootstrap.scss');

    }
}
