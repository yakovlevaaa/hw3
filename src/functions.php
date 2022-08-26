<?php

function createUsers (): array
{
    $users = [];
    $names = ['Робб','Джон', 'Санса','Арья', 'Бран'];

    for ($i = 1; $i <= 50; $i++) {

        $users[$i]['id'] = $i;
        $users[$i]['name'] = array_rand(array_flip($names));
        $users[$i]['age'] = mt_rand(18, 45);

    }

    return $users;
}
