<?php
$track=$_GET['track'];
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        var fUtils = {
            settings: {
                /* Sizzle selectors used in the app */
                selectors: {
                    add_pl_b: '#create_pl',
                    add_pl: '#add_pl',
                    add_pl_title: '#add_pl_t',
                    add_pl_descr: '#add_pl_d',
                    add_chk_b: '#add_track',
                    add_tr_value: '#add_track_f',
                    add_tr_f: '#add_track_cont',
                    playlist: '#playlist_one',
                    tracks_list: '#tracks',
                    pl_empty: '#pl_empty',
                    all_lists: '#list',
                    pl_big_title: '#plylist_title',
                    pl_title: '#pl_title',
                    pl_description: '#pl_description',
                    sc_dialog: 'div.dialog',
                    sc_sh_cont: '#shareContent__widgetCodeField',
                    sc_share_b: '.sc-button-share',
                    domModified: false
                }, //END Sizzle selectors used in the app
                playLists: {}, //local variable for holding playlists object recieved from local storage
                current: '' //currently selected playlist
            },
            /* Getting playlists and tracks from the local storage */
            getPlayLists: function () {
                var _playlistsV = localStorage.getItem('sc_playlists') || '';
                fUtils.settings.playLists = (_playlistsV !== '') ? $.parseJSON(_playlistsV) : fUtils.settings.playLists;
                console.log( _playlistsV);
            } //END Getting playlists and tracks from the local storage
        }
    </script>
</head>
<body>

</body>
</html>