<?php

namespace app\controllers;

use Yii;
use app\models\base\DaftarDinas;
use app\models\search\DaftarDinasSearch;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * DaftarDinasController implements the CRUD actions for DaftarDinas model.
 */
class DaftarDinasController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'create', 'view', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'view', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all DaftarDinas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DaftarDinasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $data = DaftarDinas::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'daftarDinas' => $data,
        ]);
    }

    /**
     * Displays a single DaftarDinas model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DaftarDinas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DaftarDinas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {

                $nama = Yii::$app->security->generateRandomString(12);
                $foto = UploadedFile::getInstance($model, 'foto');
                if($model->validate()) {
                    $model->save();
                    if(!empty($foto)) {
                        $foto->saveAs(Yii::getAlias('@app/web/') . 'upload/' . $nama . '.' . $foto->extension);
                        $model->foto = $nama . '.' . $foto->extension;
                        $model->save();
                    }
                }
                ($model->save());
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DaftarDinas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {

                $data = $this->findModel($id);
                unlink(Yii::getAlias('@app/web/') . 'upload/' . $data->foto);

                $nama = Yii::$app->security->generateRandomString(12);
                $foto = UploadedFile::getInstance($model, 'foto');
                if($model->validate()) {
                    $model->save();
                    if(!empty($foto)) {
                        $foto->saveAs(Yii::getAlias('@app/web/') . 'upload/' . $nama . '.' . $foto->extension);
                        $model->foto = $nama . '.' . $foto->extension;
                        $model->save();
                    }
                }
                ($model->save());
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DaftarDinas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        // $this->findModel($id)->delete();
        $data = $this->findModel($id);
        unlink(Yii::getAlias('@app/web/') . 'upload/' . $data->foto);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DaftarDinas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return DaftarDinas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DaftarDinas::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
