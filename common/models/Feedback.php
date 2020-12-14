<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $full_name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $address
 * @property string|null $description
 * @property int $status
 */
class Feedback extends \yii\db\ActiveRecord
{
    const STATUS_WAIT = 0;
    const STATUS_ACTIVE = 10;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name'], 'required'],
            [['description'], 'string'],
            [['status'], 'integer'],
            [['full_name', 'phone', 'email', 'address'], 'string', 'max' => 255],
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
            'address' => Yii::t('app', 'Address'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
        ];
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
