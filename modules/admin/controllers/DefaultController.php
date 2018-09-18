<?php
namespace app\modules\admin\controllers;

use app\models\ar\Product;
use app\models\query\ProductQuery;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class DefaultController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ProductQuery::find(),
        ]);

        return $this->render('index', compact('dataProvider'));
    }

    /**
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        $product = Product::findOne($id);

        if (!$product) {
            throw new NotFoundHttpException('Не удалось найти изделие.');
        }

        return $this->render('view', compact('product'));
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $product = new Product();
        if ($product->load(\Yii::$app->request->post()) && $product->save()) {
            return $this->redirect(Url::to(['view', 'id' => $product->id]));
        }

        return $this->render('create', compact('product'));
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionEdit($id)
    {
        $product = Product::findOne($id);

        if (!$product) {
            throw new NotFoundHttpException('Не удалось найти изделие.');
        }

        if ($product->load(\Yii::$app->request->post()) && $product->save()) {
            return $this->redirect(Url::to(['view', 'id' => $product->id]));
        }

        return $this->render('edit', compact('product'));
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionDelete($id)
    {
        $product = Product::findOne($id);

        if (!$product) {
            throw new NotFoundHttpException('Не удалось найти изделие.');
        }

        if ($product->delete()) {
            return $this->redirect('index');
        }

        return $this->render('edit');
    }
}
