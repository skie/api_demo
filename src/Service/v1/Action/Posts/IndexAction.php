<?php 

namespace App\Service\v1\Action\Posts;


use CakeDC\Api\Service\Action\CrudIndexAction;

class IndexAction extends CrudIndexAction {

    public function execute()
    {
        $result = $this->_getEntities();
        
        $results = [];
        foreach ($result as $record) {
            $item = $record->toArray();
            $item['version'] = 'v1';
            $results[] = $item;
        }
        
        return $results;
    }
    


    
}
