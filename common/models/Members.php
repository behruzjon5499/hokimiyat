<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "members".
 *
 * @property int $id
 * @property string|null $full_name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $lavozimi
 * @property int|null $hudud_id
 * @property string|null $photo
 * @property string|null $qabul_kunlari
 * @property string|null $description_ru
 * @property string|null $description_uz
 * @property string|null $description_en
 * @property string|null $majburiyat_ru
 * @property string|null $majburiyat_uz
 * @property string|null $majburiyat_en
 *
 * @property Hudud $hudud
 */
class Members extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hudud_id'], 'integer'],
            [['description_ru', 'description_uz', 'description_en', 'majburiyat_ru', 'majburiyat_uz', 'majburiyat_en'], 'string'],
            [['full_name', 'phone', 'email', 'lavozimi', 'photo', 'qabul_kunlari'], 'string', 'max' => 255],
            [['hudud_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hudud::className(), 'targetAttribute' => ['hudud_id' => 'id']],
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
            'full_name' => Yii::t('app', 'Full Name'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'lavozimi' => Yii::t('app', 'Lavozimi'),
            'hudud_id' => Yii::t('app', 'Hudud ID'),
            'photo' => Yii::t('app', 'Photo'),
            'qabul_kunlari' => Yii::t('app', 'Qabul Kunlari'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_en' => Yii::t('app', 'Description En'),
            'majburiyat_ru' => Yii::t('app', 'Majburiyat Ru'),
            'majburiyat_uz' => Yii::t('app', 'Majburiyat Uz'),
            'majburiyat_en' => Yii::t('app', 'Majburiyat En'),
        ];
    }

    /**
     * Gets query for [[Hudud]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHudud()
    {
        return $this->hasOne(Hudud::className(), ['id' => 'hudud_id']);
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
                unlink(Yii::getAlias('@frontend').'/web/uploads/members/' . $this->photo);
            }
            $this->photo = $name;
            $this->image->saveAs(Yii::getAlias('@frontend').'/web/uploads/members/' . $name);
            return true;
        } else {
            return false;
        }
    }
}
