<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id_usuario
 * @property string $nombre_usuario
 * @property string $clave_usuario
 * @property integer $id_cliente
 * @property integer $id_tipo_usuario
 * @property string $fecha_creacion
 * @property boolean $activo
 *
 * @property Afiliciacion[] $afiliciacions
 * @property Reservacion[] $reservacions
 * @property TipoUsuario $idTipoUsuario
 * @property Cliente $idCliente
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_usuario', 'clave_usuario', 'id_cliente', 'id_tipo_usuario', 'fecha_creacion'], 'required'],
            [['id_cliente', 'id_tipo_usuario'], 'integer'],
            [['fecha_creacion'], 'safe'],
            [['activo'], 'boolean'],
            [['nombre_usuario'], 'string', 'max' => 20],
            [['clave_usuario'], 'string', 'max' => 30],
            [['nombre_usuario'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'nombre_usuario' => 'Nombre Usuario',
            'clave_usuario' => 'Clave Usuario',
            'id_cliente' => 'Id Cliente',
            'id_tipo_usuario' => 'Id Tipo Usuario',
            'fecha_creacion' => 'Fecha Creacion',
            'activo' => 'Activo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAfiliciacions()
    {
        return $this->hasMany(Afiliciacion::className(), ['id_usuario' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservacions()
    {
        return $this->hasMany(Reservacion::className(), ['id_usuario' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoUsuario()
    {
        return $this->hasOne(TipoUsuario::className(), ['id_tipo_usuario' => 'id_tipo_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCliente()
    {
        return $this->hasOne(Cliente::className(), ['id_cliente' => 'id_cliente']);
    }
}
