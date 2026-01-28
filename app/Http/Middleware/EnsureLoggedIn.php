namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is NOT logged in
        if (!Auth::check()) {
            // This creates the "prompt" message you requested
            return redirect()->route('login')->with('auth_error', 'Authenticate users only.');
        }

        return $next($request);
    }
}