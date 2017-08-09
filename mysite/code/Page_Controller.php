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

        return new PaginatedList($list, $this->getRequest());
    }

    public function PaginatedObjects()
     {
         $list = MyDataObject::get();

         return new PaginatedList($list, $this->getRequest());
     }

    public function PaginatedObjectsSortedByCreated()
     {
         $list = MyDataObject::get()->sort('Created');

         return new PaginatedList($list, $this->getRequest());
     }

}
