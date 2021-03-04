# Remote-Tailors

## Directory Structure and Definition

### Private
   * Dummy data - "Tailor dummy data.csv" 
   * DB Credential - "db_credential.php" The login details required to access the database on the local server
   * Initialize DB - "db_setup.php" initialize database connection and create the database for the application
   * Update DB - "db_record" Connect to database and update using the dummy data 
   * Functions - "functions.php" Initialize reusable statements that can be call from other parts of the applications
   * Functions Test - "functions_test.php" Trial statements that test that the functions created works.
   * To get root working directory - "initialize.php" Call in every public page to ensure that the file paths are well cited
   * Page Access - "validate.php" processes the form data to grant users access to their personalized pages.
### Public
   * Tailors - Directory for pages personalized for tailors
   * index.php - Landing page
   * about_us.php - About us page
   * register.php - Registration page for Tailors and Customer
   * men.php - Webpage showing only tailors with service preference of "Male"
   * women.php - Webpage showing only tailors with service preference of "Female"
   * login.php - Login page
   * logout.php - Closes a users session and redirects to login page
   * filter.php - The Filter sector made to standalone for on index,men and women pages
   * head.php - HTML head element
   * navigation.php - HTML navigation element
   * footer.php - HTML footer and body closing tag
     #### Assets
        * css - Directory for custom-defined stylesheets
        * images - Directory for application images
   
