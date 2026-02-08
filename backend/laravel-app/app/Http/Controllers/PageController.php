<?php
// app/Http\Controllers/PageController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
 {
    public function show( $page = null )
 {

        if ( $page === null ) {
            $page = 'home';
        }

        $viewPath = "pages.$page";

        if ( $page === 'home' && request()->path() === 'home' ) {
            return redirect( '/' );
        }

        if ( !view()->exists( $viewPath ) ) {
            abort( 404 );
        }

        return view( $viewPath );
    }
}