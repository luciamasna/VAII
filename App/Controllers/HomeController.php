<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;
use App\Models\Announcement;

/**
 * Class HomeController
 * Handles actions related to the home page and other public actions.
 *
 * This controller includes actions that are accessible to all users, including a default landing page and a contact
 * page. It provides a mechanism for authorizing actions based on user permissions.
 *
 * @package App\Controllers
 */
class HomeController extends BaseController
{
    /**
     * Authorizes controller actions based on the specified action name.
     *
     * In this implementation, all actions are authorized unconditionally.
     *
     * @param string $action The action name to authorize.
     * @return bool Returns true, allowing all actions.
     */
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    /**
     * Displays the default home page.
     *
     * This action serves the main HTML view of the home page.
     *
     * @return Response The response object containing the rendered HTML for the home page.
     */
    public function index(Request $request): Response
    {
        //potrebujem si nacitat oznamy z databazy a zobrazit ich na hlavnej stranke
        try {
            $announcements = Announcement::getAll();
        } catch (\Exception $e) {
            throw new HttpException(500, "DB chyba: " . $e->getMessage());
        }
        //zoradim oznamy podla id zostupne, aby sa najnovsi oznam zobrazil ako prvy
        usort($announcements, function ($a, $b) {
            return $b->getId() <=> $a->getId();//tu porovnava id oznamov a zoradi ich zostupne
        });

        //vyberiem len 3 najnovsie oznamy
        $latestAnnouncements = array_slice($announcements, 0, 3);
        //request je HTTP poziadavka
        //response je HTML odpoved
        //html() je metoda z BaseController, ktora vracia HTML odpoved
        //automaticky sa do roo.layout.view.php vlozi obsah z home/index.view.php
        return $this->html([
            'latestAnnouncements' => $latestAnnouncements
        ]);
    }


}
