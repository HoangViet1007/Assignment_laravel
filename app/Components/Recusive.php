<?php
  namespace App\Components;

  class Recusive {

      private $data ;
      private $htmlSelect = '' ;

      public $cates ;
      public $cate ;

      public function __construct($data){
        $this->data = $data;

          // khi khởi tạo new Recusive($data) thì constructor này sẽ nhận được biến data
      }

    public function CategoryRecusive($parent_id , $id = 0,  $text = ''){

        foreach($this->data as $value){

            if($value['parent_id'] == $id){

                if(!empty($parent_id) && $parent_id == $value['id']){


                    $this->htmlSelect .= "<option selected value='".$value['id']."'>" . $text . $value['name'] . "</option>" ;

                }else{

                  $this->htmlSelect .= "<option value='".$value['id']."'>" . $text . $value['name'] . "</option>" ;

                }

                $this->CategoryRecusive($parent_id, $value['id'] , $text . '-- ') ;
            }

        }
        return $this->htmlSelect ;

    }


    // // delete category
    // public function deleteCategoryRecusive($id){
    //     foreach ($this->cates as $item){
    //         if($item['parent_id'] == $id){
    //             $item->delete() ;
    //             $this->deleteCategoryRecusive($item['id']) ;
    //         }else{
    //             $this->cate->delete() ;
    //         }
    //     }

    // }


  }


?>
