# hippoCampus

SITE URL: https://hippo-campus.000webhostapp.com/

USER LOGIN FOR TESTING{
    username: 'peterParker',
    password: 'password'
}

//FILE DESCRIPTIONS

PAGES{
    landingPage: ['login.php', 'form.css']              //user will either log in or sign up
    mainPage: ['main.php', 'hotel.html']                //main page after login (Compiled CSS using SASS)
    albumPages: ['bambi2.html', 'landMark2.html'],      //(compiled CSS using SASS)
    finance: ['budget.html', 'budget.css', 'budget.js'],//JS functions and DOM manipulation 
    developers: 'about.php',                             //(compiled CSS using SASS)
    live chat: {
        'logout.php',                                     //destroys session
        'database_connection.php',                        //connects to the DB in hosting site 
        'fetch_user.php',                                 //display data according to the current user
        'fetch_user_chat_history.php',                    //chat conversation in dialog box
        'insert_chat.php',                                //open and insert dialog boc
        'header.php',                                     //layout for login and signup
        'singup.php',                                     //to create new user and set password  
        'update_is_type.php',                             //inform is another is typing
        'update_last_activity.php'                        //show online users  
    }
}

FOLDERS{
    'images',              //contains all images and videos
    'css',                 //compiled css based on code written in SASS 
    'sass',                //CSS extension to make our layout and styling more reusable
    'includes',            //includes 'singup.inc.php' to create new users 
    'SVG',                 //ICONS
    'node_modules'         //node dependencies
}

OTHER FILES{
    '.gitignore',
    'package.json',         //see script used to compile sass into css code
    'package-lock.json'            
}


DATABASE MANAGER{
    DB NAME: 'id9307746_chat',
    DB User: id9307746_alvaro,
    DB Host: 'localhost'
}