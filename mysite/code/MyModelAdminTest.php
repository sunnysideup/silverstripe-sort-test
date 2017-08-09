<?php

class MyModelAdminTest extends ModelAdmin {

    private static $managed_models = array('MyDataObject');

    private static $url_segment = 'test';

    private static $menu_title = 'Test';
}
