<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_usuario".
 *
 * @property integer $id_tipo_usuario
 * @property string $nombre_tipo_usuario
 * @property boolean $activo
 *
 * @property Usuario[] $usuarios
 */
class TipoUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_tipo_usuario'], 'required'],
            [['activo'], 'boolean'],
            [['nombre_tipo_usuario'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipo_usuario' => 'Id Tipo Usuario',
            'nombre_tipo_usuario' => 'Nombre Tipo Usuario',
            'activo' => 'Activo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id_tipo_usuario' => 'id_tipo_usuario']);
    }
}
