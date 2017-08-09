<?php

class Page extends SiteTree
{
    private static $db = array(
    );

    private static $has_one = array(
    );

    private static $indexes = array(
        'Title' => true
    );


    function requireDefaultRecords()
    {
        for($i = 1; $i < 47; $i++) {
            DB::alteration_message('Creating Pages: '.$i);
            $filter = ['Title' => 'Page No. '.$i];
            $page = Page::get()->filter($filter)->first();
            if(! $page) {
                $page = Page::create($filter);
            }
            if($i > 10) {
                $parentPage = Page::get()->filter(array('ID:LessThan' => 10))->sort('RAND()')->first();
                if($parentPage) {
                    $page->ParentID = $parentPage->ID;
                }
            } else {
                $page->ParentID = 0;
            }
            $page->writeToStage('Stage');
            $page->publish('Stage', 'Live');
        }
    }

}
