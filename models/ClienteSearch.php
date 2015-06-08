<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form about `app\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cliente'], 'integer'],
            [['nombre_cliente', 'apellido_cliente', 'cedula_cliente', 'sexo_cliente', 'email_cliente', 'direccion_cliente', 'fecha_nacimiento_cliente', 'facebook_cliente', 'twitter_cliente', 'website_cliente', 'nacionalidad_cliente'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cliente::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_cliente' => $this->id_cliente,
            'fecha_nacimiento_cliente' => $this->fecha_nacimiento_cliente,
        ]);

        $query->andFilterWhere(['like', 'nombre_cliente', $this->nombre_cliente])
            ->andFilterWhere(['like', 'apellido_cliente', $this->apellido_cliente])
            ->andFilterWhere(['like', 'cedula_cliente', $this->cedula_cliente])
            ->andFilterWhere(['like', 'sexo_cliente', $this->sexo_cliente])
            ->andFilterWhere(['like', 'email_cliente', $this->email_cliente])
            ->andFilterWhere(['like', 'direccion_cliente', $this->direccion_cliente])
            ->andFilterWhere(['like', 'facebook_cliente', $this->facebook_cliente])
            ->andFilterWhere(['like', 'twitter_cliente', $this->twitter_cliente])
            ->andFilterWhere(['like', 'website_cliente', $this->website_cliente])
            ->andFilterWhere(['like', 'nacionalidad_cliente', $this->nacionalidad_cliente]);

        return $dataProvider;
    }
}
