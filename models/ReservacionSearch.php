<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reservacion;

/**
 * ReservacionSearch represents the model behind the search form about `app\models\Reservacion`.
 */
class ReservacionSearch extends Reservacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_resrvacion', 'id_espacio', 'id_usuario'], 'integer'],
            [['fecha_reservacion', 'fecha_inicio_reservacion', 'fecha_fin_reservacion'], 'safe'],
            [['precio_total_reservacion'], 'number'],
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
        $query = Reservacion::find();

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
            'id_resrvacion' => $this->id_resrvacion,
            'fecha_reservacion' => $this->fecha_reservacion,
            'fecha_inicio_reservacion' => $this->fecha_inicio_reservacion,
            'fecha_fin_reservacion' => $this->fecha_fin_reservacion,
            'precio_total_reservacion' => $this->precio_total_reservacion,
            'id_espacio' => $this->id_espacio,
            'id_usuario' => $this->id_usuario,
        ]);

        return $dataProvider;
    }
}
