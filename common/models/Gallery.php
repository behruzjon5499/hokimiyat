<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $status
 * @property string|null $photo
 */
class Gallery extends \yii\db\ActiveRecord
{
    public $image;
    const STATUS_WAIT = 0;
    const STATUS_ACTIVE = 10;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'photo'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif, bmp']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'status' => Yii::t('app', 'Status'),
            'photo' => Yii::t('app', 'Photo'),
        ];
    }
    public function updateModel($new=false){

        $post = Yii::$app->request->post();

        if($this->load($post) ) {

            if( $new ){ // если создается только один раз при создании
                //$this->date = time();
            }
            if( !$this->save() ){
                Yii::$app->session->setFlash('info-error','Ошибка при сохранении!');
                print_r($this->getErrors());
                exit;

                return true;
            }



            Yii::$app->session->setFlash('info-success',' успешно сохранена!');

            return true;
        }
        return false;

    }
    public function upload()
    {
        if ($this->validate()) {
            $name = Yii::$app->security->generateRandomString(10) . '.' . $this->image->extension;

            if ($this->photo !== null && !empty($this->photo)) {
                unlink(Yii::getAlias('@frontend').'/web/uploads/gallery/' . $this->photo);
            }
            $this->photo = $name;
            $this->image->saveAs(Yii::getAlias('@frontend').'/web/uploads/gallery/' . $name);
            return true;
        } else {
            return false;
        }
    }
    public function isWait()
    {
        return $this->status === self::STATUS_WAIT;
    }
    public function isActive()
    {
        return $this->status === self::STATUS_ACTIVE;
    }
}
