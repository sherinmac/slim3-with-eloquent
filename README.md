# slim3-with-eloquent
REST api Insertion and fetching  data's  using slim 3 and Laravel Eloquent model  

Step 1

First install all dependensies  defined in composer.json using    composer install command
then   Slim 3.0 and Laravel eloquent model are installed and located in vendor folder.

step 2

Please create a  database in local db.You can see a database  folder in root please open it and export it to  your local db or run the sql code.(users is the table name).Set your db name,user name,password etc in creds.php located  in config folder.

step 3

All models are located in  src\User\Models  directory.

Optional:

If you cahnge the name of "User"  Folder then you need to update the  settings of 'User' namespace  defined in the composer.json file   
for example If you change the name of  "User" folder to  "Employee"  then go to composer and update code as 

{
    "require": {
        "illuminate/database": "~5.2",
        "slim/slim": "^3.0"
    },
    "autoload": {
        "psr-4": { "Employee\\": "src/Employee/"}
    }
}

and run composer dump-autoload  command and update  this namespace  in all  models 

step 4:

Please open postman or ARC 

Link : http://localhost/{{rootfoldername}}/user
Method : post

Define body as following  json array

{"userinfo":{
  "name": "Sherin Green",
  "email": "sheringreen@gmail.com",
  "isd": "+91",
  "phone": "9895447881",
  "address": "Kerala,India"
  }
}


