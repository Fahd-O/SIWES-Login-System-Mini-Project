# SIWES Login System Mini-Project

This repository contains the login system mini-project developed during my Student's Industrial Work Experience Scheme (SIWES) at the university after my 2nd year. The project was completed in two phases:

1. **Static Version:** A front-end-only login page that redirects users to a dummy profile page, regardless of input.
2. **Dynamic Version:** An upgraded version with backend functionality to verify user credentials, handle errors, and grant access to the dummy profile page upon valid login.

## Folder Structure

- **`static/`**: Contains the static version of the login system.
  - Files include `login.html`, `loginPro.css`, and `profile.html`.
  - A screenshot of the folder contents:
    ![Static Version Folder Contents](static-folder-screenshot.png)

- **`dynamic/`**: Contains the dynamic version of the login system.
  - Includes PHP and CSS files, along with MySQL database integration for credential validation.
  - A screenshot of the folder contents:
    ![Dynamic Version Folder Contents](dynamic-folder-screenshot.png)

## Static Version

The static version is a simple HTML and CSS implementation of a login page. Features include:

- A login form with fields for username and password.
- A dummy profile page users are redirected to upon pressing the "Login" button, regardless of input.

## Dynamic Version

The dynamic version enhances the static version with backend functionality using PHP and MySQL. Key features include:

1. **User Authentication:**
   - A MySQL database stores user credentials.
   - Credentials are validated before granting access to the profile page.

2. **Error Handling:**
   - **Empty Fields:** Alerts the user if the username or password field is left empty.
   - **Invalid Username:** Ensures that the username contains only numeric values, rejecting invalid formats.
   - **Incorrect Login:** Notifies users if the entered credentials are invalid.

3. **File Breakdown:**
   - **`connection.php`**: Establishes the connection to the MySQL database.
   - **`functions.php`**: Includes helper functions for validation and error handling.
   - **`login.php`**: Handles the login process and displays appropriate messages for errors or successful logins.
   - **`signup.php`**: Allows users to add credentials (optional if included).
   - **`logout.php`**: Manages user logouts.

## MySQL Database Setup

To use the dynamic version, set up the MySQL database as follows:

1. Create a database (e.g., `login_system`).
2. Create a table for user credentials with the following schema:

   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(50) NOT NULL,
       password VARCHAR(255) NOT NULL
   );
   ```

3. Add sample user data:

   ```sql
   INSERT INTO users (username, password) VALUES ('12345', 'password123');
   ```

## Screenshots

### For Static Version

**Login Page:**
![Static Login Page](static-login-page-screenshot.png)

**Profile Page:**
![Static Profile Page](static-profile-page-screenshot.png)

### For Dynamic Version

**Login Page:**
![Dynamic Login Page](dynamic-login-page-screenshot.png)

**Profile Page (After Login):**
![Dynamic Profile Page](dynamic-profile-page-screenshot.png)

## Technologies Used

- **Frontend:** HTML5, CSS3
- **Backend:** PHP
- **Database:** MySQL

## Notes

This project demonstrates the transition from a static web application to a dynamic, database-driven system. It highlights key web development concepts such as authentication, error handling, and user interface design.

### To Finalize

- Replace the placeholder screenshot filenames with actual filenames or paths once the screenshots are uploaded to the repository.
- Confirm if any additional details need to be included in the documentation.

Let me know if further adjustments are needed!