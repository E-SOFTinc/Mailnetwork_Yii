<?php

/**
 * This is the model class for table "tarif".
 *
 * The followings are the available columns in table 'tarif':
 * @property double $group_ny_6_4
 * @property double $group_ny_6_50
 * @property double $group_ny_6_100
 * @property double $group_ny_12_4
 * @property double $group_ny_12_50
 * @property double $group_ny_12_100
 * @property double $group_laval_6_4
 * @property double $group_laval_6_50
 * @property double $group_laval_6_100
 * @property double $group_laval_12_4
 * @property double $group_laval_12_50
 * @property double $group_laval_12_100
 * @property double $group_setup
 * @property double $group_renewal
 * @property double $cat_a_6
 * @property double $cat_b_6
 * @property double $cat_c_6
 * @property double $cat_d_6
 * @property double $cat_e_6
 * @property double $cat_f_6
 * @property double $cat_g_6
 * @property double $cat_h_6
 * @property double $cat_a_12
 * @property double $cat_b_12
 * @property double $cat_c_12
 * @property double $cat_d_12
 * @property double $cat_e_12
 * @property double $cat_f_12
 * @property double $cat_g_12
 * @property double $cat_h_12
 * @property double $reg_setup_us
 * @property double $reg_renewal_us
 * @property double $reg_setup_world
 * @property double $reg_renewal_world
 * @property double $reg_depositexp_now
 * @property double $reg_depositexp_week
 * @property double $reg_depositexp_month
 * @property double $reg_depositexp_bimonth
 * @property double $reg_depositair_week
 * @property double $reg_depositair_month
 * @property double $reg_depositair_bimonth
 * @property double $taxtps
 * @property double $taxtvq
 * @property double $taxtvh
 * @property double $cat_i_6
 * @property double $cat_i_12
 */
