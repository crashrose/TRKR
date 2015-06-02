<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/trkr.css">
<link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>

@if ($title != 'Home')
<link rel="stylesheet" href="http://dimsemenov-static.s3.amazonaws.com/dist/magnific-popup.css"> 

<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.0/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="http://imagesloaded.desandro.com/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="http://dimsemenov-static.s3.amazonaws.com/dist/jquery.magnific-popup.min.js"></script>
@endif


@if ($title === 'Comedy')
	<script src='js/moment.min.js' type='text/javascript'></script>
	<script src='js/fullcalendar.js' type='text/javascript'></script>
	<script src='js/gcal.js' type='text/javascript'></script>
	<link rel='stylesheet' type='text/css' href='css/fullcalendar.css' />
	<script type='text/javascript'>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                googleCalendarApiKey: 'AIzaSyB_JqzGDubLKBUqYE8EhNHYJgl3wF37g-c',
                events: {
                    googleCalendarId: 'ril2tvk25c2kq2pkipenarq9oc@group.calendar.google.com'
                }
            });
        });
    </script>
@elseif ($title === 'Peg Jumping Game')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src='js/peg_jumping_game.js' type='text/javascript'></script>
    <link rel='stylesheet' type='text/css' href='css/peg_jumping_game.css' />
@endif

<script src="js/main.js"></script>