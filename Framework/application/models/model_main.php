<?php
class Model_Portfolio extends Model
{
    public function get_data()
    {
        // Здесь мы просто симулируем реальные данные.
        return [
            [
                'name' => 'Борис',
                'surname' => 'Котик',
                'post' => 'Веб-разроботчик',
                'imagePath' => '../../asset/images/cat_1.jpg'
            ],
            [
                'name' => 'Веня',
                'surname' => 'Котик',
                'post' => 'DevOps',
                'imagePath' => '../../asset/images/cat_2.jpg'
            ],
            [
                'name' => 'Директор',
                'surname' => 'Котик',
                'post' => 'Директор',
                'imagePath' => '../../asset/images/cat_3.jpg'
            ]
        ];
    }
}