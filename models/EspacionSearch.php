<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Espacio;

/**
 * EspacionSearch represents the model behind the search form about `app\models\Espacio`.
 */
class EspacionSearch extends Espacio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_espacio', 'capacidad_espacio', 'id_categoria'], 'integer'],
            [['descripcion_espacio'], 'safe'],
            [['precio_espacio'], 'number'],
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
        $query = Espacio::find();

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
            'id_espacio' => $this->id_espacio,
            'capacidad_espacio' => $this->capacidad_espacio,
            'precio_espacio' => $this->precio_espacio,
            'id_categoria' => $this->id_categoria,
        ]);

        $query->andFilterWhere(['like', 'descripcion_espacio', $this->descripcion_espacio]);

        return $dataProvider;
    }
}
