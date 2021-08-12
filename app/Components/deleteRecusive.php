<?php
    namespace App\Components ;

    class deleteRecusive {

          private $cates ;
          private $cate ;
          public function __construct($cates , $cate) {
              $this->cates = $cates ;
              $this->cate = $cate ;
          }

          public function deleteCategoryRecusive($id){
              foreach ($this->cates as $items){
                  if($items['parent_id'] == $id){
                      $items->delete() ;
                      $this->deleteCategoryRecusive($items['id']) ;
                  }else{
                      $this->cate->delete() ;
                  }
              }
          }

    }

?>
