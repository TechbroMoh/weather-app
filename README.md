# 🌦️ WeatherCast

A simple and beautiful weather app built with **Next.js + TypeScript** on the frontend and **Laravel** on the backend. It fetches real-time weather data from [OpenWeatherMap](https://openweathermap.org/api).

---

## 🧩 Stack

- **Frontend:** Next.js, TypeScript, Tailwind CSS + RippleUI  
- **Backend:** Laravel API (no views), Guzzle HTTP Client  
- **API:** OpenWeatherMap

---

## ✅ Features

- Search weather by city  
- View temperature, humidity, wind, and condition  
- Clean UI with animations using RippleUI  
- Fully decoupled frontend/backend structure  

---

## 🚀 Running the App

### Frontend

```bash
cd frontend
npm install
npm run dev
```

Create `.env.local`:

```
NEXT_PUBLIC_API_BASE_URL=http://localhost:8000/api
```

---

### Backend

```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Add your OpenWeatherMap key to `.env`:

```
OPENWEATHER_API_KEY=your_api_key
```

---

## 🔌 API Endpoint

**GET** `/api/weather?city=Nairobi`  
Returns JSON with weather details.

---

## 📌 Notes

- No auth — public API access only (as requested)  
- API is clean and ready for extension (e.g., forecast support)  
- Type-safe, modular, and easy to maintain  

---

## 👨‍💻 Author

**Felix Monari (Moh)**  
[GitHub](https://github.com/TechbroMoh) • [LinkedIn](https://linkedin.com/in/felixmonari)
