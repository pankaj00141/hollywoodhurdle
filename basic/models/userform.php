<?php
/**
 * Created by PhpStorm.
 * User: gspl
 * Date: 6/6/16
 * Time: 5:01 PM
 */

namespace app\models ;
 use yii\base\Model ;

 class userform extends Models
 {
     public $name ;
     public $email ;

     public function rules()
     {
        return [
            [['name ','email'],'required'],
            ['email','email'],
            ];
     }

 }

