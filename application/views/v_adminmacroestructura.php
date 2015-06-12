<!-- head -->
  <?php include "html/head.php" ?>
      <!-- Summernote CSS  -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/editors/summernote/summernote.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/editors/summernote/summernote-bs3.css">

    <!-- Markitup CSS  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/editors/markitup/skins/simple/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/editors/markitup/sets/default/style.css">

    <!-- X-editable CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/editors/xeditable/css/bootstrap-editable.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/editors/xeditable/inputs/address/address.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/editors/xeditable/inputs/typeaheadjs/lib/typeahead.js-bootstrap.css">

<!-- end head -->
<body style="background-image: none;">

<!--   header -->
  <?php include "html/header.php" ?>
<!-- /header -->

<!-- menu -->
  <?php include "html/menuadmin.php" ?>
 <!--  end menu -->

 <!-- cuerpo -->
  <div class="container">
  	<div class="cinta-cuerpo container2">
      	<!-- home -->
                                   <div class="panel mb40">
                        <div class="panel-body pn of-h" id="summer-demo">
                            <div class="summernote" style="height: 400px;">This is the <b>Summernote</b> Editor...</div>
                        </div>

                    </div>
      	<!-- endHome -->
    </div>
  </div>
<!-- end cuerpo -->

<!-- footer -->
  <?php include "html/footer.php" ?>
      <script type="text/javascript" src="<?php echo base_url() ?>vendor/editors/ckeditor/ckeditor.js"></script>

    <!-- Summernote JS -->
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/editors/summernote/summernote.js"></script>

    <!-- Markitup JS -->
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/editors/markitup/jquery.markitup.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/editors/markitup/sets/default/set.js"></script>

    <!-- Xedit JS -->
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/editors/xeditable/js/bootstrap-editable.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/editors/xeditable/inputs/address/address.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/editors/xeditable/inputs/typeaheadjs/lib/typeahead.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/editors/xeditable/inputs/typeaheadjs/typeaheadjs.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/plugins/daterange/moment.min.js"></script>

        <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // // Init Theme Core    
            // Demo.init();

            // Init custom page animation
            setTimeout(function() {
                $('.custom-nav-animation li').each(function(i, e) {
                    var This = $(this);
                    var timer = setTimeout(function() {
                        This.addClass('animated animated-short zoomIn');
                    }, 50 * i);
                });
            }, 500);

            // Init tray navigation smooth scroll
            $('.tray-nav a').smoothScroll({
                offset: -165
            });

            // Init Summernote
            $('.summernote').summernote({
                height: 255, //set editable area's height
                focus: false, //set focus editable area after Initialize summernote
                oninit: function() {},
                onChange: function(contents, $editable) {},
            });

            // Init Inline Summernote
            $('.summernote2').summernote({
                airMode: true,
                focus: false //set focus editable area after Initialize summernote            
            });


            // Turn off automatic editor initilization.
            // Used to prevent conflictions with multiple text 
            // editors being displayed on the same page.
            CKEDITOR.disableAutoInline = true;

            // Init Ckeditor
            CKEDITOR.replace('ckeditor1', {
                height: 210,
                on: {
                    instanceReady: function(evt) {
                        $('.cke').addClass('admin-skin cke-hide-bottom');
                    }
                },
            });

            // Init Inline Ckeditors
            CKEDITOR.inline('ckeditor-inline1');
            CKEDITOR.inline('ckeditor-inline2');


            // Init Markitup Editor
            $("#markitup").markItUp(mySettings);

            setTimeout(function() {
                $('body').find('.markItUpButton.preview').click();
            }, 1000);


            // Init X-editable Plugin
            function XEdit() {
                //enable / disable xedit
                $('#enable').click(function() {
                    $(this).toggleClass('active');
                    $('#user .editable').editable('toggleDisabled');
                });

                //editables 
                $('#username').editable({
                    type: 'text',
                    pk: 1,
                    name: 'username',
                    title: 'Enter username'
                });

                $('#firstname').editable({
                    validate: function(value) {
                        if ($.trim(value) == '') return 'This field is required';
                    }
                });

                $('#sex').editable({
                    prepend: "not selected",
                    source: [{
                        value: 1,
                        text: 'Male'
                    }, {
                        value: 2,
                        text: 'Female'
                    }],
                    display: function(value, sourceData) {
                        var colors = {
                                "": "gray",
                                1: "green",
                                2: "blue"
                            },
                            elem = $.grep(sourceData, function(o) {
                                return o.value == value;
                            });

                        if (elem.length) {
                            $(this).text(elem[0].text).css("color", colors[value]);
                        } else {
                            $(this).empty();
                        }
                    }
                });

                $('#status').editable();

                $('#group').editable({
                    showbuttons: false
                });

                $('#vacation').editable({
                    datepicker: {
                        todayBtn: 'linked'
                    }
                });

                $('#dob').editable();

                $('#event').editable({
                    placement: 'right',
                    combodate: {
                        firstItem: 'name'
                    }
                });

                $('#meeting_start').editable({
                    format: 'yyyy-mm-dd hh:ii',
                    viewformat: 'dd/mm/yyyy hh:ii',
                    validate: function(v) {
                        if (v && v.getDate() == 10) return 'Day cant be 10!';
                    },
                    datetimepicker: {
                        todayBtn: 'linked',
                        weekStart: 1
                    }
                });

                $('#comments').editable({
                    showbuttons: 'bottom'
                });

                $('#note').editable();
                $('#pencil').click(function(e) {
                    e.stopPropagation();
                    e.preventDefault();
                    $('#note').editable('toggle');
                });

                $('#state').editable({
                    source: ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"]
                });

                $('#state2').editable({
                    value: 'California',
                    typeahead: {
                        name: 'state',
                        local: ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"]
                    }
                });

                $('#fruits').editable({
                    pk: 1,
                    limit: 3,
                    source: [{
                        value: 1,
                        text: 'banana'
                    }, {
                        value: 2,
                        text: 'peach'
                    }, {
                        value: 3,
                        text: 'apple'
                    }, {
                        value: 4,
                        text: 'watermelon'
                    }, {
                        value: 5,
                        text: 'orange'
                    }]
                });

                $('#address').editable({
                    url: '/post',
                    value: {
                        city: "Moscow",
                        street: "Lenina",
                        building: "12"
                    },
                    validate: function(value) {
                        if (value.city == '') return 'city is required!';
                    },
                    display: function(value) {
                        if (!value) {
                            $(this).empty();
                            return;
                        }
                        var html = '<b>' + $('<div>').text(value.city).html() + '</b>, ' + $('<div>').text(value.street).html() + ' st., bld. ' + $('<div>').text(value.building).html();
                        $(this).html(html);
                    }
                });

                $('#user .editable').on('hidden', function(e, reason) {
                    if (reason === 'save' || reason === 'nochange') {
                        var $next = $(this).closest('tr').next().find('.editable');
                        if ($('#autoopen').is(':checked')) {
                            setTimeout(function() {
                                $next.editable('show');
                            }, 300);
                        } else {
                            $next.focus();
                        }
                    }
                });

            };
            XEdit();


        });
    </script>
<!-- end footer -->
</body>
</html>