class Tarif extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @return Tarif the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tarif';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('group_ny_6_4, group_ny_6_50, group_ny_6_100, group_ny_12_4, group_ny_12_50, group_ny_12_100, group_laval_6_4, group_laval_6_50, group_laval_6_100, group_laval_12_4, group_laval_12_50, group_laval_12_100, group_setup, group_renewal, cat_a_6, cat_b_6, cat_c_6, cat_d_6, cat_e_6, cat_f_6, cat_g_6, cat_h_6, cat_a_12, cat_b_12, cat_c_12, cat_d_12, cat_e_12, cat_f_12, cat_g_12, cat_h_12, reg_setup_us, reg_renewal_us, reg_setup_world, reg_renewal_world, reg_depositexp_now, reg_depositexp_week, reg_depositexp_month, reg_depositexp_bimonth, reg_depositair_week, reg_depositair_month, reg_depositair_bimonth, taxtps, taxtvq, taxtvh, cat_i_6, cat_i_12', 'numerical'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('group_ny_6_4, group_ny_6_50, group_ny_6_100, group_ny_12_4, group_ny_12_50, group_ny_12_100, group_laval_6_4, group_laval_6_50, group_laval_6_100, group_laval_12_4, group_laval_12_50, group_laval_12_100, group_setup, group_renewal, cat_a_6, cat_b_6, cat_c_6, cat_d_6, cat_e_6, cat_f_6, cat_g_6, cat_h_6, cat_a_12, cat_b_12, cat_c_12, cat_d_12, cat_e_12, cat_f_12, cat_g_12, cat_h_12, reg_setup_us, reg_renewal_us, reg_setup_world, reg_renewal_world, reg_depositexp_now, reg_depositexp_week, reg_depositexp_month, reg_depositexp_bimonth, reg_depositair_week, reg_depositair_month, reg_depositair_bimonth, taxtps, taxtvq, taxtvh, cat_i_6, cat_i_12', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'group_ny_6_4' => 'Group Ny 6 4',
            'group_ny_6_50' => 'Group Ny 6 50',
            'group_ny_6_100' => 'Group Ny 6 100',
            'group_ny_12_4' => 'Group Ny 12 4',
            'group_ny_12_50' => 'Group Ny 12 50',
            'group_ny_12_100' => 'Group Ny 12 100',
            'group_laval_6_4' => 'Group Laval 6 4',
            'group_laval_6_50' => 'Group Laval 6 50',
            'group_laval_6_100' => 'Group Laval 6 100',
            'group_laval_12_4' => 'Group Laval 12 4',
            'group_laval_12_50' => 'Group Laval 12 50',
            'group_laval_12_100' => 'Group Laval 12 100',
            'group_setup' => 'Group Setup',
            'group_renewal' => 'Group Renewal',
            'cat_a_6' => 'Cat A 6',
            'cat_b_6' => 'Cat B 6',
            'cat_c_6' => 'Cat C 6',
            'cat_d_6' => 'Cat D 6',
            'cat_e_6' => 'Cat E 6',
            'cat_f_6' => 'Cat F 6',
            'cat_g_6' => 'Cat G 6',
            'cat_h_6' => 'Cat H 6',
            'cat_a_12' => 'Cat A 12',
            'cat_b_12' => 'Cat B 12',
            'cat_c_12' => 'Cat C 12',
            'cat_d_12' => 'Cat D 12',
            'cat_e_12' => 'Cat E 12',
            'cat_f_12' => 'Cat F 12',
            'cat_g_12' => 'Cat G 12',
            'cat_h_12' => 'Cat H 12',
            'reg_setup_us' => 'Reg Setup Us',
            'reg_renewal_us' => 'Reg Renewal Us',
            'reg_setup_world' => 'Reg Setup World',
            'reg_renewal_world' => 'Reg Renewal World',
            'reg_depositexp_now' => 'Reg Depositexp Now',
            'reg_depositexp_week' => 'Reg Depositexp Week',
            'reg_depositexp_month' => 'Reg Depositexp Month',
            'reg_depositexp_bimonth' => 'Reg Depositexp Bimonth',
            'reg_depositair_week' => 'Reg Depositair Week',
            'reg_depositair_month' => 'Reg Depositair Month',
            'reg_depositair_bimonth' => 'Reg Depositair Bimonth',
            'taxtps' => 'Taxtps',
            'taxtvq' => 'Taxtvq',
            'taxtvh' => 'Taxtvh',
            'cat_i_6' => 'Cat I 6',
            'cat_i_12' => 'Cat I 12',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('group_ny_6_4',$this->group_ny_6_4);
        $criteria->compare('group_ny_6_50',$this->group_ny_6_50);
        $criteria->compare('group_ny_6_100',$this->group_ny_6_100);
        $criteria->compare('group_ny_12_4',$this->group_ny_12_4);
        $criteria->compare('group_ny_12_50',$this->group_ny_12_50);
        $criteria->compare('group_ny_12_100',$this->group_ny_12_100);
        $criteria->compare('group_laval_6_4',$this->group_laval_6_4);
        $criteria->compare('group_laval_6_50',$this->group_laval_6_50);
        $criteria->compare('group_laval_6_100',$this->group_laval_6_100);
        $criteria->compare('group_laval_12_4',$this->group_laval_12_4);
        $criteria->compare('group_laval_12_50',$this->group_laval_12_50);
        $criteria->compare('group_laval_12_100',$this->group_laval_12_100);
        $criteria->compare('group_setup',$this->group_setup);
        $criteria->compare('group_renewal',$this->group_renewal);
        $criteria->compare('cat_a_6',$this->cat_a_6);
        $criteria->compare('cat_b_6',$this->cat_b_6);
        $criteria->compare('cat_c_6',$this->cat_c_6);
        $criteria->compare('cat_d_6',$this->cat_d_6);
        $criteria->compare('cat_e_6',$this->cat_e_6);
        $criteria->compare('cat_f_6',$this->cat_f_6);
        $criteria->compare('cat_g_6',$this->cat_g_6);
        $criteria->compare('cat_h_6',$this->cat_h_6);
        $criteria->compare('cat_a_12',$this->cat_a_12);
        $criteria->compare('cat_b_12',$this->cat_b_12);
        $criteria->compare('cat_c_12',$this->cat_c_12);
        $criteria->compare('cat_d_12',$this->cat_d_12);
        $criteria->compare('cat_e_12',$this->cat_e_12);
        $criteria->compare('cat_f_12',$this->cat_f_12);
        $criteria->compare('cat_g_12',$this->cat_g_12);
        $criteria->compare('cat_h_12',$this->cat_h_12);
        $criteria->compare('reg_setup_us',$this->reg_setup_us);
        $criteria->compare('reg_renewal_us',$this->reg_renewal_us);
        $criteria->compare('reg_setup_world',$this->reg_setup_world);
        $criteria->compare('reg_renewal_world',$this->reg_renewal_world);
        $criteria->compare('reg_depositexp_now',$this->reg_depositexp_now);
        $criteria->compare('reg_depositexp_week',$this->reg_depositexp_week);
        $criteria->compare('reg_depositexp_month',$this->reg_depositexp_month);
        $criteria->compare('reg_depositexp_bimonth',$this->reg_depositexp_bimonth);
        $criteria->compare('reg_depositair_week',$this->reg_depositair_week);
        $criteria->compare('reg_depositair_month',$this->reg_depositair_month);
        $criteria->compare('reg_depositair_bimonth',$this->reg_depositair_bimonth);
        $criteria->compare('taxtps',$this->taxtps);
        $criteria->compare('taxtvq',$this->taxtvq);
        $criteria->compare('taxtvh',$this->taxtvh);
        $criteria->compare('cat_i_6',$this->cat_i_6);
        $criteria->compare('cat_i_12',$this->cat_i_12);

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
        ));
    }
}
