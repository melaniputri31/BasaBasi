<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BasaBasi</title>
    <link rel="icon" href="./src/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Playwrite+GB+S+Guides:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Rubik+Distressed&family=Vibes&display=swap');

        @font-face {
            font-family: 'Maison Neue';
            src: url('./src/fonts/Maison_Neue_Book.ttf')
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: "Poppins", sans-serif;
            scroll-behavior: smooth;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f8f8f8;
            color: #333;
        }

        *::selection {
            background: #8C4DF7;
            color: #fff;
        }

        /* index.php && login.php */

        .wrapper {
            background: #fff;
            width: 450px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.27);
        }

        .form {
            padding: 25px 30px;
        }

        .form header {
            font-size: 25px;
            font-weight: 600;
            padding-bottom: 10px;
            border-bottom: 2px solid #000000;
            color: #333;
        }

        .form header span {
            color: #8C4DF7;
        }

        .form form {
            margin: 20px 0;
        }

        .form form .error-txt {
            color: #721c24;
            background: #f8d7da;
            padding: 8px 10px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 10px;
            border: 1px solid #f5c6cb;
            display: none;
        }

        .form form .name-details {
            display: flex;
        }

        .form form .name-details .field:first-child {
            margin-right: 10px;
        }

        .form form .name-details .field:last-child {
            margin-left: 10px;
        }

        .form form .field {
            display: flex;
            position: relative;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .form form .field input {
            height: 40px;
            width: 100%;
            font-size: 16px;
            padding: 0 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            color: #333;
            transition: all 0.4s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.06);
        }

        .form form .field input:focus {
            outline: none;
            border: 1px solid #8C4DF7;
            box-shadow: 0 6px 12px rgba(140, 77, 247, 0.4), 0 2px 4px rgba(140, 77, 247, 0.3);
            transform: translateY(-2px);
            background: linear-gradient(135deg, #fff, #f7f5ff);
        }

        .form form .field input:hover {
            border: 1px solid #8C4DF7;
            box-shadow: 0 6px 12px rgba(140, 77, 247, 0.3), 0 2px 4px rgba(140, 77, 247, 0.2);
            transform: translateY(-1px);
        }

        .form form .button input {
            margin-top: 5px;
            height: 45px;
            border: none;
            font-size: 17px;
            font-weight: 500;
            background: linear-gradient(45deg, #8C4DF7, #5A28D8);
            color: #fff;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: color 0.5s ease, background 0.5s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.06);
        }

        .form form .button input::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: #fff;
            transition: all 0.8s ease;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
        }

        .form form .button input:hover {
            color: #8C4DF7;
            background: #fff;
        }

        .form form .button input:hover::before {
            width: 0;
            height: 0;
        }

        .form form .field i {
            position: absolute;
            right: 15px;
            color: #ccc;
            top: 70%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .form form .field i.active::before {
            content: "\f070";
            color: #333;
        }

        .form .link {
            display: block;
            text-align: center;
            margin: 10px 0;
            font-size: 17px;
        }

        .form .link a {
            color: #8C4DF7;
        }

        .form .link a:hover {
            text-decoration: underline;
        }

        .field.image {
            padding: 1px;
            display: flex;
            flex-direction: column;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .field.image label {
            font-size: 16px;
        }

        .file-input-container {
            margin-top: 4px;
            position: relative;
            width: 100%;
        }

        input[type="file"] {
            display: none; 
        }

        .custom-file-label {
            display: inline-block;
            padding: 6px 15px;
            background: linear-gradient(45deg, #8C4DF7, #5A28D8); 
            color: #fff; 
            font-size: 16px;
            font-weight: 500;
            border-radius: 5px;
            cursor: pointer;
            border: 1px solid #8C4DF7;
            transition: all .4s ease;
        }

        .custom-file-label:hover {
            transition: all .4s ease;
            background: #fff;
            color: #8C4DF7;
            border: 1px solid #8C4DF7;
        }

        input[type="file"]:focus + .custom-file-label {
            border: 1px solid #8C4DF7;
        }

        input[type="file"]:valid + .custom-file-label:after {
            content: " | File Gambar Sudah Diupload";
            font-size: 14px;
            font-weight: 400;
        }

        /* users.php */

        .users {
            padding: 25px 30px;
        }

        .users header,
        .users-list a {
            display: flex;
            align-items: center;
            padding-bottom: 10px;
            justify-content: space-between;
            border-bottom: 2px solid rgba(148, 148, 180, 0.29);
        }

        .wrapper img {
            object-fit: cover;
            border-radius: 50%;
        }

        :is(.users, .users-list) .content {
            display: flex;
            align-items: center;
        }

        .users header .content img {
            height: 43px;
            width: 43px;
        }

        :is(.users, .users-list) .details {
            color: #333;
            margin-left: 15px;
        }

        :is(.users, .users-list) .details span {
            font-size: 16px;
            font-weight: 500;
            color: #333;
        }

        .users header .content .details span {
            font-size: 16px;
            font-weight: 500;
            color: #333;
        }

        .users header .content .details p {
            font-size: 15px;
        }

        .users header .logout {
            color: #fff;
            font-size: 17px;
            padding: 7px 15px;
            background: #8C4DF7;
            border-radius: 5px;
            transition: all 0.2s ease;
            border: 1px solid #8C4DF7;
        }

        .users header .logout:hover {
            color: #8C4DF7;
            background: #fff;
            border: 1px solid #8C4DF7;
            transition: all 0.2s ease;
        }

        .users .search {
            margin: 20px 0px;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: space-between;
        }

        .users .search span {
            height: 42px;
            width: 340px;
            border: 1px solid #8C4DF7;
            border-radius: 5px 0px 0px 5px;
            cursor: default;
        }

        .users .search .text {
            font-size: 15.5px;
            display: flex;
            justify-content: left;
            align-items: center;
            padding-left: 13px; 
            color: rgba(30, 30, 32, 0.8);
        }

        .users .search input {
            position: absolute;
            height: 42px;
            width: calc(100% - 50px);
            padding: 0 13px;
            border-radius: 5px 0 0 5px;
            outline: none;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
            font-size: 16px;
        }

        .users .search input.active {
            opacity: 1;
            pointer-events: auto;
        }

        .users .search input.active:hover {
            transition: all .3s ease;
            background: #fff;
            border: 1px solid #8C4DF7;
        }

        .users .search input.active:focus {
            border: 1px solid #8C4DF7;
        }

        .users .search button {
            width: 47px;
            height: 42px;
            border: 1px solid #8C4DF7;
            background: #8C4DF7;
            color: #fff;
            font-size: 16px;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: all .3s ease;
        }


        .users .search button:hover {
            transition: all .3s ease;
            background: #fff;
            color: #8C4DF7;
            border: 1px solid #8C4DF7;
        }

        .users .search button.active {
            background: #8C4DF7;
            color: #fff;
            transition: all 0.3s ease;
        }

        .users .search button.active:hover {
            transition: all 0.3s ease;
            background: #fff;
            color: #8C4DF7;
            border: 1px solid #8C4DF7;
        }

        .users .search button.active i::before {
            content: "\f00d";
            font-size: 16px;
        }

        .users-list {
            margin-top: 10%;
            height: 500px;
            max-height: 500px;
            overflow-y: auto;
        }

        :is(.users-list, .chat-box)::-webkit-scrollbar {
            width: 0px;
        }

        .users-list a {
            margin-bottom: 15px;
            padding-right: 15px;
            border-bottom-color: 1px solid rgba(148, 148, 180, 0.29);
            box-sizing: border-box;
            transition: none !important;
            background: #fff !important;
        }

        .users-list a:hover {
            transition: none !important;
            background:rgb(238, 236, 236) !important;
        }


        .users-list a:last-child {
            border: none;
            margin-bottom: 0px;
        }

        .users-list a .content img {
            height: 40px;
            width: 40px;
        }

        .users-list a .content p {
            color:rgb(99, 99, 105);
        }

        .users-list a .status-dot {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
            color: #8C4DF7;
            transition: all 2s ease;
        }

        .users-list a .status-dot.offline {
            color:rgb(187, 186, 186);
            transition: all 2s ease;
        }

        /* chat.php */

        .chat-area header {
            display: flex;
            align-items: center;
            padding: 20px 30px;
        }

        .chat-area header .back-icon {
            color: #8C4DF7;
            transition: all .3s ease 
        }

        .chat-area header .back-icon:hover {
            transform: translateX(-3.5px);
            transition: all .3s ease 
        }

        .chat-area header img {
            height: 42px;
            width: 42px;
            margin-right: 2px;
        }

        .chat-area header span {
            font-size: 16px;
            padding-left: 10px;
            margin-left: 2px;
            font-weight: 500;
        }

        .chat-area header p {
            font-weight: 400;
            margin-left: 2px;
            padding-left: 10px;
            font-size: 14.5px;
        }

        .chat-box {
            height: 550px;
            overflow-y: auto;
            background-image: url(./src/image/wallpaper.jpg);
            background-size: cover;
            padding: 10px 30px 20px 30px;
            box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%), inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
        }

        .chat-box .chat {
            margin: 15px 0;
        }

        .chat-box .chat p {
            word-wrap: break-word;
            padding: 8px 16px;
            box-shadow: 0 0 32px rgb(0 0 0 / 8%), 0 16px 16px -16px rgb(0 0 0 / 10%);
        }

        .chat-box .outgoing {
            display: flex;
        }

        .chat-box .outgoing .details {
            margin-left: auto;
            max-width: calc(100% - 130px);
        }

        .chat-box .outgoing .details p {
            background:rgb(195, 116, 241);
            color: #fff;
            border-radius: 15px 0 15px 15px;
        }

        .chat-box .incoming {
            display: flex;
            align-items: flex-end;
        }

        .chat-box .incoming img {
            height: 40px;
            width: 40px;
            display: none;
        }

        .incoming .details {
            margin-left: 10px;
            margin-right: auto;
            max-width: calc(100% - 130px);
        }

        .incoming .details p {
            background: #EAE6FF;
            color: #333333;
            border-radius: 0 15px 15px 15px;
        }

        .chat-area .typing-area {
            padding: 18px 20px;
            display: flex;
            justify-content: space-between;
        }

        .typing-area input {
            height: 45px;
            width: calc(100% - 58px);
            font-size: 17px;
            border: 1px solid rgba(74, 74, 78, 0.83);
            padding: 0 13px;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .typing-area input:hover {
            border: 1px solid #8C4DF7;
            color: #333333;
            transition: all .3s ease;
        }

        .typing-area input:focus {
            border: 1px solid #8C4DF7;
            color: #333333;
        }

        .typing-area button {
            width: 55px;
            height: 45px;
            border: none;
            background: #8C4DF7;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            border-radius: 0 5px 5px 0;
            border: 1px solid #8C4DF7;
            transition: all .3s ease;
        }

        .typing-area button {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
        }

        .typing-area button:hover {
            background: #fff;
            color: #8C4DF7;
            border: 1px solid #8C4DF7;
            transition: all .3s ease;
        }

        .chat-box .typing-area input:focus {
            border: 1px solid #8C4DF7;
            color: #8C4DF7;
        }

        .chat-area header .back-icon {
        font-size: 22px;
        margin-right: 15px;
        }

        .backhome {
            display: flex;
            justify-content: center;
            align-items: center; 
            margin-top: 15px;
            color: #8C4DF7;
        }

        .backhome a {
            display: flex;
            font-size: 24px;
            transition: all .4s ease-in-out;
        }

        .backhome a:hover {
            transform: translateX(-5px);
            transition: all .4s ease-in-out;
        }

        .backhome a h2 {
            padding-left: 13px; 
            font-size: 16px;
            font-weight: 400;
        }
    </style>
</head>