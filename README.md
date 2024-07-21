# Pizza Tracker App
This project is a simple pizza tracker application built to expand my knowledge of front-end libraries and utilize Tailwind CSS. It combines Laravel, React, Inertia, and Tailwind to create a seamless pizza ordering and tracking experience.

# Features
- Order Management:
Real-time updates for order status (preparing, baking, out for delivery, delivered).

Dashboard:
- Admins can manage orders through the dashboard.
- View and update order status.
- Track order progress.

Technologies Used: 
- Laravel: A powerful PHP framework for building web applications.
- React: A JavaScript library for building user interfaces.
- Inertia: A seamless way to build server-driven single-page apps using Laravel and Vue.js.
- Tailwind CSS: A utility-first CSS framework for designing responsive and clean UIs.


# Installation
Clone the repository:

git clone https://github.com/BjornTelkamp/pizza_tracker.git

Install dependencies:

`cd pizza-tracker`

`composer install`

`npm install`

Set up your environment variables (.env file) for database connection and other settings.

Run migrations:
`php artisan migrate`

Seed the database
`php artisan db:seed`

Compile assets:
`npm run dev`

Start the development server:
`php artisan serve`

## Usage
Visit the pizza tracker in your browser http://localhost:8000/order/{order}.

Manage pizza's at http://localhost:8000/pizza

## License
This project is open-source and available under the MIT License.
