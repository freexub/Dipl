<?php
/**
 * Created by PhpStorm.
 * User: k.shtefan
 * Date: 08.11.2017
 * Time: 15:53
 */
namespace app\models;

use app\models\Docs;
use yii\web\UploadedFile;

class UploadFile extends Docs
{
    /**
     * @var UploadedFile
     */
    public $file_name;

    public function rules()
    {
        return [
           [['file_name'], 'file', 'extensions'=>'doc, docx, pdf'],
        ];
    }

    public function upload($file){
		$this->file_name->saveAs($file);
		return true;
    }
	
    public function attributeLabels()
    {
        return [
            'file_name' => 'Документ',
        ];
    }
}