@extends(backpack_view('blank'))

@php
    use App\Http\Controllers\Admin\UsersCrudController;

    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => 'Willkommen!',
        'content'     => 'Hier entsteht ein Interface für Infinity V RP, um die Arbeit für Supporter an der DB zu erleichtern!',
    ];


    $user_count = DB::connection('mysql_fivem')->table('users')->count();
    $user_count_card_widget_definition = [
        'type'       => 'card',
        'class'      => 'card bg-dark text-white',
        'content'    => [
            'header' => 'Anzahl der Userdatensätze',
            'body'   => $user_count,
        ]
    ];
    Widget::add($user_count_card_widget_definition)->to('after_content');

    $vehicle_count = DB::connection('mysql_fivem')->table('owned_vehicles')->count();
    $vehicle_count_card_widget_definition = [
        'type'       => 'card',
        'class'      => 'card bg-dark text-white',
        'content'    => [
            'header' => 'Anzahl der Fahrzeuge',
            'body'   => $vehicle_count,
        ]
    ];
    Widget::add($vehicle_count_card_widget_definition)->to('after_content');

    $instagram_posts = DB::connection('mysql_fivem')->table('instagram_posts')->count();
    $instagram_post_count_card_widget_definition = [
        'type'       => 'card',
        'class'      => 'card bg-dark text-white',
        'content'    => [
            'header' => 'Anzahl der Instagram Posts',
            'body'   => $instagram_posts,
        ]
    ];
    Widget::add($instagram_post_count_card_widget_definition)->to('after_content');

@endphp

@section('content')
@endsection
