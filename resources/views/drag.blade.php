<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Draggable - Default functionality</title>
 
  <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
  <style>
  #draggable { width: 400px; height: 400px; padding: 0.5em; }
  </style>
  <script src="{{asset('assets/js/jquery1-12-4.js')}}"></script>
  <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
  <script>
  $( function() {
    $( "#draggable" ).draggable();
    $( "#draggable" ).draggable({ scroll: true });
    $( "#draggable" ).draggable({ scroll: true, scrollSensitivity: 100 });
    $( "#draggable" ).draggable({ scroll: true, scrollSpeed: 100 });
    $( "#draggable" ).resizable();
    $( "#img" ).draggable();
    $( "#img" ).draggable({ scroll: true });
    $( "#img" ).draggable({ scroll: true, scrollSensitivity: 100 });
    $( "#img" ).draggable({ scroll: true, scrollSpeed: 100 });
    $( "#img" ).resizable();
  } );
  </script>
</head>
<body>
    <img id="img"   src="{{asset('images/images.png')}}">
   <div id="draggable"  class=""> </div>
 
{{-- <div id="draggable" class="ui-widget-content">
  <p>Drag me around</p>
</div> --}}
 
 
</body>
</html>