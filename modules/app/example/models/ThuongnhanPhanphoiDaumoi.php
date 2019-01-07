<?php

namespace app\modules\app\example\models;

use Yii;

/**
 * This is the model class for table "thuongnhan_phanphoi_daumoi".
 *
 * @property int $id Mã
 * @property string $ten_doanhnghiep Tên doanh nghiệp
 * @property string $diachi Địa chỉ
 * @property string $dienthoai Điện thoại
 * @property string $gcndkkd GCNĐKKD
 * @property string $ngaycap Ngày cấp
 * @property string $noicap Nơi cấp
 * @property string $loaihinhdoanhnghiep Loại hình doanh nghiệp
 * @property string $anhchup Ảnh chụp
 * @property string $ghichu Ghi chú
 */
class ThuongnhanPhanphoiDaumoi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thuongnhan_phanphoi_daumoi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ngaycap'], 'safe'],
            [['ghichu'], 'string'],
            [['ten_doanhnghiep', 'diachi', 'gcndkkd', 'noicap', 'loaihinhdoanhnghiep', 'anhchup'], 'string', 'max' => 255],
            [['dienthoai'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã',
            'ten_doanhnghiep' => 'Tên doanh nghiệp',
            'diachi' => 'Địa chỉ',
            'dienthoai' => 'Điện thoại',
            'gcndkkd' => 'GCNĐKKD',
            'ngaycap' => 'Ngày cấp',
            'noicap' => 'Nơi cấp',
            'loaihinhdoanhnghiep' => 'Loại hình doanh nghiệp',
            'anhchup' => 'Ảnh chụp',
            'ghichu' => 'Ghi chú',
        ];
    }
}
