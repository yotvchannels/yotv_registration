<?php
// source: C:\xampp\htdocs\yotv\app\presenters/templates/Registration/default.latte

use Latte\Runtime as LR;

class Template2e30ade0ef extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

         <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
        </head>
<style>
* {
  box-sizing: border-box;
}
.menu {
  float:left;
  width:40%;
  text-align:center;
  padding-left: 5
  0px;
  
}
.menuitem {
  background-color:#e5e5e5;
  padding:8px;
  margin-top:7px;
}
.main {
  float:left;
  width:60%;
  padding:0 20px;
}
.right {
  background-color:#e5e5e5;
  float:left;
  width:20%;
  padding:15px;
  margin-top:7px;
  text-align:center;
}
.footer{
position :fixed;
left:0;
bottom :0;
width :100%;
background-color: red;
color: white;
text align:center;	

}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
</style>

<style>


/*!
 * Start Bootstrap - SB Admin 2 Bootstrap Admin Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

body {
    background-color: #f8f8f8;
}

#wrapper {
    width: 100%;
}

#page-wrapper1 {
    padding: 30px 15px 0 15px;
    min-height: 568px;
    background-color: #e7e7e7;
}

#page-wrapper {
    padding: 30px 15px 0 15px;
    min-height: 568px;
    background-color: #5f0f5c;
}

@media(min-width:768px) {
    #page-wrapper {
        position: inherit;
        margin-left: 0px;
        padding: 30px 30px 0 30px;
        border-left: 1px solid #e7e7e7;
         border-right: 1px solid #e7e7e7;
    }
}

.navbar-header {
    float: left;
}

.navbar-left {
    float: left;
     padding-left: 250px;
}

.navbar-right {
    text-align: right;
   padding-left: 26px;
   padding-right: 20px;
}
.navbar-right1 {
    text-align: right;
    padding-left: 100px;
}

.navbar-top-links {
    margin: 0;
}

.navbar-top-links li {
    display: inline-block;
}

.navbar-top-links li:last-child {
    margin-right: 6px;
}

.navbar-top-links li a {
    padding: 15px;
    min-height: 50px;
}

.navbar-top-links>li>a {
    color: #999;
}

.navbar-top-links>li>a:hover, .navbar-top-links>li>a:focus, .navbar-top-links>.open>a, .navbar-top-links>.open>a:hover, .navbar-top-links>.open>a:focus {
    color: #fff;
    background-color: #222
    ;
}

.navbar-top-links .dropdown-menu li {
    display: block;
}

.navbar-top-links .dropdown-menu li:last-child {
    margin-right: 0;
}

.navbar-top-links .dropdown-menu li a {
    padding: 3px 20px;
    min-height: 0;
}

.navbar-top-links .dropdown-menu li a div {
    white-space: normal;
}

.navbar-top-links .dropdown-messages,
.navbar-top-links .dropdown-tasks,
.navbar-top-links .dropdown-alerts {
    width: 310px;
    min-width: 0;
}

.navbar-top-links .dropdown-messages {
    margin-left: 5px;
}

.navbar-top-links .dropdown-tasks {
    margin-left: -59px;
}

.navbar-top-links .dropdown-alerts {
    margin-left: -123px;
}

.navbar-top-links .dropdown-user {
    right: 0;
    left: auto;
}

.sidebar .sidebar-nav.navbar-collapse {
    padding-right: 0;
    padding-left: 0;
}

.sidebar .sidebar-search {
    padding: 15px;
}

.sidebar ul li {
    border-bottom: 1px solid #e7e7e7;
}

.sidebar ul li a.active {
    background-color: #eee
    ;
}

.sidebar .arrow {
    float: right;
}

.sidebar .fa.arrow:before {
    content: "\f104";
}

.sidebar .active>a>.fa.arrow:before {
    content: "\f107";
}

.sidebar .nav-second-level li,
.sidebar .nav-third-level li {
    border-bottom: 0!important;
}

.sidebar .nav-second-level li a {
    padding-left: 37px;
}

.sidebar .nav-third-level li a {
    padding-left: 52px;
}

@media(min-width:768px) {
    .sidebar {
        z-index: 1;
        position: absolute;
        width: 250px;
        margin-top: 51px;
    }

    .navbar-top-links .dropdown-messages,
    .navbar-top-links .dropdown-tasks,
    .navbar-top-links .dropdown-alerts {
        margin-left: auto;
    }
}

.btn-outline {
    color: inherit;
    background-color: transparent;
    transition: all .5s;
}

.btn-primary.btn-outline {
    color: #428bca;
}

.btn-success.btn-outline {
    color: #5cb85c;
}
.button-success1.btn-outline {
    color: #5cb85c;
}


.btn-info.btn-outline {
    color: #5bc0de;
}

.btn-warning.btn-outline {
    color: #f0ad4e;
}

.btn-danger.btn-outline {
    color: #d9534f;
}

.btn-primary.btn-outline:hover,
.btn-success.btn-outline:hover,
.btn-info.btn-outline:hover,
.btn-warning.btn-outline:hover,
.btn-danger.btn-outline:hover {
    color: #fff;
}

.chat {
    margin: 0;
    padding: 0;
    list-style: none;
}

.chat li {
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #999;
}

.chat li.left .chat-body {
    margin-left: 60px;
}

.chat li.right .chat-body {
    margin-right: 60px;
}

.chat li .chat-body p {
    margin: 0;
}

.panel .slidedown .glyphicon,
.chat .glyphicon {
    margin-right: 5px;
}

.chat-panel .panel-body {
    height: 350px;
    overflow-y: scroll;
}

.login-panel {
    margin-top: 25%;
}

.flot-chart {
    display: block;
    height: 400px;
}

.flot-chart-content {
    width: 100%;
    height: 100%;
}

.dataTables_wrapper {
    position: relative;
    clear: both;
}

table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc_disabled {
    background: 0 0;
}

table.dataTable thead .sorting_asc:after {
    content: "\f0de";
    float: right;
    font-family: fontawesome;
}

table.dataTable thead .sorting_desc:after {
    content: "\f0dd";
    float: right;
    font-family: fontawesome;
}

table.dataTable thead .sorting:after {
    content: "\f0dc";
    float: right;
    font-family: fontawesome;
    color: rgba(50,50,50,.5);
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.428571429;
}

.btn-circle.btn-lg {
    width: 50px;
    height: 50px;
    padding: 10px 16px;
    border-radius: 25px;
    font-size: 18px;
    line-height: 1.33;
}

.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.show-grid [class^=col-] {
    padding-top: 10px;
    padding-bottom: 10px;
    border: 1px solid #ddd;
    background-color: #eee!important;
}

.show-grid {
    margin: 15px 0;
}

.huge {
    font-size: 40px;
}

.panel-green {
    border-color: #5cb85c;
}

.panel-green .panel-heading {
    border-color: #5cb85c;
    color: #fff;
    background-color: #5cb85c;
}

.panel-green a {
    color: #5cb85c;
}

.panel-green a:hover {
    color: #3d8b3d;
}

.panel-red {
    border-color: #d9534f;
}

.panel-red .panel-heading {
    border-color: #d9534f;
    color: #fff;
    background-color: #d9534f;
}

.panel-red a {
    color: #d9534f;
}

.panel-red a:hover {
    color: #b52b27;
}

.panel-yellow {
    border-color: #f0ad4e;
}

.panel-yellow .panel-heading {
    border-color: #f0ad4e;
    color: #fff;
    background-color: #f0ad4e;
}

.panel-yellow a {
    color: #f0ad4e;
}

.panel-yellow a:hover {
    color: #df8a13;
}

/* Hero Widgets */
.hero-widget {
    text-align: center;
    padding-top: 20px;
    padding-bottom: 20px;
}
.hero-widget .icon {
    display: block;
    font-size: 96px;
    line-height: 96px;
    margin-bottom: 10px;
    text-align: center;
}
.hero-widget .value {
    display: block;
    height: 64px;
    font-size: 64px;
    line-height: 64px;
    font-style: normal;
}
.hero-widget label { font-size: 17px; }
.hero-widget .options { margin-top: 10px; }

