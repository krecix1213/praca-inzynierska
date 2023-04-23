<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/absence' => [[['_route' => 'mainPageAbsenceAdmin', '_controller' => 'App\\Controller\\Admin\\absencePageController::absenceIndex'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'mainPageAdmin', '_controller' => 'App\\Controller\\Admin\\mainPageController::index'], null, null, null, true, false, null]],
        '/admin/marks' => [[['_route' => 'mainMarksPageAdmin', '_controller' => 'App\\Controller\\Admin\\marksPageController::index'], null, null, null, false, false, null]],
        '/admin/student' => [[['_route' => 'mainPageStudentEditAdmin', '_controller' => 'App\\Controller\\Admin\\studentEditPageController::studentEditIndex'], null, null, null, false, false, null]],
        '/admin/teacher' => [[['_route' => 'mainPageTeachersEditAdmin', '_controller' => 'App\\Controller\\Admin\\teacherEditPageController::teacherEditIndex'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'appLogin', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'appLogout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/student/absence' => [[['_route' => 'mainAbsenceStudent', '_controller' => 'App\\Controller\\Student\\absencePageController::index'], null, null, null, true, false, null]],
        '/student' => [[['_route' => 'mainPageStudent', '_controller' => 'App\\Controller\\Student\\mainPageController::index'], null, null, null, true, false, null]],
        '/student/marks' => [[['_route' => 'mainMarksStudent', '_controller' => 'App\\Controller\\Student\\marksPageController::index'], null, null, null, true, false, null]],
        '/student/timetable' => [[['_route' => 'timeTableStudent', '_controller' => 'App\\Controller\\Student\\timeTablePageController::index'], null, null, null, false, false, null]],
        '/teacher/absence' => [[['_route' => 'mainPageAbsenceTeacher', '_controller' => 'App\\Controller\\Teacher\\absencePageController::absenceIndex'], null, null, null, false, false, null]],
        '/teacher' => [[['_route' => 'mainPageTeacher', '_controller' => 'App\\Controller\\Teacher\\mainPageController::index'], null, null, null, true, false, null]],
        '/teacher/marks' => [[['_route' => 'marksMainPageTeacher', '_controller' => 'App\\Controller\\Teacher\\marksPageController::marks'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'mainSite', '_controller' => 'App\\Controller\\mainSiteController::mainSite'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|absence/(?'
                        .'|view/class/([^/]++)(*:47)'
                        .'|edit/([^/]++)/([^/]++)(*:76)'
                        .'|class/add/([^/]++)(*:101)'
                    .')'
                    .'|marks/(?'
                        .'|([^/]++)(*:127)'
                        .'|edit/([^/]++)(*:148)'
                    .')'
                    .'|student/([^/]++)(*:173)'
                    .'|teacher/([^/]++)(*:197)'
                .')'
                .'|/student/marks/([^/]++)(*:229)'
                .'|/teacher/(?'
                    .'|absence/(?'
                        .'|view/class/([^/]++)(*:279)'
                        .'|class/(?'
                            .'|([^/]++)(*:304)'
                            .'|add/([^/]++)(*:324)'
                        .')'
                    .')'
                    .'|marks/(?'
                        .'|class/(?'
                            .'|([^/]++)(*:360)'
                            .'|add/([^/]++)(*:380)'
                        .')'
                        .'|view/class/([^/]++)(*:408)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:449)'
                    .'|wdt/([^/]++)(*:469)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:515)'
                            .'|router(*:529)'
                            .'|exception(?'
                                .'|(*:549)'
                                .'|\\.css(*:562)'
                            .')'
                        .')'
                        .'|(*:572)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        47 => [[['_route' => 'absenceClassViewPageAdmin', '_controller' => 'App\\Controller\\Admin\\absencePageController::absenceView'], ['id'], null, null, false, true, null]],
        76 => [[['_route' => 'AbsenceEditAdmin', '_controller' => 'App\\Controller\\Admin\\absencePageController::edit'], ['classId', 'id'], null, null, false, true, null]],
        101 => [[['_route' => 'AbsenceAddAdmin', '_controller' => 'App\\Controller\\Admin\\absencePageController::absenceAdd'], ['id'], null, null, false, true, null]],
        127 => [[['_route' => 'marksClassPageAdmin', '_controller' => 'App\\Controller\\Admin\\marksPageController::classPage'], ['id'], null, null, false, true, null]],
        148 => [[['_route' => 'markEditPageAdmin', '_controller' => 'App\\Controller\\Admin\\marksPageController::edit'], ['id'], null, null, false, true, null]],
        173 => [[['_route' => 'StudentEditAdmin', '_controller' => 'App\\Controller\\Admin\\studentEditPageController::studentEdit'], ['id'], null, null, false, true, null]],
        197 => [[['_route' => 'TeacherEditAdmin', '_controller' => 'App\\Controller\\Admin\\teacherEditPageController::teacherEdit'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'marksStudentId', '_controller' => 'App\\Controller\\Student\\marksPageController::marks'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'absenceClassViewPageTeacher', '_controller' => 'App\\Controller\\Teacher\\absencePageController::absenceView'], ['id'], null, null, false, true, null]],
        304 => [[['_route' => 'absenceClassPageTeacher', '_controller' => 'App\\Controller\\Teacher\\absencePageController::absence'], ['id'], null, null, false, true, null]],
        324 => [[['_route' => 'AbsenceAddTeacher', '_controller' => 'App\\Controller\\Teacher\\absencePageController::absenceAdd'], ['id'], null, null, false, true, null]],
        360 => [[['_route' => 'marksClassPageTeacher', '_controller' => 'App\\Controller\\Teacher\\marksPageController::marksClass'], ['id'], null, null, false, true, null]],
        380 => [[['_route' => 'marksAddClass', '_controller' => 'App\\Controller\\Teacher\\marksPageController::addMarksClass'], ['id'], null, null, false, true, null]],
        408 => [[['_route' => 'marksClassViewPageTeacher', '_controller' => 'App\\Controller\\Teacher\\marksPageController::marksViewClass'], ['id'], null, null, false, true, null]],
        449 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        469 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        515 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        529 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        549 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        562 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        572 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
