<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/app/header');
//$this->session->usuario ? $this->load->view('layout/app/menu') : $this->load->view('layout/app/menu_app');
$this->load->view('layout/app/menu');
//echo '<br/>';
echo '<div id="principal" class="container-fluid mt-5 p-2 mb-5">';
$this->load->view($contenido);
echo "</div>";
$this->load->view('layout/app/footer');
