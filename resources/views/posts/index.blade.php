<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>APEXLEGENDSsite</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ApexLegends野良募集・フレンド募集サイト</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->recruitment_pattern  }}
                                      {{ $post->kinds_of_machines  }}
                                      {{ $post->game_mode  }}
                                      {{ $post->game_style  }}
                                      {{ $post->rank  }}
                    <p class='body'>{{ $post->condition }}</p>
                </div>
            @endforeach
        </div>
         <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>