/* Tabbed Panels */
.panel.tabbed-panel .panel-heading{
    padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 0;
}
.panel.tabbed-panel .panel-heading .panel-title{
    padding: 9px 0;
    font-size: 1em;l
    line-height: 1em;
}
.panel.tabbed-panel .nav-tabs{
    border-bottom: none;
}
.panel.tabbed-panel .nav-tabs > li > a{
    line-height: 1em;
}
.panel.tabbed-panel .nav-justified{
    margin-bottom: -1px;
}

.tabbed-panel.panel-default .nav-tabs > li > a,
.tabbed-panel.panel-default .nav-tabs > li > a:hover,
.tabbed-panel.panel-default .nav-tabs > li > a:focus {
    color: #777;
}
.tabbed-panel.panel-default .nav-tabs > .open > a,
.tabbed-panel.panel-default .nav-tabs > .open > a:hover,
.tabbed-panel.panel-default .nav-tabs > .open > a:focus,
.tabbed-panel.panel-default .nav-tabs > li > a:hover,
.tabbed-panel.panel-default .nav-tabs > li > a:focus {
    color: #777;
    background-color: #ddd;
    border-color: transparent;
}
.tabbed-panel.panel-default .nav-tabs > li.active > a,
.tabbed-panel.panel-default .nav-tabs > li.active > a:hover,
.tabbed-panel.panel-default .nav-tabs > li.active > a:focus {
    color: #555;
    background-color: #fff;
    border-color: #ddd;
    border-bottom-color: transparent;
}
.tabbed-panel.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.tabbed-panel.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777;
}
.tabbed-panel.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.tabbed-panel.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.tabbed-panel.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.tabbed-panel.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.tabbed-panel.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}

