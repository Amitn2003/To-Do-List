# ToDo List App

This is a simple ToDo list application built using PHP and MySQL. It allows users to add tasks, update/edit tasks, and delete tasks. The project is designed to be responsive and user-friendly.

## Features

- **Add Task**: Users can add new tasks with a name and description.
- **Update/Edit Task**: Existing tasks can be edited to update their name or description.
- **Delete Task**: Users can remove tasks from the list.
- **Responsive Design**: The application is designed to work seamlessly on different devices and screen sizes.

## Installation

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/Amitn2003/To-Do-List.git
    ```

2. Import the `database.sql` file into your MySQL database to set up the necessary table structure.

3. Configure the database connection in `config.php` file:

    ```php
    $host = 'localhost';
    $username = 'your_database_username';
    $password = 'your_database_password';
    $database = 'todo';
    $mysqli = new mysqli($host, $username, $password, $database);
    ```

4. Upload the project files to your web server.

## Usage

1. Open the application in your web browser.
2. Use the provided form to add new tasks.
3. Existing tasks are listed below the form.
4. Click on the "Edit" link next to a task to update its details.
5. Click on the "Delete" link to remove a task from the list.

## Hosted Website

The ToDo List App is hosted at: [https://todo-app1.000webhostapp.com/](https://todo-app1.000webhostapp.com/)


## Contributing

Contributions are welcome! If you have any suggestions, bug reports, or feature requests, please open an issue or submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
