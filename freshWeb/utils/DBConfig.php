<?php

class DBConfig
{

    //定义一些常量
    const DATA_BASE_TYPE = "mysql";
    const HOST = 'localhost';
    const PORT = 3306;
    const DATA_BASE_NAME = 'vegfru';
    const CHARSET = 'utf8';
    const USER_NAME = 'root';
    const PASSWORD = '';

    private static $pdo;
    private static $dbModel;

    //构造函数
    private function __construct()
    {
        $dsn = self::DATA_BASE_TYPE . ":host=" . self::HOST . ";dbname=" . self::DATA_BASE_NAME . ";charset=" . self::CHARSET;
        self::$pdo = new PDO($dsn, self::USER_NAME, self::PASSWORD);
    }

    //工厂模式创建对象
    public static function createDBConfig()
    {
        //判断是否是第一次创建对象
        if (!isset(self::$dbModel)) {
            self::$dbModel = new DBConfig();
        }
        //没有else
        return self::$dbModel;

    }

    /**
     * 查询所有的信息---展示所有的数据
     *
     * 查询语句--查询所有信息
     * @param $sql 输入要查询的信息
     * @return array 返回一个完整的数组
     */
    public function queryBySQL($sql)
    {
        $p = self::$pdo;
        $rs = $p->query($sql);
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     *查询符合条件的信息--修改用于修改数据的查询
     *
     * 根据条件查询数据,返回满足条件的数组
     * @param $tableName 表名
     * @param $condition 条件 为一个数组[col1 => val1,col2 => val2 ]
     * @return array 返回符合条件的数组
     */
    public function queryByVal($tableName, $condition)
    {
        //字符串拼接条件
        $sqlSelect = "select * from " . $tableName . " where 1=1 ";
        $sqlCondition = '';
        if (isset($condition)) {
            foreach ($condition as $col => $val) {
                $sqlCondition .= "AND $col='$val' ";
            }
        }
        $querySql = $sqlSelect . $sqlCondition;
        return $this->queryBySQL($querySql);
    }

    /**
     * 添加，修改，删除数据的执行语句
     *
     * @param $sql
     * @return int 返回受影响的行数
     */
    public function cudBySql($sql)
    {
        $pdo = self::$pdo;
        return $pdo->exec($sql);
    }

    /**
     * 修改数据
     * @param $tableName 表名
     * @param $condition1 要修改的数据
     * @param $condition2 条件
     * @return 返回受影响的行数
     */
    public function update($tableName, $condition1, $condition2)
    {

        $sqlCondition1 = '';
        $sqlCondition2 = '';
        if (isset($condition1)) {
            foreach ($condition1 as $col => $val) {
                $sqlCondition1 .= " $col ='$val' ,";
            }
            //截取最后一个,
            $sqlCondition1 = substr($sqlCondition1, 0, strlen($sqlCondition1) - 1);
        }
        if (isset($condition2)) {
            foreach ($condition2 as $col => $val) {
                $sqlCondition2 .= "AND $col='$val' ";
            }
        }
        $sql = "UPDATE " . $tableName . " SET " . $sqlCondition1 . "  WHERE 1=1 " . $sqlCondition2;
        return $this->cudBySql($sql);
    }


    /**
     * 插入一条数据 用于注册-或者添加一条记录
     *
     * @param $tableName
     * @param $condition
     * @return 返回受影响的行数
     */
    public function insert($tableName, $condition)
    {
        //字符串拼接条件
        $cols = '';
        $vals = '';
        if (isset($condition)) {
            foreach ($condition as $col => $val) {
                $cols .= $col . ",";
                $vals .="'". $val . "',";
            }
            $cols = substr($cols, 0, strlen($cols) - 1);
            $vals = substr($vals, 0, strlen($vals) - 1);
        }

        $sql = "INSERT INTO " . $tableName . " ( " . $cols . " ) VALUES ( " . $vals . " )";
        return $this->cudBySql($sql);
    }

    /**
     * 删除数据
     * @param $tableName 表名
     * @param $condition 条件
     * @return 返回受影响的行数
     */
    public function delete($tableName, $condition){
        $sqlSelect = 'DELETE FROM ' . $tableName . ' WHERE 1=1 ';
        $sqlCondition = '';
        if (isset($condition)) {
            foreach ($condition as $col => $val) {
                $sqlCondition .= "AND $col='$val' ";
            }
        }
        $sql = $sqlSelect . $sqlCondition;
        return $this->cudBySql($sql);
    }

    /**
     * 处理获取页码数
     * @param $sql
     * @return mixed
     */
    function queryPageCount($sql){
        $pdo = self::$pdo;
        $res = $pdo->query($sql);
        $arr = $res->fetch(PDO::FETCH_COLUMN);
        return $arr;
    }
}


