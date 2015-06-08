<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Afiliacion;

/**
 * AfiliacionSearch represents the model behind the search form about `app\models\Afiliacion`.
 */
class AfiliacionSearch extends Afiliacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_afiliacion', 'id_usuario'], 'integer'],
            [['fecha_afiliacion', 'fecha_fin_afiliacion'], 'safe'],
            [['activo'], 'boolean'],
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
        $query = Afiliacion::find();

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
            'id_afiliacion' => $this->id_afiliacion,
            'fecha_afiliacion' => $this->fecha_afiliacion,
            'fecha_fin_afiliacion' => $this->fecha_fin_afiliacion,
            'id_usuario' => $this->id_usuario,
            'activo' => $this->activo,
        ]);

        return $dataProvider;
    }
}
