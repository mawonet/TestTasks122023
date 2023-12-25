<?php

/**
 * Получение данных
 * @param string $user_ids
 * @return array
 */
function load_users_data(string $user_ids): array
{
    $data = [];
    if ($user_ids) {
        $db = new mysqli("localhost", "root", "", "test");

        $query = $db->prepare("SELECT * FROM users WHERE id IN ($user_ids)");
        $query->execute();
        $data = $query->get_result();

        $db->close();

        return $data->fetch_all(MYSQLI_ASSOC);
    }

    return $data;
}

/**
 * Простая валидация
 * @param string $user_ids
 * @return string
 */
function simple_validate(string $user_ids): string
{
    $result = [];
    $user_ids = explode(',', $user_ids);
    foreach ($user_ids as $user_id) {
        if (is_numeric($user_id)) {
            $result[] = $user_id;
        }
    }
    return $result ? implode(',', $result) : '';
}

$ids = $_GET['user_ids'];

$data = load_users_data(simple_validate($ids));
foreach ($data as $row) {
    echo '<a href=\"/show_user.php?id=' . $row['id'] . '\">' . $row['name'] . '</a>';
}
