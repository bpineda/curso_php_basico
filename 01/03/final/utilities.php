<?php

function debug( $value_to_debug )
{

  echo '<pre>';
  var_dump($value_to_debug);
  echo '</pre>';

}

function capitalize_first_letter($input_string)
{

  $input_string = strtolower($input_string);
  $input_string = ucwords($input_string);
  return $input_string;

}

function get_todays_date()
{

  return date("m.d.Y");

}