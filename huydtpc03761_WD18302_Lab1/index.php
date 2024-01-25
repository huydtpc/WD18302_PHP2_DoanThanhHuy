<?php

echo "PC03761 - Lab 1.1 <br>";
$courses = [
    'block2024' => 'Lap trinh php2',
    'block2025' => 'lap trinh wed',
    'block2026' => 'lap trinh wed site',
];

// echo $courses['s3']
//mode


/**
 * 
 * Ham nay de lay ra mang trinh tu cua khoa hoc
 * @return array
 * 
 */

function get_courses()
{
    global $courses;
    return array_values($courses);
}

// get_courses();
// var_dump(get_courses());

/**
 * 
 * @param string $block
 * ham nay kiem tra coi co khoa hoc nao khong
 */

function find_by_block($block)
{
    global $courses;

    return array_key_exists($block, $courses) ? $courses[$block] : "invalid course";
}



$list_of_courses = get_courses();

$block =(!empty($_GET['block']))? $_GET['block'] : '';

$course_name = find_by_block($block);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1.1</title>
</head>
<body>
<h1> <?$course_name?> </h1>
    <form action="">

        <select name="id" id="">
            <?php foreach ($list_of_courses as $key => $value) : ?>
                <option value=" <?= $key?> "> <?= $value ?> </option>
            <?php  endforeach; ?>
        </select>

        <button type="submit"> Tim khoa hoc </button>
    </form>

</body>

</html>