.tabbed-panel.panel-primary .nav-tabs > li > a,
.tabbed-panel.panel-primary .nav-tabs > li > a:hover,
.tabbed-panel.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
}
.tabbed-panel.panel-primary .nav-tabs > .open > a,
.tabbed-panel.panel-primary .nav-tabs > .open > a:hover,
.tabbed-panel.panel-primary .nav-tabs > .open > a:focus,
.tabbed-panel.panel-primary .nav-tabs > li > a:hover,
.tabbed-panel.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
    background-color: #3071a9;
    border-color: transparent;
}
.tabbed-panel.panel-primary .nav-tabs > li.active > a,
.tabbed-panel.panel-primary .nav-tabs > li.active > a:hover,
.tabbed-panel.panel-primary .nav-tabs > li.active > a:focus {
    color: #428bca;
    background-color: #fff;
    border-color: #428bca;
    border-bottom-color: transparent;
}
.tabbed-panel.panel-primary .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #428bca;
    border-color: #3071a9;
}
.tabbed-panel.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #fff;
}
.tabbed-panel.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.tabbed-panel.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #3071a9;
}
.tabbed-panel.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.tabbed-panel.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.tabbed-panel.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    background-color: #4a9fe9;
}


.tabbed-panel.panel-success .nav-tabs > li > a,
.tabbed-panel.panel-success .nav-tabs > li > a:hover,
.tabbed-panel.panel-success .nav-tabs > li > a:focus {
    color: #3c763d;
}
.tabbed-panel.panel-success .nav-tabs > .open > a,
.tabbed-panel.panel-success .nav-tabs > .open > a:hover,
.tabbed-panel.panel-success .nav-tabs > .open > a:focus,
.tabbed-panel.panel-success .nav-tabs > li > a:hover,
.tabbed-panel.panel-success .nav-tabs > li > a:focus {
    color: #3c763d;
    background-color: #d6e9c6;
    border-color: transparent;
}
.tabbed-panel.panel-success .nav-tabs > li.active > a,
.tabbed-panel.panel-success .nav-tabs > li.active > a:hover,
.tabbed-panel.panel-success .nav-tabs > li.active > a:focus {
    color: #3c763d;
    background-color: #fff;
    border-color: #d6e9c6;
    border-bottom-color: transparent;
}
.tabbed-panel.panel-success .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.tabbed-panel.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #3c763d;
}
.tabbed-panel.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.tabbed-panel.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #d6e9c6;
}
.tabbed-panel.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.tabbed-panel.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.tabbed-panel.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #3c763d;
}

