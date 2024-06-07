
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    /**
     * Redirect to the home page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToHome()
    {
        return redirect('/home');
    }
}