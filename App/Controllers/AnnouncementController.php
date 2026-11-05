<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;
use App\Models\Announcement;

class AnnouncementController extends BaseController
{
    public function index(Request $request): Response
    {
        try {
            $announcements = Announcement::getAll();


        //zoradim oznamy podla id zostupne, aby sa najnovsi oznam zobrazil ako prvy
        usort($announcements, function ($a, $b) {
            return $b->getId() <=> $a->getId();//tu porovnava id oznamov a zoradi ich zostupne
        });
        //vyberiem len 3 najnovsie oznamy
        $latestAnnouncements = array_slice($announcements, 0, 3);

        return $this->html([
            'announcements' => $announcements,
            'latestAnnouncements' => $latestAnnouncements
        ]);
        } catch (\Exception $e) {
            throw new HttpException(500, "DB chyba: " . $e->getMessage());
        }
    }

    public function manage(Request $request): Response
    {
        try {
            $announcements = Announcement::getAll();

            //zoradim oznamy podla id zostupne, aby sa najnovsi oznam zobrazil ako prvy
            usort($announcements, function ($a, $b) {
                return $b->getId() <=> $a->getId();//tu porovnava id oznamov a zoradi ich zostupne
            });

            return $this->html([
                'announcements' => $announcements
            ]);
        } catch (\Exception $e) {
            throw new HttpException(500, "DB chyba: " . $e->getMessage());
        }
    }

    public function add(Request $request): Response {
        return $this->html();
    }

    public function save(Request $request): Response {
        /*ziska id oznamu z requestu, prevedie ho na int*/
        /*ak je id oznamu vacsie ako 0, tak sa pokusi najst oznam v databaze, inak vytvori novy oznam*/
        $announcement = (int)$request->value('id') > 0 ? $this->findAnnouncement($request) : new Announcement();
        /*nastavi hodnoty oznamu z requestu a ulozi ho do databazy*/
        $announcement->setFromRequest($request);

        if ($announcement->getId() === null) {
            $announcement->setDate(date('Y-m-d H:i:s'));
        }

        $announcement->save();
        /*presmeruje na stranku so zoznamom oznamov*/
        return $this->redirect($this->url('announcement.index'));
    }
    private function findAnnouncement(Request $request): Announcement
    {
        $announcement = Announcement::getOne((int)$request->value('id'));
        if ($announcement === null) {
            throw new HttpException(404, 'Oznam neexistuje.');
        }
        return $announcement;
    }
}