.tabbed-panel.panel-info .nav-tabs > li > a,
.tabbed-panel.panel-info .nav-tabs > li > a:hover,
.tabbed-panel.panel-info .nav-tabs > li > a:focus {
    color: #31708f;
}
.tabbed-panel.panel-info .nav-tabs > .open > a,
.tabbed-panel.panel-info .nav-tabs > .open > a:hover,
.tabbed-panel.panel-info .nav-tabs > .open > a:focus,
.tabbed-panel.panel-info .nav-tabs > li > a:hover,
.tabbed-panel.panel-info .nav-tabs > li > a:focus {
    color: #31708f;
    background-color: #bce8f1;
    border-color: transparent;
}
.tabbed-panel.panel-info .nav-tabs > li.active > a,
.tabbed-panel.panel-info .nav-tabs > li.active > a:hover,
.tabbed-panel.panel-info .nav-tabs > li.active > a:focus {
    color: #31708f;
    background-color: #fff;
    border-color: #bce8f1;
    border-bottom-color: transparent;
}
.tabbed-panel.panel-info .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #d9edf7;
    border-color: #bce8f1;
}
.tabbed-panel.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #31708f;
}
.tabbed-panel.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.tabbed-panel.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #bce8f1;
}
.tabbed-panel.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.tabbed-panel.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.tabbed-panel.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #31708f;
}

.tabbed-panel.panel-warning .nav-tabs > li > a,
.tabbed-panel.panel-warning .nav-tabs > li > a:hover,
.tabbed-panel.panel-warning .nav-tabs > li > a:focus {
    color: #8a6d3b;
}
.tabbed-panel.panel-warning .nav-tabs > .open > a,
.tabbed-panel.panel-warning .nav-tabs > .open > a:hover,
.tabbed-panel.panel-warning .nav-tabs > .open > a:focus,
.tabbed-panel.panel-warning .nav-tabs > li > a:hover,
.tabbed-panel.panel-warning .nav-tabs > li > a:focus {
    color: #8a6d3b;
    background-color: #faebcc;
    border-color: transparent;
}
.tabbed-panel.panel-warning .nav-tabs > li.active > a,
.tabbed-panel.panel-warning .nav-tabs > li.active > a:hover,
.tabbed-panel.panel-warning .nav-tabs > li.active > a:focus {
    color: #8a6d3b;
    background-color: #fff;
    border-color: #faebcc;
    border-bottom-color: transparent;
}
.tabbed-panel.panel-warning .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #fcf8e3;
    border-color: #faebcc;
}
.tabbed-panel.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #8a6d3b;
}
.tabbed-panel.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.tabbed-panel.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #faebcc;
}
.tabbed-panel.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.tabbed-panel.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.tabbed-panel.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #8a6d3b;
}

.tabbed-panel.panel-danger .nav-tabs > li > a,
.tabbed-panel.panel-danger .nav-tabs > li > a:hover,
.tabbed-panel.panel-danger .nav-tabs > li > a:focus {
    color: #a94442;
}
.tabbed-panel.panel-danger .nav-tabs > .open > a,
.tabbed-panel.panel-danger .nav-tabs > .open > a:hover,
.tabbed-panel.panel-danger .nav-tabs > .open > a:focus,
.tabbed-panel.panel-danger .nav-tabs > li > a:hover,
.tabbed-panel.panel-danger .nav-tabs > li > a:focus {
    color: #a94442;
    background-color: #ebccd1;
    border-color: transparent;
}
.tabbed-panel.panel-danger .nav-tabs > li.active > a,
.tabbed-panel.panel-danger .nav-tabs > li.active > a:hover,
.tabbed-panel.panel-danger .nav-tabs > li.active > a:focus {
    color: #a94442;
    background-color: #fff;
    border-color: #ebccd1;
    border-bottom-color: transparent;
}
.tabbed-panel.panel-danger .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f2dede; /* bg color */
    border-color: #ebccd1; /* border color */
}
.tabbed-panel.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #a94442; /* normal text color */
}
.tabbed-panel.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.tabbed-panel.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ebccd1; /* hover bg color */
}
.tabbed-panel.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.tabbed-panel.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.tabbed-panel.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff; /* active text color */
    background-color: #a94442; /* active bg color */
}
.form
{
border-color: #fff;
border-radius: 20px;


}

