<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'mainPageAdmin', '_controller' => 'App\\Controller\\Admin\\mainPageController::index'], null, null, null, true, false, null]],
        '/parent' => [[['_route' => 'mainPageParent', '_controller' => 'App\\Controller\\Parent\\mainPageController::index'], null, null, null, true, false, null]],
        '/login' => [[['_route' => 'appLogin', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'appLogout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/student/absence' => [[['_route' => 'mainAbsenceStudent', '_controller' => 'App\\Controller\\Student\\absencePageController::index'], null, null, null, true, false, null]],
        '/student' => [[['_route' => 'mainPageStudent', '_controller' => 'App\\Controller\\Student\\mainPageController::index'], null, null, null, true, false, null]],
        '/student/marks' => [[['_route' => 'mainMarksStudent', '_controller' => 'App\\Controller\\Student\\marksPageController::index'], null, null, null, true, false, null]],
        '/student/timetable' => [[['_route' => 'timeTableStudent', '_controller' => 'App\\Controller\\Student\\timeTablePageController::index'], null, null, null, false, false, null]],
        '/teacher' => [[['_route' => 'mainPageTeacher', '_controller' => 'App\\Controller\\Teacher\\mainPageController::index'], null, null, null, true, false, null]],
        '/teacher/marks' => [[['_route' => 'marksMainPageTeacher', '_controller' => 'App\\Controller\\Teacher\\marksPageController::marks'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'mainSite', '_controller' => 'App\\Controller\\mainSiteController::mainSite'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\mainSiteController::contactSite'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/student/marks/([^/]++)(*:30)'
                .'|/teacher/marks/class/(?'
                    .'|([^/]++)(*:69)'
                    .'|add/([^/]++)(*:88)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'marksStudentId', '_controller' => 'App\\Controller\\Student\\marksPageController::marks'], ['id'], null, null, false, true, null]],
        69 => [[['_route' => 'marksClassPageTeacher', '_controller' => 'App\\Controller\\Teacher\\marksPageController::marksClass'], ['id'], null, null, false, true, null]],
        88 => [
            [['_route' => 'marksAddClass', '_controller' => 'App\\Controller\\Teacher\\marksPageController::addMarksClass'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
