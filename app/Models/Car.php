<?php

namespace Model;

class Car {

    public static function all() {
        $data = json_decode(file_get_contents('repository/cars.db.json'));
        return json_decode(json_encode($data),true);
    }

    public static function get(int $id)  {
        $data = self::all();
        $filteredData = array_filter($data, function ($car) use ($id) {
            return $car["id"] === $id;
        });
        $filteredData = array_values($filteredData)[0] ?? null;

        if ($filteredData !== null) {
            $filteredData = json_decode(json_encode($filteredData),true);
        }

        return $filteredData;
    }

}