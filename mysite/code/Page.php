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
        $array = [
            'ErrorPage',
            'ErrorPage_Live',
            'ErrorPage_versions',
            'RedirectorPage',
            'RedirectorPage_Live',
            'RedirectorPage_versions',
            'SiteTree',
            'SiteTree_EditorGroups',
            'SiteTree_ImageTracking',
            'SiteTree_LinkTracking',
            'SiteTree_Live',
            'SiteTree_versions',
            'SiteTree_ViewerGroups',
            'VirtualPage',
            'VirtualPage_Live',
            'VirtualPage_versions'
        ];
        foreach($array as $table) {
            DB::query('DELETE FROM "'.$table.'";');
        }
        for($i = 1; $i < 147; $i++) {
            DB::alteration_message('Creating Pages: '.$i);
            $filter = ['Title' => 'Page No. '.$i, 'MenuTitle' => 'Page No. '.$i, 'Content' => '<p>hello world.</p>'];
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
            $page->Sort = 1;
            $page->writeToStage('Stage');
            $page->publish('Stage', 'Live');
        }
    }

}
