<?php 

/** PHP UTF-8  */
header("Content-type: text/html; charset=utf-8");

//Variables to connect to SQL
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'decorami';

$conn = new mysqli($servidor, $usuario, $senha, $banco);

//SQL to PHP transactions to UTF8 and PT-BR
$conn->query("SET NAMES 'utf8'");
$conn->query('SET character_set_connection=utf8');
$conn->query('SET character_set_client=utf8');
$conn->query('SET character_set_results=utf8');

$conn->query('SET GLOBAL lc_time_names = pt_BR');
$conn->query('SET lc_time_names = pt_BR');


// Function that handles all extern input sanitization
function sanitize($field_name, $field_type)
{

    $field_value = '';

    switch ($field_type):

        case 'string':
            $field_value = htmlspecialchars($_POST[$field_name]);
            break;

        case 'email':
            $field_value = filter_input(INPUT_POST, $field_name, FILTER_SANITIZE_EMAIL);
            break;

    endswitch;

    $field_value = preg_replace('/\\s\\s+/', ' ', $field_value);

    $field_value = trim($field_value);

    return $field_value;
}