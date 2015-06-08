<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property integer $id_cliente
 * @property string $nombre_cliente
 * @property string $apellido_cliente
 * @property string $cedula_cliente
 * @property string $fecha_nacimiento_cliente
 * @property string $sexo_cliente
 * @property string $email_cliente
 * @property string $direccion_cliente
 * @property string $nacionalidad_cliente
 * @property string $telefono_movil_cliente
 * @property string $telefono_fijo_cliente
 * @property string $facebook_cliente
 * @property string $twitter_cliente
 * @property string $website_cliente
 *
 * @property Usuario[] $usuarios
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_cliente', 'apellido_cliente', 'cedula_cliente', 'fecha_nacimiento_cliente', 'sexo_cliente', 'email_cliente', 'direccion_cliente', 'nacionalidad_cliente', 'telefono_movil_cliente'], 'required'],
            [['fecha_nacimiento_cliente'], 'safe'],
            [['direccion_cliente'], 'string'],
            [['nombre_cliente', 'apellido_cliente'], 'string', 'max' => 60],
            [['cedula_cliente'], 'string', 'max' => 10],
            [['sexo_cliente'], 'string', 'max' => 20],
            [['email_cliente', 'nacionalidad_cliente', 'facebook_cliente', 'twitter_cliente', 'website_cliente'], 'string', 'max' => 45],
            [['telefono_movil_cliente', 'telefono_fijo_cliente'], 'string', 'max' => 12],
            [['cedula_cliente'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cliente' => 'Id Cliente',
            'nombre_cliente' => 'Nombre Cliente',
            'apellido_cliente' => 'Apellido Cliente',
            'cedula_cliente' => 'Cedula Cliente',
            'fecha_nacimiento_cliente' => 'Fecha Nacimiento Cliente',
            'sexo_cliente' => 'Sexo Cliente',
            'email_cliente' => 'Email Cliente',
            'direccion_cliente' => 'Direccion Cliente',
            'nacionalidad_cliente' => 'Nacionalidad Cliente',
            'telefono_movil_cliente' => 'Telefono Movil Cliente',
            'telefono_fijo_cliente' => 'Telefono Fijo Cliente',
            'facebook_cliente' => 'Facebook Cliente',
            'twitter_cliente' => 'Twitter Cliente',
            'website_cliente' => 'Website Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id_cliente' => 'id_cliente']);
    }
}
