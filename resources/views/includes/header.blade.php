<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoldenWay Games</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        *{
            margin:0px;
            padding:0px;
            box-sizing: border-box;
            text-decoration: none;
            font-family: sans-serif;
        }
        body{
            height: 1300vh;
        }
        header{
            background-color: #333333;
            box-shadow: 1px 0px 15px rgba(0,0,0,0.6);
            z-index: 1;
            position: sticky;
            top:0px;
            padding:15px 0px;
        }
        nav{
            width: 90%;
            margin: 0px auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;

        }
        ul{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-evenly;
            gap:28px;
        }
        nav>ul:first-child{
            margin-left:30px;
            gap:40px;
        }
        ul>li{
            list-style-type: none;
        }
        ul>li>a{
            color:white;
            font-size: 18px;
            transition: all 0.15s ease-in-out;
        }
        ul>li>a:hover{
            color:rgb(255, 140, 0);
        }
        ul:nth-child(2)>div{
           display: flex;
           flex-direction: row;
           flex-wrap: wrap;
           justify-content: center;
           align-items: center;
        }
        ul+ul>div>input[type="text"]{
            padding:10px 0px 10px 12px;
            outline: none;
            border: none;
            border-radius: 5px;
            width:200px;
            transition: all 0.15s ease-in;
        }
        ul+ul>div>input[type="text"]:focus{
            width: 280px;
        }
        ul+ul>div>input[type="text"]::placeholder{
            font-size: 15px;
        }
        ul+ul>div>button{
            padding:8.5px;
            font-size: 16px;
            background-color: #4caf50;
            color:white;
            border: none;
            outline: none;
            z-index: 1;
            margin-left:-10px;
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            cursor: pointer;
            transition: all 0.15s ease-out;
        }
        ul+ul>div>button:hover{
            filter: brightness(80%);
            color: white;
        }
        ul+ul>div>button:active{
           background-color: rgb(91, 161, 93);
           color: black;

        }
        ul li ul.dropdown li
        {
            display:block;
        }
        ul li ul.dropdown {

            background-color: black;
            position: absolute;
            z-index: 999;
            display: none;
        }
        ul li a:hover{
            background-color: #4caf50;

        }
        ul li:hover ul.dropdown
        {
            display: block;
        }
        table,tr,td,th
        {

        border: 1px solid black;
        border-collapse: collapse;
        padding: 6px;


        }

        th{
            text-align: center;
            padding: 6px;
        }
        table
        {
            width: 100%;

        }
        ul {
            display: flex;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-right: 1em;
        }
    </style>
</head>

