<?php
require ('../src/functions.php');

$users = json_encode(createUsers());
//echo $users;
file_put_contents('../src/users.json', $users);

$data = json_decode(file_get_contents('../src/users.json'), true);

$count_by_names = array_count_values(array_column ($data, 'name'));

echo "<pre>";
print_r ($count_by_names);
echo "</pre>" . PHP_EOL;

$user_age = array_column ($data, 'age');
$average_user_age = array_sum ($user_age) / sizeof($user_age);
echo 'Средний возраст пользователей - ' . $average_user_age;
