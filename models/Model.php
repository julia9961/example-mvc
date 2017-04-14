<?php

class Model
{
    public function saveToCsv()
    {
        $file = "data.csv";
        $handle = fopen($file, "a");
        $data = [htmlspecialchars($_POST['name']), (int)($_POST['code']), htmlspecialchars($_POST['category']),
            htmlspecialchars($_POST['description'])];

        fputcsv($handle, $data);
        fclose($handle);
    }

    public function getCsv()
    {
        $file = "data.csv";
        $handle = fopen($file, "r");

        $arr = [];
        if ($handle == true) {
            while (($data = fgetcsv($handle, 1000, ",")) == true) {
                $arr[] = $data;
            }
            return $arr;
        }
    }

    public function sortArray($array)
    {
        sort($array);
        return $array;
    }

}


?>