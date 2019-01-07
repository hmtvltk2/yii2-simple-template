<?php

namespace app\modules\app\example\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\app\example\models\ThuongnhanPhanphoiDaumoi;

/**
 * ThuongnhanPhanphoiDaumoiSearch represents the model behind the search form about `app\modules\app\example\models\ThuongnhanPhanphoiDaumoi`.
 */
class ThuongnhanPhanphoiDaumoiSearch extends ThuongnhanPhanphoiDaumoi
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ten_doanhnghiep', 'diachi', 'dienthoai', 'gcndkkd', 'ngaycap', 'noicap', 'loaihinhdoanhnghiep', 'anhchup', 'ghichu'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = ThuongnhanPhanphoiDaumoi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'ngaycap' => $this->ngaycap,
        ]);

        $query->andFilterWhere(['like', 'ten_doanhnghiep', $this->ten_doanhnghiep])
            ->andFilterWhere(['like', 'diachi', $this->diachi])
            ->andFilterWhere(['like', 'dienthoai', $this->dienthoai])
            ->andFilterWhere(['like', 'gcndkkd', $this->gcndkkd])
            ->andFilterWhere(['like', 'noicap', $this->noicap])
            ->andFilterWhere(['like', 'loaihinhdoanhnghiep', $this->loaihinhdoanhnghiep])
            ->andFilterWhere(['like', 'anhchup', $this->anhchup])
            ->andFilterWhere(['like', 'ghichu', $this->ghichu]);

        return $dataProvider;
    }
}
