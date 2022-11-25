<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function duzgun_tarih($date)
{
  return date("d.m.Y", strtotime($date));
}


