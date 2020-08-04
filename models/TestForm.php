<?
namespace app\models;

use yii\base\Model;

 class TestForm extends Model{
    public $name;
    public $email;
    public $text;

    // //можно изменить текст поля еще и так 
    // public function attributeLabels()
    // {
    //     return [
    //         'name'=>'Имя',
    //         'email'=>'Емаил',
    //         'text'=>'Текст',
    //     ];
    // }
     public function rules()
     {
         return [
             [['name','email'],'required','message' => 'Поле не заполнино'],
             ['email','email'],
             ['name','myRule'],
             //обрезание пробелов 
             ['text','trim'],
         ];
     }
     //собственные валидаторы 
     public function myRule($attr){
         if(!in_array($this->$attr, ['Nikita', 'Grisha','Oleg'])){
            $this->addError($attr, 'Ваше имя не Nikita, Grisha или Oleg');
         }

     }

 }

?>