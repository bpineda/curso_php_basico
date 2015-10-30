<?php

/**
 * Función para depurar nuestro código
 * @param $value_to_debug
 */
function debug( $value_to_debug )
{

  echo '<pre>';
  var_dump($value_to_debug);
  echo '</pre>';

}

/**
 * Función para poner en mayúscula la primer letra de cada palabra
 * @param $input_string
 * @return string
 */
function capitalize_first_letter($input_string)
{

  $input_string = strtolower($input_string);
  $input_string = ucwords($input_string);
  return $input_string;

}

/**
 * Función para mostrar la fecha con formato mes.día.año
 * @return bool|string
 */
function get_todays_date()
{

  return date("m.d.Y");

}