.line{

        padding-bottom: 0px;
        padding-top: 0px;
    margin: 10px 0 20px;
    border-bottom: 1px solid #eee;
}
.line1{

        padding-bottom: 0px;
        padding-top: 0px;
        padding-left: 0px;
    margin: 10px 0 20px;
    border-bottom: 2px solid #3a0940;
}
.navbar-inverse1{
    background-color: #fff;
    border-color: #080808;
}
.navbar-inverse2{
    background-color: #40043d;
    border-color: #080808;
    height: 80px;
}
.navbar-inverse3{
    background-color: #fff;
    border-color: #080808;
    height: 70px;
}
.button-primary{

  background-color: #b338bb;
    border-color: #080808;  
    text-decoration-color: #fff;
    color:#fff;
}
.button-success{

  background-color: #deb318;
    border-color: #080808;  
    text-decoration-color: #fff;
    color:#000;
}
/*this is a button style for registration form buttons*/
.button1-success{

  background-color: #dcab21;
    border-color: #080808;  
    border: 3px solid #40043d;
    text-decoration-color: #fff;
    color:#fff;
    border-radius: 10px;
    color: #000;

}

/*this applies to the button on the login signup page in registration only*/
.button2-success{

  background-color: #40043d;
    border-color: #080808;  
    text-decoration-color: #fff;
    color:#fff;
}
.form-control1{


    
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #f8f8f8;
    background-image: none;
    border: 2px solid #fbf529;
    border-radius: 4px;
}

.form-control2 {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #fbf529;
    background-color: #5f0f5c;
    background-image: none;
    border: 2px solid #fbf529;
    border-radius: 4px;
}
.form-control3{


    
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 2px solid #5f0f5c;
    border-radius: 8px;
}
/*this is for the registration form fields*/
.form-control4 {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #000;
    background-color: #fff;
    background-image: none;
    border: 2px solid #fbf529;
    border-radius: 4px;
}
/*this applies to beneficiaries*/

.form-control5{


 
    color: #555;
    background-color: #e7e7e7;
    background-image: none;
    border: 0px;
    padding-bottom: 0px;
    padding-top: 0px;
}

.label1{
color:#fbf529;

}
 /*this is text color for registration labels*/
.label2{
color:#000;

}
.label3{
color:#dcab21;
background-color: #40043d;

}

.nav1>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}


a {
    color: #000;
    text-decoration: none;
}

a {
    background-color: transparent;
}
{
    color: #fbf529;
    text-decoration: none;
}

.nav2>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}


a {
    color: #000;
    text-decoration: none;
}

a {
    background-color: transparent;
}
{
    color: #fbf529;
    text-decoration: none;
}
.page-header1 {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #5f0f5c;
}
.page-header2 {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #e7e7e7;
}
.audio1 {
    width: 500px;
    height: 32px;
}

.zoomin img {
  height: 150px;
  width: 150px;
  -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
      -ms-transition: all 0.5sease;
          transition: all 0.5s ease;
}
.zoomin img:hover {
  width: 170px;
  height: 170px;
}


.btn-success1 {
    color: #40043d;
    background-color: #dcab21;
    border-color: #4cae4c;
}



.btn1 {
    display: inline-block;
    padding: 10px 16px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.foot{
color: #fff;
padding-left: 120px;
}
.foot1{
color: #fff;
padding-left: 80%;
padding-top: 0px;
}
.panel-body1{
    padding: 0px;
}
.form-fields{
   padding: 0px; 
}

.table-bordered1>thead>tr>td, .table-bordered>thead>tr>th {
    border-bottom-width: 2px;

}


.table-bordered1>tbody>tr>td, .table-bordered1>tbody>tr>th, .table-bordered1>tfoot>tr>td, .table-bordered1>tfoot>tr>th, .table-bordered1>thead>tr>td, .table-bordered1>thead>tr>th {
    border: 1px solid #000;
}

.nav-pills1>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #40043d;

}


