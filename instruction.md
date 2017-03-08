---This is sample project----  
put code sample to web root
run structure.sql file for db creation
edit db settings using application/config/database

relations -

    grade has_many class
    student has_one class

ex :-

Grade 7
  class a, class b, class c

  class a
    peter, jane,..


API Call

curl -H "Accept: application/json" http://localhost/test/index.php/SchoolApi/grade    - Get Grade List

curl -X PUT -d name=pathum -d classID=1 -d description=test -d age=23 -d gender=1 -d contactNo=0234567876 http://localhost/test/index.php/SchoolApi/student  - Add Student

curl -H "Accept: application/json" http://localhost/test/index.php/SchoolApi/classes   - List All Classes

curl -H "Accept: application/json" http://localhost/test/index.php/SchoolApi/student?class=1 - Get Students From Class

curl -X "DELETE" -d class=2 http://localhost/test/index.php/SchoolApi/class  - Delete Class
