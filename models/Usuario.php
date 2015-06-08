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
class Usuario extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

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


    /////////////////////////////////////////
    // Method IdentityClass for Login with DB //
    /////////////////////////////////////////
    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        $dbUser = self::find()->where(["id_usuario" => $id])->one();
        
        if(!count($dbUser)){
             return null;
        }
        
        return new static($dbUser);
    }


    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $dbUser = self::find()
                 ->where([
                     "lower(nombre_usuario)" => $username,
                     "activo" => 1,
                 ])
                 ->one();

        if (!count($dbUser)) {
            return null;
        }

        return new static($dbUser);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id_usuario;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->clave_usuario === $password;
    }
}
