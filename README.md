# PHP API

## Enpoints

```
Base example
https://localhost/index.php/{MODULE_NAME}/{METHOD_NAME}?limit={LIMIT_VALUE}
```

<table>
    <tr>
        <th>Endpoint</th>
        <th>URL</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>/user/list/</td>
        <td>http://localhost/api.php/user/list</td>
        <td>List all users</td>
    </tr>
</table>


## API internal structure
Let’s have a look at the following structure.

```
├── src/
│   ├── Controller
│   │   └── Api
│   │       ├── BaseController.php
│   │       └── UserController.php
│   ├── Model
│   │   ├── Database.php
│   │   └── UserModel.php
│   └── inc
│       ├── bootstrap.php
│       └── config.php
└── index.php
```

- **index.php**: the entry-point of our application. It will act as a front-controller of our application.
- **inc/config.php**: holds the configuration information of our application. Mainly, it will hold the database credentials.
- **inc/bootstrap.php**: used to bootstrap our application by including the necessary files.
- **Model/Database.php**: the database access layer which will be used to interact with the underlying MySQL database.
- **Model/UserModel.php**: the User model file which implements the necessary methods to interact with the users table in the MySQL database.
- **Controller/Api/BaseController.php**: a base controller file which holds common utility methods.
- **Controller/Api/UserController.php**: the User controller file which holds the necessary application code to entertain REST API calls.






<p class="text-align: center">
    PHP API made by following <a href="https://code.tutsplus.com/tutorials/how-to-build-a-simple-rest-api-in-php--cms-37000">Sajal Soni tutorial</a>
    ❤
</p>