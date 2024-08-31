<?php

function seasons() {
    $seasons = [
        'winter' => ['image' => asset('assets/covers/winter.jpg'),'season'=>'Winter','url' => Route('winterCollictionPage')],
        'spring' => ['image' => asset('assets/covers/spring.jpg'),'season'=>'Spring','url' => Route('springCollictionPage')],
        'summer' => ['image' => asset('assets/covers/summer.jpg'),'season'=>'Summer','url' => Route('summerCollictionPage')],
        'autumn' => ['image' => asset('assets/covers/autumn.jpg'),'season'=>'Autumn','url' => Route('autumnCollictionPage')]
    ];

    $month = (int)date('m');

    if ($month >= 1 && $month <= 2 || $month == 12) {
        return $seasons['winter'];
    } elseif ($month >= 3 && $month <= 5) {
        return $seasons['spring'];
    } elseif ($month >= 6 && $month <= 8) {
        return $seasons['summer'];
    } else {
        return $seasons['autumn'];
    }
}