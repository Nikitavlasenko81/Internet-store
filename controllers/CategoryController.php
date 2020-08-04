<?

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController{
    // public $layout = 'MyThem';

public function actionIndex(){

    $hits = Product::find()->where(['hit'=>'1'])->limit(4)->all();
return $this->render('index', compact('hits'));

}

public function actionView($id){
    $id = Yii::$app->request->get('id');
    $products = Product::find()->where(['category_id' => $id])->all();
 return $this->render('view',compact('products'));
}

// // public function actionIndex($name = 'guest')
// // {
//     public $layout = 'MyThem';

//     public function actionIndex()
//     {   $name = ['Nikita','Andrei','Alexei','Grisha'];
//         $products = Product::find()->all();
//         return $this->render('index',compact('name','products'));
//     }
    
//     public function actionComent(){

//         $model = new TestForm();
//         if($model->load(Yii::$app->request->post()) ){
//             if( $model->validate()){
//                 Yii::$app->session->setFlash('success','Данные введены верно');
//                 return $this->refresh();
//             }else{
//                 Yii::$app->session->setFlash('error','Ошибка');
//             }
//         }
//         return $this->render('Coment',compact('model'));
    }

   











    // $hello = "Hello Yii";
    // $hi = "Привет";
    // // return $hello;
    // //возвращение с массивом
    // // return $this->render("index", [
    // //     'var' => $hello,
    // //     'hivar'=>$hi
    // //     ]);
    // //делает тоже самое что и предидущий пример
    // return $this->render('index',compact('hello','hi','name'));


// public function actionTest()
// {
//     return $this->render("Test");
// }

// public function actionTest2()
// {
//     return $this->render("Test2");
// }

// }

?>