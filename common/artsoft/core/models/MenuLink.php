<?php

namespace artsoft\models;

use omgdef\multilingual\MultilingualQuery;
use artsoft\behaviors\MultilingualBehavior;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use artsoft\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "menu_link".
 *
 * @property string $id
 * @property string $menu_id
 * @property string $link
 * @property string $label
 * @property string $parent_id
 * @property integer $alwaysVisible
 * @property string $image
 * @property integer $order
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property Menu $menu
 */
class MenuLink extends ActiveRecord implements OwnerAccess
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%menu_link}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            BlameableBehavior::className(),
            TimestampBehavior::className(),
            'sluggable' => [
                'class' => SluggableBehavior::className(),
                'slugAttribute' => 'id',
                'attribute' => 'label',
            ],
            'multilingual' => [
                'class' => MultilingualBehavior::className(),
                'langForeignKey' => 'link_id',
                'tableName' => "{{%menu_link_lang}}",
                'attributes' => [
                    'label'
                ]
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'label'], 'required'],
            ['id', 'unique'],
            [['order', 'alwaysVisible', 'created_by', 'updated_by', 'created_at', 'updated_at',], 'integer'],
            [['id', 'menu_id', 'parent_id'], 'string', 'max' => 64],
            [['link', 'label'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 128],
            [['id'], 'match', 'pattern' => '/^[a-z0-9_-]+$/', 'message' => Yii::t('art', 'Link ID can only contain lowercase alphanumeric characters, underscores and dashes.')],
            ['order', 'default', 'value' => 999],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('art', 'ID'),
            'menu_id' => Yii::t('art', 'Menu'),
            'link' => Yii::t('art', 'Link'),
            'label' => Yii::t('art', 'Label'),
            'parent_id' => Yii::t('art', 'Parent Link'),
            'alwaysVisible' => Yii::t('art', 'Always Visible'),
            'image' => Yii::t('art', 'Icon'),
            'order' => Yii::t('art', 'Order'),
            'created_by' => Yii::t('art', 'Created By'),
            'updated_by' => Yii::t('art', 'Updated By'),
            'created_at' => Yii::t('art', 'Created'),
            'updated_at' => Yii::t('art', 'Updated'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id'])->joinWith('translations');
    }

    /**
     * Get list of link siblings
     * @return array
     */
    public function getSiblings()
    {
        $siblings = MenuLink::find()->joinWith('translations')
                ->andFilterWhere(['like', 'menu_id', $this->menu_id])
                ->andFilterWhere(['!=', 'menu_link.id', $this->id])
                ->all();

        $list = ArrayHelper::map(
                        $siblings, 'id', function ($array, $default) {
                    return $array->label . ' [' . $array->id . ']';
                });

        return ArrayHelper::merge([NULL => Yii::t('art', 'No Parent')], $list);
    }

    /**
     * @inheritdoc
     * @return MultilingualQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MultilingualQuery(get_called_class());
    }

    /**
     *
     * @inheritdoc
     */
    public static function getFullAccessPermission()
    {
        return 'fullMenuLinkAccess';
    }

    /**
     *
     * @inheritdoc
     */
    public static function getOwnerField()
    {
        return 'created_by';
    }

}
