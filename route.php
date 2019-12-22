<?php
 $route = preg_split("[/]",key($_GET));
 $main = $route[0];
 if(function_exists($main)){
   $main();
 }
 else{
   require('index.php');
 }
function index()
{
  require('index.php');
}
function description()
{
  require('description.php');
}
function singin(){
	require('singin.php');
}
function regis(){
	require('regis.php');
}
function review(){
	require('review.php');
}
function logout(){
	require('logout.php');
}
function ezblock1(){
	require('ezblock1.php');
}
function midblock1(){
	require('midblock1.php');
}
function hardblock1(){
	require('hardblock1.php');
}
?>
