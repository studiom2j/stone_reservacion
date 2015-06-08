<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "afiliacion".
 *
 * @property integer $id_afiliacion
 * @property string $fecha_afiliacion
 * @property string $fecha_fin_afiliacion
 * @property integer $id_usuario
 * @property boolean $activo
 *
 * @property Usuario $idUsuario
 */
class Afiliacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'afiliacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_afiliacion', 'fecha_fin_afiliacion', 'id_usuario'], 'required'],
            [['fecha_afiliacion', 'fecha_fin_afiliacion'], 'safe'],
            [['id_usuario'], 'integer'],
            [['activo'], 'boolean']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_afiliacion' => 'Id Afiliacion',
            'fecha_afiliacion' => 'Fecha Afiliacion',
            'fecha_fin_afiliacion' => 'Fecha Fin Afiliacion',
            'id_usuario' => 'Id Usuario',
            'activo' => 'Activo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id_usuario' => 'id_usuario']);
    }
}
