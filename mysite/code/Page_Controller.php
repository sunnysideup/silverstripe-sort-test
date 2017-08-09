<?php

class Page_Controller extends ContentController
{

    public function UnpaginatedPages()
    {
        return Page::get();
    }

    public function PaginatedPages()
    {
        $list = Page::get();

        $list = new PaginatedList($list, $this->getRequest());
        $list->setPageLength(20);
        return $list;
    }

    public function PaginatedObjects()
     {
         $list = MyDataObject::get();

         return new PaginatedList($list, $this->getRequest());
     }

}
