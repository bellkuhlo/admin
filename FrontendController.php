<?php
// cms/app/controllers/FrontendController.php

namespace app\controllers;

class FrontendController {
    public function index() {
        // Logik für die Startseite
        require_once APP_PATH . '/views/frontend/index.php';
    }

    public function about() {
        // Logik für die "Über uns"-Seite
        require_once APP_PATH . '/views/frontend/about.php';
    }

    // Weitere Methoden für den Frontend-Bereich (z.B. Kontaktformular, Blog usw.)
}
