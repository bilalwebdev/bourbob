<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'list',
                'title' => 'Dashboard',
                'route_name' => 'dashboard.index',
                'params' => [],
            ],
            'Bourbon' => [
                'icon' => 'home',
                'title' => 'Bourbon',

                'params' => [],
                'sub_menu' => [
                    'viewall' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard.bourbons',
                        'params' => [],
                        'title' => 'View Bourbons',
                    ],
                    'aromas' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard.aromas',
                        'params' => [],
                        'title' => 'Aromas',
                    ],
                    'flavors' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard.flavors',
                        'params' => [],
                        'title' => 'Flavors',
                    ],
                    'mashbills' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard.mashbills',
                        'params' => [],
                        'title' => 'Mashbills',
                    ],
                    'distilleries' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard.distilleries',
                        'params' => [],
                        'title' => 'Distilleries',
                    ],

                    'producers' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard.producers',
                        'params' => [],
                        'title' => 'Producers',
                    ],
                    'brands' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard.brands',
                        'params' => [],
                        'title' => 'Brands',
                    ],
                    'states' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard.states',
                        'params' => [],
                        'title' => 'States',
                    ],

                ],
            ],
            'SiteSettings' => [
                'icon' => 'home',
                'title' => 'Site Settings',
                'params' => [],
                'sub_menu' => [
                      'privacy-policy' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard.privacy-policy',
                        'params' => [],
                        'title' => 'Privacy Policy',
                    ],
                    'terms-conditions' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard.terms-conditions',
                        'params' => [],
                        'title' => 'Terms and Conditions',
                    ],
                ],
            ],

            // 'blog' => [
            //     'icon' => 'edit',
            //     'title' => 'Blog',
            //     'route_name' => 'dashboard.aromas',
            //     'params' => [],
            // ],

            ];
    }
}
