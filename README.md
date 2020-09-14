    used technologies are Laravel 8.01 + React.JS + Bootsrtap 4


1. create a file with name .env and copy .env.example content to the .env file
2. configure the DB's information in the .env file
3. php artisan key:generate
4. php artisan migrate:refresh --seed
5. php artisan serve
6. For live testing/checking: http://testing.jermukcity.am/

Task Requirements
------------

You are required to develop a PHP web application with a single page similar to
the screenshot displayed below.

● The web page has a single text box which allows the user to enter some textual
input (called the item name). Once the user enters some text and clicks on 'Add'
the item will be added to the list below that text box and the input will be cleared.

● Adding the same item isn't allowed.

● The items in the list are selectable. But only one item can be selected at a time.

● If there is an item selected, the '>' button moves the selected item from the list on
the left to the list on the right.

● The items in the list on the right are also selectable. And the '<' button moves
back the item to the list on the left when clicked.

● The state of the application (the contents of the 2 lists) must be stored in
the backend's database (the Postgres or the MySQL database). This means if
the web page is reloaded or closed when it's reopened, the user will find the
items in both lists as he left them before closing the page.
