<?php
namespace App\Helper;

class HelperComponent {

    public static function SideBar(){
        return [
                [
                    "heading"=>"Main",
                ],
                [
                    "single_link" => setSingleLink( "Dashboard","home",null,"/"),
                ],
                [
                    "heading"=>"Management",
                    "menu"=>[
                        "title"=>'User Management',
                        "icon"=>"user",
                        "sub_menu"=>[
                            setSubMenu(
                              "Users",
                                null,
                                null,
                                 "/users",
                            ),
                            setSubMenu(
                                "Roles",
                                  null,
                                  null,
                                   "/roles",
                            ),
                            setSubMenu(
                                "Permissions",
                                  null,
                                  null,
                                   "/permissions",
                              ),

                        ]

                    ],

                ],

                // [
                //     "single_link" => setSingleLink( "Dashboard","fa fa-users",null,"/"),
                // ],

     ];
    }
}
