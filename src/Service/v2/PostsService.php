<?php 

namespace App\Service\v2;


use CakeDC\Api\Service\FallbackService;

class PostsService extends FallbackService {

    /**
     * Actions classes map.
     *
     * @var array
     */
    protected $_actionsClassMap = [
        'describe' => '\CakeDC\Api\Service\Action\CrudDescribeAction',
        'index' => '\App\Service\v2\Action\Posts\IndexAction',
        'view' => '\CakeDC\Api\Service\Action\CrudViewAction',
        'add' => '\CakeDC\Api\Service\Action\CrudAddAction',
        'edit' => '\CakeDC\Api\Service\Action\CrudEditAction',
        'delete' => '\CakeDC\Api\Service\Action\CrudDeleteAction',
    ];
   
    
}
