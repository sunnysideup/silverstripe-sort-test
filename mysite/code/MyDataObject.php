<?php

class MyDataObject extends DataObject
{

    private static $db = array(
        'Title' => 'Varchar(20)',
        'SameSame' => 'Varchar(20)'
    );


    private static $default_sort = array(
        'SameSame' => 'ASC'
    );

    function requireDefaultRecords()
    {
        DB::query('DELETE FROM MyDataObject');
        for($i = 1; $i < 47; $i++) {
            $filter = array('Title' => "item #".$i);
            if(! MyDataObject::get()->filter($filter)->first()) {
                $obj = MyDataObject::create($filter);
                $obj->SameSame = 'same';
                $obj->write();
            }
        }
    }

}