.nav-pills1>li>a {
    border-radius: 4px;
}
.listspace{
    padding:10px;
}




</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link rel='shortcut icon' type='image' href='<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 1046 */ ?>/images/dashboad-img/urban1.jpg'>
<link rel='shortcut icon' type='image' href='<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 1047 */ ?>/css/startmin.css'>
</head>

<body style="font-family:Verdana;color:#40043d;">
<div class="wrapper" >
     <nav class="navbar navbar-inverse3 navbar-fixed-top "   role="navigation" style="border-style:outset; border-width:1px; border-color:#40043d;" >
                <div class="navbar-header">
                    <a class="navbar-brand" href=""><img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 1054 */ ?>/images/dashboad-img/urban1.jpg" width="90px" height="80px"></a>
                </div>

            

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <!-- <li><a href="#"><i class="fa fa-home fa-fw"></i> Music</a></li> -->
                </ul>

    <!-- <div align="right">
        
        <img src="img/dashboad-img/profile1.png">
      
        <img src="img/dashboad-img/envelop1.png">
        <img src="img/dashboad-img/bell1.png">
    </div> -->
              
 <ul class="nav navbar-right navbar-top-links">
                   
                    
                  




                </ul>
               
            </nav>

</div>


<div style="padding:60px;text-align:center;">
    <h1 style="background-color:#e5e5e5;"></h1> 

</div>


<div class="col-lg-12">
<div class="form-group">

<div class="col-lg-4">
<!-- <div class=" col-lg-4"> -->
<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>


<?php
		/* line 1100 */ $_tmp = $this->global->uiControl->getComponent("registrationFormControl");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>

<!-- </div> -->

</div>
<!-- <div class="col-lg-4"><p> By creating an account you agree to our Privacy policy.</p></div> -->
</div>

 <div class="col-lg-8" align="right">
           <div class="w3-container">
                    <div  >
                        <!--<img src="../img/dashboad-img/header1.png" align="center" height="300px" width="100%">-->
                        <!--<img src="../img/dashboad-img/header.png" align="center" height="300px" width="100%">-->

                        <img class="mySlides w3-animate-top " src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 1114 */ ?>/images/dashboad-img/beneficiaryimg.jpg" style="width:100%">

                     <img class="mySlides w3-animate-left " src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 1116 */ ?>/images/dashboad-img/signupimg.jpg" style="width:100%">
                     <img class="mySlides w3-animate-top " src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 1117 */ ?>/images/dashboad-img/registrationimg.jpg" style="width:100%">
                      <img class="mySlides w3-animate-left " src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 1118 */ ?>/images/dashboad-img/beneficiaryimg.jpg" style="width:100%">
                </div>
  </div>


</div>

<footer class="navbar navbar-inverse2 navbar-fixed-bottom" >

<div class="row">
  <div align="left" class="col-lg-7"><div class="foot" align="left">

    
   <h5>Powered by :</h5> 
<p style="color:#dcab21;" ><a style="color:#dcab21;"  href="http://www.albayanmedia-africa.com">albayanmedia-africa.com</a></p>


</div></div>
<div align="right" class="foot col-lg-2"><h4>About Us</h4></div>
<div class="col-lg-"><div class="foot1 " align="left" >

   <h5><a style="color:#ffffff;"  href="http://yotvchannels.com/info/kontakt">Contact Us</a></h5>
   <h5><a style="color:#ffffff;"  href="http://registration.albayanmedia-africa.com/sourcefinal/YOTV_Channels_Terms_of_Use.pdf">Terms of Use</a></h5>
   <h5><a  style="color:#ffffff;"  href="http://registration.albayanmedia-africa.com/sourcefinal/YOTV_Channels_Privacy_Statement.pdf">Privacy policy</a></h5>
  

</div></div>
</div>


 
    
</footer>

<script>

 var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {

                myIndex = 1

                }
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 2500); // Change image every 2 seconds
            }
</script>

</body><?php
	}

}
