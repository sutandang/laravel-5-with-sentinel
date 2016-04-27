<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <title>Makan Diantar | Dashboard</title>
    <meta name="viewport" content="width=device-width">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic" rel="stylesheet" type="text/css">
    
    {!! HTML::style("assets/dist/styles/vendor.css") !!}
    
    <!-- Dev - Use this stylesheets while in development -->
    {!! HTML::style("assets/.tmp/styles/main.css") !!}

    <!-- Dist - Use this stylesheets when you ready to deploy -->
    <!-- {!! HTML::style("assets/dist/styles/main.css") !!} -->

</head>
<body>
    <div class="content-wrapper fixed-header fixed-sidebar">
        
        @include('admin/layout/menu')
        
        <div class="view-wrapper clearfix">
            @include('admin/layout/header')

            @yield('content')
        </div>

        @include('admin/layout/footer')

    </div>

    <script src="{!! url('assets/dist/scripts/vendor.js') !!}"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <script src="{!! url('assets/dist/scripts/main.js') !!}"></script>

    <!-- dynamic input -->
    <script>
        $(function()
        {
            $(document).on('click', '.btn-add', function(e)
            {
                e.preventDefault();

                var controlForm = $('.controls'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-minus"></span>');

                controlForm.find('.entry:not(:first) label')
                    .html('');
            }).on('click', '.btn-remove', function(e)
            {
            $(this).parents('.entry:first').remove();

            e.preventDefault();
            return false;
          });

        });

        $(document).ready(function() { 
          $( ".controls .dynamic.control-label" ).first().html("Gallery");
          $( ".controls .btn-remove" ).last().attr("class", "btn btn-success btn-add");
          $( ".controls .btn-add span" ).last().attr("class", "fa fa-plus");
        });

    </script>

    <!-- show/hide featured image -->
    <script>

        $(function() {
            $(document).on('change','#featured-image' , function(){ 
                readURL(this);
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function (e) {
                        var $imgContainer = $(input).siblings('figure');
                        $imgContainer.children('img').attr({'src': e.target.result, 'style': 'width: 100%'});
                    };
                    
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });

    </script>

    <!-- delete gallery item -->
    <script>

        $(function() {
            $('.delete-gallery-item').on('click', function(){ 
                var path = $(this).attr('data-url').toString();
                var filename = $(this).attr('data-filename');
                console.log(path);
                console.log(filename);
                $.ajax({
                  url: path,
                  dataType: 'json',
                  cache: false,
                  success: function(data){
                    $(this).closest('.col-md-4').css('display', 'none');
                    console.log(data);
                  }.bind(this),
                  error: function(xhr, status, err) {
                    console.error(status, err.toString());
                  }.bind(this)
                });
            });
        });

    </script>

    <!-- delete modal -->
    <script>
        /*$(function()
        {
            var $deleteTrigger = $('#delete-trigger'),
                $deleteConfirm = $('#delete-confirm'),
                path = $deleteTrigger.attr('data-url'),
                id = $deleteTrigger.attr('data-id'),
                passDeletePath = function() {
                    $deleteConfirm.attr('href', path);
                };

            $deleteTrigger.on('click', passDeletePath);
        });*/
    </script>
    
    </body>
</html>
