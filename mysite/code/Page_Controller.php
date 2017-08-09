<?php

class Page_Controller extends ContentController
{
    /**
     * An array of actions that can be accessed via a request. Each array element should be an action name, and the
     * permissions or conditions required to allow the user to access it.
     *
     * <code>
     * array (
     *     'action', // anyone can access this action
     *     'action' => true, // same as above
     *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
     *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
     * );
     * </code>
     *
     * @var array
     */
    private static $allowed_actions = array(
    );

    public function init()
    {
        parent::init();
        // You can include any CSS or JS required by your project here.
        // See: http://doc.silverstripe.org/framework/en/reference/requirements
    }

    public function UnpaginatedPages()
    {
        return Page::get();
    }

    public function PaginatedPages()
    {
        $list = Page::get();

        $list = new PaginatedList($list, $this->getRequest());
        $list->setPageLength(395);
        return $list;
    }

    public function PaginatedObjects()
     {
         $list = MyDataObject::get();

         return new PaginatedList($list, $this->getRequest());
     }    

}
