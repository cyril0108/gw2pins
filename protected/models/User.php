<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $row_id
 * @property string $account
 * @property string $first_name
 * @property string $last_name
 * @property string $nickname
 * @property string $email
 * @property string $intro
 * @property string $password
 * @property string $created_date
 */
class User extends CActiveRecord
{
        public $repeatpassword;
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account, nickname, email, intro, game_id, password, repeatpassword', 'required'),
			array('account, email', 'unique'),
                        array('account, game_id', 'length', 'max'=>15),
			array('first_name, last_name, nickname', 'length', 'max'=>60),
			array('email, password', 'length', 'max'=>1024),
                        array('repeatpassword', 'compare', 'compareAttribute'=>'password', 'message'=>"密碼不符合", 'on'=>'create,update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('row_id, account, first_name, last_name, nickname, email, intro, password, created_date', 'safe', 'on'=>'search'),
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
                    'user_level'=>array(self::HAS_ONE, 'UserLevel', 'account_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'row_id' => 'Row',
			'account' => '帳號',
                        'game_id' => '遊戲 ID',
			'first_name' => '名',
			'last_name' => '姓',
			'nickname' => '暱稱',
			'email' => '電子信箱',
			'intro' => '自我介紹',
			'password' => '密碼',
			'repeatpassword' => '重複密碼',
			'created_date' => 'Created Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('row_id',$this->row_id);
		$criteria->compare('account',$this->account,true);
                $criteria->compare('game_id',$this->account,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('created_date',$this->created_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
