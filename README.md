
## Installation Setup

### Requirements
- PHP 8.1 or higher
- Composer
- MySQL or compatible database
- Node.js and NPM (for frontend assets)

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clon https://github.com/x1nx3r/pkk-bkl-B/
   cd pkk-bkl-B
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Set up your database**
   - Configure database connection in the `.env` file
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

5. **Run migrations and seeders**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Build frontend assets**
   ```bash
   npm run build
   ```

7. **Start the server**
   ```bash
   composer run dev
   ```

8. **Access the application**
   - Visit `http://localhost:8000` in your browser
