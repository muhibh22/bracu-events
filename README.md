Bracu Events is a comprehensive Laravel-based web application designed to streamline and simplify room availability management and event coordination within the context of a university setting. This versatile system offers a wide range of features and functionalities catering to various stakeholders, including students, administrators, faculty, and event organizers.

Key Features
Student Portal
User Authentication: Secure login and registration for students to access the system.
Event Requests: Students can submit event requests, providing event details and preferences for room allocation.
Room Requests: Students can check room availability and request rooms for academic purposes.
Event Feedback: After an event, students can provide feedback to help improve future events.
Administrator Dashboard
Admin Login: Protected access for university administrators.
Room Management: Administrators can manage room availability, assign rooms, and maintain a calendar of room bookings.
Event Acceptance: Review and accept/reject event requests submitted by students.
User Management: Manage user accounts and roles.
Report Generation: Generate reports on room usage and event history.
OCA (Office of Co-Curricular Activities) Integration
OCA Login: OCA staff can log in and access specific functionalities.
Event Coordination: Coordinators can oversee event management, including approvals, scheduling, and logistics.
Transport Requests: Manage transportation requests for events.
Sound Requests: Handle sound system setup requests for events.
Department Integration
Department Login: Department heads and staff can log in.
Academic Room Requests: Request rooms for departmental academic purposes.
Event Tracking: View and track events organized by the department.
Getting Started
Clone the Repository:

bash
Copy code
git clone https://github.com/yourusername/bracu-events.git
Install Dependencies:

Copy code
composer install
Set Up Database:

Create a MySQL database and configure the .env file with your database credentials.
Run database migrations and seed data:
css
Copy code
php artisan migrate --seed
Start the Application:

Copy code
php artisan serve
Access the Application:
Open a web browser and navigate to http://localhost:8000.

Technology Stack
Laravel (PHP Framework)
MySQL Database
HTML/CSS
JavaScript
Bootstrap

Contributing
Contributions to Bracu Events are welcome! Feel free to submit bug reports, feature requests, or pull requests to help improve the project.


Acknowledgments
Special thanks to the BRAC University community for their support and feedback in the development of this project.
Contact
For any inquiries or support, please contact muhibh22@gmail.com.
