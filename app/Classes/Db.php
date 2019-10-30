<?php

class Db
{
    /**
     * Экземпляр класса PDO
     * @var \PDO
     */
    private $db;

    /**
     * DB constructor. Установка соединения с БД, если еще не установлено.
     */
    public function __construct($dbName, $host, $user, $password)
    {
        $dsn = 'mysql:dbname=' . $dbName . ';host=' . $host;
        $this->db = new \PDO($dsn, $user, $password);
        $this->db->exec('SET CHARACTER SET utf8');
    }

    /**
     * Создает подготовленный для PDO запрос
     * @param string $sql запрос
     * @param array $params параметры запроса - массив значений для подстановки в подготовленный запрос
     * @return bool|\PDOStatement false в случае неудачи, объект подготовленного запроса в случае успеха
     */
    public function query($sql, array $params = [], $returnResult = false)
    {
        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                if (is_int($value)) {
                    $stmt->bindValue($key, (int)$value, \PDO::PARAM_INT);
                } else {
                    $stmt->bindValue($key, $value);
                }
            }
        }
        $result = $stmt->execute();
        if ($returnResult) {
            return $result;
        }
        return $stmt;
    }

    /**
     * Получает из БД все строки в соответствии с запросом
     * @param string $sql запрос
     * @param array $params Параметры запроса - массив значений для подстановки в подготовленный запрос
     * @return array Массив строк результата запроса
     */
    public function allRows($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Получает из БД первую строку в соответствии с запросом
     * @param string $sql запрос
     * @param array $params Параметры запроса - массив значений для подстановки в подготовленный запрос
     * @return mixed Первая строка результата запроса
     */
    public function firstRow($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Получает из БД значение первой колонки первой строки в соответствии с запросом
     * @param string $sql запрос
     * @param array $params Параметры запроса - массив значений для подстановки в подготовленный запрос
     * @return mixed Значение первой колонки первой строки результата запроса
     */
    public function firstValue($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetch(\PDO::FETCH_COLUMN);
    }

    /**
     * Возвращает id последней вставленной в БД строки
     * @return string
     * @see PDO::lastInsertId
     */
    public function getLastId()
    {
        return $this->db->lastInsertId();
    }
}