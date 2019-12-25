<?php

namespace app\controllers;

use Yii;
use yii\web\UploadedFile;
use app\models\Docs;
use app\models\UploadFile;
use app\models\DocsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DocsController implements the CRUD actions for Docs model.
 */
class DocsController extends Controller
{
    /**
     * @inheritdoc
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
        ];
    }

    /**
     * Lists all Docs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Docs model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Docs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Docs();
		$model_upload = new UploadFile();
			
        if ($model->load(Yii::$app->request->post())) {
            $model_upload->file_name = UploadedFile::getInstance($model_upload, 'file_name');
			
			$date = new \DateTime('now');
			$file_name = md5($date->format('d-m-Y_h-m-s'));
			$file = $_SERVER['DOCUMENT_ROOT'].'/web/uploads/file/'.$file_name.'.'.$model_upload->file_name->extension;			
			
			$model_upload->upload($file);
			
			$model->file_name = $file_name.'.'.$model_upload->file_name->extension;
			$model->save();
			
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
                'model_upload' => $model_upload,
            ]);
        }
    }

    /**
     * Updates an existing Docs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$file = $model->file_name;
		
		$model_upload = new UploadFile();
		
        if ($model->load(Yii::$app->request->post())) {
			$dir = $_SERVER['DOCUMENT_ROOT'].'/web/uploads/file/';
			//var_dump($dir.$model->file_name);die;
			
			$model_upload->file_name = UploadedFile::getInstance($model_upload, 'file_name');
			
			if($model_upload->file_name != NULL){
			
				if(isset($file) && file_exists($dir.$file))
					unlink($dir.$model->file_name);
				
				$date = new \DateTime('now');
				$file_name = md5($date->format('d-m-Y_h-m-s'));
				$file = $_SERVER['DOCUMENT_ROOT'].'/web/uploads/file/'.$file_name.'.'.$model_upload->file_name->extension;			
				
				$model_upload->upload($file);
				
				$model->file_name = $file_name.'.'.$model_upload->file_name->extension;
			}
			
			$model->save();
			
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
                'model_upload' => $model_upload,
            ]);
        }
    }

    /**
     * Deletes an existing Docs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
		$dir = $_SERVER['DOCUMENT_ROOT'].'/web/uploads/file/';
		
		
		if($model !== null){			
			if(isset($file) && file_exists($dir.$file))
					unlink($dir.$model->file_name);			
			$model->delete();
		}
		

        return $this->redirect(['index']);
    }

    /**
     * Finds the Docs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Docs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Docs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
