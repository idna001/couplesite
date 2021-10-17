<?php
class index

{
    /**
     * @return array
     */
    public function getData()
    {
        $DB = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $result = $DB->query('SELECT * FROM Data ORDER BY id ASC');

        $data = [];
        if ($result->num_rows > 0) {
            while ($obj = $result->fetch_object(get_class($this))) {
                $data[$obj->anfrgeid] = $obj;
            }
        }
        return $data;
    }
}