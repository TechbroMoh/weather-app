Route::get('/weather', [App\Http\Controllers\Api\WeatherController::class, 'getWeather']);

use App\Http\Controllers\WeatherController;

Route::get('/weather', [WeatherController::class, 'getWeather']);
