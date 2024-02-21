<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex">
        <meta name="robots" content="noarchive">
        <meta name="robots" content="nosnippet">
        <meta name="robots" content="noodp">
        <title>RTS 1</title>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <img alt="CallOfliberty TV RTS 1" src="/CallOfLiberty.png">
                </td>
            </tr>
            <tr>
                <td>
                    <h1 style="text-align:center;color:orange">RTS 1</h1>
                    <div class="center" id="player"></div>
                    <script src="/tv/clappr/clappr.min.js"></script>
                    <script src="/tv/clappr/hlsjs-playback.js"></script>
                    <script src="/tv/clappr/audio-selector.js"></script>
                    <script src="/tv/clappr/level-selector.js"></script>
                    <script>
                        var player = new Clappr.Player({
                        plugins: [HlsjsPlayback, AudioSelector, LevelSelector],
                        parentId: '#player',
                        source: 'http://s2.callofliberty.fr/direct/RTS1/index.m3u8',
                        poster: '/tv/clappr/giphy.gif',
                        width: 700,
                        height: 394,
                        });
                        player.play();
                    </script>
                    <br>
                    <br>
                    <input style="font-size:20px;color:orange" type=button value="Retour" onclick="javascript:location.href='/tv'">
                </td>
            </tr>
        </table>
    </body>
</html>
