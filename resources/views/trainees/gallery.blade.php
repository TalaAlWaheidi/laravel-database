<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>

img {
  filter: gray; /* IE6-9 */
  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
    -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    margin-bottom:20px;
}

img:hover {
  filter: none; /* IE6-9 */
  -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */

}

    </style>

</head>
<body>


    <div class="container">
        <div class="row">
            @foreach ($AcademyGallery as $name)
            <div class="col-md-6 col-sm-4 col-xs-6"><img class="img-responsive" src="{{$name}}" /></div>
        </div>
    </div>
    @endforeach

    {{-- echo "<pre>";
    print_r($AcademyGallery);
    echo "</pre>"; --}}

    {{-- @foreach ($AcademyGallery as $name)

       <img src="{{$name}}" alt="">

    @endforeach --}}



</body>
</html>
