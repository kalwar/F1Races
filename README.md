# F1 Races App

A simple Laravel application that fetches and displays the 2025 Formula 1 race schedule from the Ergast API, featuring a card-based interface with clickable Wikipedia links for each race.

[![Laravel](https://img.shields.io/badge/Laravel-11.1+-red.svg)](https://laravel.com)

## Overview

This app demonstrates how to:

- Consume an external API in Laravel.
- Use a service class for clean architecture.
- Create a responsive, card-based frontend with plain CSS.
- Add interactive elements like clickable race titles linking to Wikipedia.

## Features

- Fetches 2025 F1 race data from `https://api.jolpi.ca/ergast/f1/2025/races/?format=json`.
- Displays races in stylish cards with details (circuit, location, date).
- Race titles are clickable links to Wikipedia pages.
- Responsive design for desktop and mobile.
- Error handling for API failures.

## Prerequisites

- PHP 8.1+
- Composer
- Node.js (for development tools, optional)
- Basic terminal knowledge

## Installation

1. **Clone the Repository**

   ```bash
   git clone https://github.com/kalwar/F1Races.git
   cd F1Races
   ```

2. **Install Dependencies**

   ```bash
   composer install
   ```

3. **Set Up Environment**

   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Generate an application key:
     ```bash
     php artisan key:generate
     ```
   - Ensure `APP_URL=http://localhost` in `.env`.

4. **Run the Application**
   ```bash
   php artisan serve
   ```

## Usage

- Open your browser and go to `http://localhost:8000/`.
- View the 2025 F1 race schedule in a card layout.
- Click race titles to visit their Wikipedia pages in a new tab.
- If the API is down, a "No race data available" message will appear.

## Project Structure

- `app/Http/Controllers/RaceController.php`: Handles HTTP requests and renders the view.
- `app/Services/CallApiService.php`: Fetches race data from the Ergast API.
- `routes/web.php`: Defines the `/` route.
- `resources/views/races.blade.php`: Displays races in a card-based layout with CSS.

## Troubleshooting

- **API Not Loading**: Check your internet connection and the Ergast API URL.
- **Blank Page**: Verify file paths and run `php artisan route:list` to check routes.
- **Dependencies Missing**: Ensure `composer install` was successful and PHP version is 8.1+.

## License

This project is open-source under the MIT License. See `LICENSE` for details.
