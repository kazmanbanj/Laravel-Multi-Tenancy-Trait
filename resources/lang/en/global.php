<?php

return [
    'add'                            => 'Add',
    'create'                         => 'Create',
    'list'                           => 'List',
    'show'                           => 'Show',
    'entries'                        => 'Entries',
    'search'                         => 'Search',
    'view'                           => 'View',
    'edit'                           => 'Edit',
    'delete'                         => 'Delete',
    'pleaseSelect'                   => 'Please select',
    'areYouSure'                     => 'Are you sure?',
    'allRightsReserved'              => 'All rights reserved.',
    'downloadFile'                   => 'Download file',
    'toggleNavigation'               => 'Toggle navigation',
    'home'                           => 'Home',
    'youAreLoggedIn'                 => 'You are logged in!',
    'user_name'                      => 'Name',
    'reset_password'                 => 'Reset Password',
    'login'                          => 'Login',
    'remember_me'                    => 'Remember me',
    'forgot_password'                => 'Forgot your password?',
    'register'                       => 'Register',
    'login_email'                    => 'Email',
    'login_password'                 => 'Password',
    'login_password_confirmation'    => 'Password confirmation',
    'yes'                            => 'Yes',
    'no'                             => 'No',
    'view_file'                      => 'View file',
    'verifyYourUser'                 => 'To finish your registration - site asks you to verify your email',
    'clickHereToVerify'              => 'Click here to verify',
    'thankYouForUsingOurApplication' => 'Thank you for using our website',
    'verifyYourEmail'                => 'Please verify your email',
    'emailVerificationSuccess'       => 'User email verified successfully',
    'yourAccountNeedsAdminApproval'  => 'Your accounts needs an administrator approval in order to log in',
    'timeFrom'                       => 'From',
    'timeTo'                         => 'To',
    'filterDate'                     => 'Filter by date',
    'reports'                        => 'Reports',
    'year'                           => 'Year',
    'month'                          => 'Month',
    'logout'                         => 'Logout',
    'calendar'                       => 'Calendar',
    'datatables'                     => [
        'copy'   => 'Copy',
        'csv'    => 'CSV',
        'excel'  => 'Excel',
        'pdf'    => 'PDF',
        'print'  => 'Print',
        'colvis' => 'Column visibility',
        'delete' => 'Delete selected',
    ],
    'site_title'                     => 'Multi Tenancy',
    'userManagement'                 => [
        'title'          => 'User Management',
        'title_singular' => 'User Management',
        'fields'         => [],
    ],
    'permission'                     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'                           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'                           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'country'                        => [
        'title'          => 'Countries',
        'title_singular' => 'Country',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'short_code'        => 'Short Code',
            'short_code_helper' => '',
        ],
    ],
    'hotel'                          => [
        'title'          => 'Hotels',
        'title_singular' => 'Hotel',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'address'           => 'Address',
            'address_helper'    => '',
            'country'           => 'Country',
            'country_helper'    => '',
            'created_at'        => 'Created At',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'booking'                        => [
        'title'          => 'Bookings',
        'title_singular' => 'Booking',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'first_name'          => 'First Name',
            'first_name_helper'   => '',
            'last_name'           => 'Last Name',
            'last_name_helper'    => '',
            'hotel'               => 'Hotel',
            'hotel_helper'        => '',
            'booking_from'        => 'Booking From',
            'booking_from_helper' => '',
            'booking_to'          => 'Booking To',
            'booking_to_helper'   => '',
            'created_at'          => 'Created At',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated At',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
];
