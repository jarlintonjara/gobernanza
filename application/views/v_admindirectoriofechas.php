<!-- head -->
   <?php include "html/head.php" ?> 
       <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">
        <!-- Theme CSS -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin-tools/admin-forms/css/admin-forms.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/plugins/fancytree/skin-win8/ui.fancytree.min.css">

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
        <div style="height: 5%;">
          
        </div>
        <h3>Directorio</h3>
        <h4>Fechas</h4>
          <div style="text-align: center;">
                <button type="submit" class="btn btn-primary">Agregar Fecha</button>
                <label for="datetimepicker2" class="field prepend-picker-icon ">
                  <input type="text" id="datetimepicker2" name="datetimepicker2" class="gui-input form-control" placeholder="Seleccione Fecha">
                </label
          </div>
          <div>
                        <div class="panel-body bg-light">
                            <h5 class="text-muted mtn"> Listado de Fechas</h5>
                            <div id="tree5" class="fancytree-radio" style="text-align: left;">
                                <ul id="treeData" style="display: none;">
                                    <li id="5.7" class="folder expanded">Lunes, 14 de Noviembre 2015
                                        <ul>
                                            <li id="5.8">Carpetas
                                                <ul>
                                                    <li id="5.81">Archivos </li>
                                                    <li id="5.82">Archivos </li>
                                                </ul>
                                            </li>
                                            <li id="5.9">Carpetas
                                                <ul>
                                                    <li id="5.91">Archivos </li>
                                                    <li id="5.92">Archivos </li>
                                                    <li id="5.93">Archivos </li>
                                                    <li id="5.94">Archivos </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
<!--                                     <li id="5.0">Archivos </li>
                                    <li id="5.1">Archivos </li> -->
                                    <li id="5.2" class="folder">Jueves, 25 de Noviembre 2015
                                        <ul>
                                            <li id="5.3">Carpetas
                                                <ul>
                                                    <li id="5.31">Archivos </li>
                                                    <li id="5.32">Archivos </li>
                                                    <li id="5.33">Archivos </li>
                                                </ul>
                                            </li>
                                            <li id="5.4">Carpetas
                                                <ul>
                                                    <li id="5.41">Archivos </li>
                                                    <li id="5.42">Archivos </li>
                                                </ul>
                                            </li>
                                            <li id="5.5">Archivos </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
          </div>      
     	<!-- end -->
    </div>
  </div>
  </div>
<!-- end cuerpo -->

<!-- footer -->
  <?php include "html/footer.php" ?>
  <script type="text/javascript" src="<?php echo base_url() ?>vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Forms Javascript -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin-tools/admin-forms/js/jquery-tcm-month.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin-tools/admin-forms/js/jquery-ui-timepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin-tools/admin-forms/js/jquery-ui-touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin-tools/admin-forms/js/jquery.spectrum.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin-tools/admin-forms/js/jquery.stepper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin-tools/admin-forms/js/datepicker.js"></script>
    <!-- Fancytree Plugin -->
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/plugins/fancytree/jquery.fancytree-all.min.js"></script>

    <!-- Fancytree Addons - Childcounter -->
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/plugins/fancytree/extensions/jquery.fancytree.childcounter.js"></script>

    <!-- Fancytree Addons - Childcounter -->
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/plugins/fancytree/extensions/jquery.fancytree.columnview.js"></script>

    <!-- Fancytree Addons - Drag and Drop -->
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/plugins/fancytree/extensions/jquery.fancytree.dnd.js"></script>

    <!-- Fancytree Addons - Inline Edit -->
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/plugins/fancytree/extensions/jquery.fancytree.edit.js"></script>

    <!-- Fancytree Addons - Inline Edit -->
    <script type="text/javascript" src="<?php echo base_url() ?>vendor/plugins/fancytree/extensions/jquery.fancytree.filter.js"></script>
    <!-- Theme Javascript -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/demo.js"></script>

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
                offset: -145
            });

            // Form Switcher
            $('#form-switcher > button').on('click', function() {
                var btnData = $(this).data('form-layout');
                var btnActive = $('#form-elements-pane .admin-form.active');

                // Remove any existing animations and then fade current form out
                btnActive.removeClass('slideInUp').addClass('animated fadeOutRight animated-shorter');
                // When above exit animation ends remove leftover classes and animate the new form in
                btnActive.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                    btnActive.removeClass('active fadeOutRight animated-shorter');
                    $('#' + btnData).addClass('active animated slideInUp animated-shorter')
                });
            });

            // Cache some dom elements
            var adminForm = $('.admin-form');
            var options = adminForm.find('.option');
            var switches = adminForm.find('.switch');
            var buttons = adminForm.find('.button');


            var Panel = $('#p1');

            // Form Skin Switcher
            $('#skin-switcher a').on('click', function() {
                var btnData = $(this).data('form-skin');

                $('#skin-switcher a').removeClass('item-active');
                $(this).addClass('item-active')

                adminForm.each(function(i, e) {
                    var skins = 'theme-primary theme-info theme-success theme-warning theme-danger theme-alert theme-system theme-dark'
                    var panelSkins = 'panel-primary panel-info panel-success panel-warning panel-danger panel-alert panel-system panel-dark'
                    $(e).removeClass(skins).addClass('theme-' + btnData);
                    Panel.removeClass(panelSkins).addClass('panel-' + btnData);
                });

                $(options).each(function(i, e) {
                    if ($(e).hasClass('block')) {
                        $(e).removeClass().addClass('block mt15 option option-' + btnData);
                    } else {
                        $(e).removeClass().addClass('option option-' + btnData);
                    }
                });


                // var sliders = $('.ui-timepicker-div', adminForm).find('.ui-slider');
                $('body').find('.ui-slider').each(function(i, e) {
                    $(e).addClass('slider-primary');
                });

                $(switches).each(function(i, ele) {
                    if ($(ele).hasClass('switch-round')) {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-round switch-' + btnData);
                        } else {
                            $(ele).removeClass().addClass('switch switch-round switch-' + btnData);
                        }
                    } else {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-' + btnData);
                        } else {
                            $(ele).removeClass().addClass('switch switch-' + btnData);
                        }
                    }

                });
                buttons.removeClass().addClass('button btn-' + btnData);
            });


            setTimeout(function() {
                adminForm.addClass('theme-primary');
                Panel.addClass('panel-primary');

                $(options).each(function(i, e) {
                    if ($(e).hasClass('block')) {
                        $(e).removeClass().addClass('block mt15 option option-primary');
                    } else {
                        $(e).removeClass().addClass('option option-primary');
                    }
                });

                // var sliders = $('.ui-timepicker-div', adminForm).find('.ui-slider');
                $('body').find('.ui-slider').each(function(i, e) {
                    $(e).addClass('slider-primary');
                });

                $(switches).each(function(i, ele) {
                    if ($(ele).hasClass('switch-round')) {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-round switch-primary');
                        } else {
                            $(ele).removeClass().addClass('switch switch-round switch-primary');
                        }
                    } else {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-primary');
                        } else {
                            $(ele).removeClass().addClass('switch switch-primary');
                        }
                    }
                });
                buttons.removeClass().addClass('button btn-primary');
            }, 2200);

            /* @time picker
             ------------------------------------------------------------------ */
            $('.inline-tp').timepicker();

            $('#timepicker1').timepicker({
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#timepicker2').timepicker({
                showOn: 'both',
                buttonText: '<i class="fa fa-clock-o"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#timepicker3').timepicker({
                showOn: 'both',
                disabled: true,
                buttonText: '<i class="fa fa-clock-o"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });


            /* @date time picker
            ------------------------------------------------------------------ */
            $('#datetimepicker1').datetimepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#datetimepicker2').datetimepicker({

                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#datetimepicker3').datetimepicker({
                showOn: 'both',
                buttonText: '<i class="fa fa-calendar-o"></i>',
                disabled: true,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('.inline-dtp').datetimepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
            });


            /* @date picker
            ------------------------------------------------------------------ */
            $("#datepicker1").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });

            $('#datepicker2').datepicker({
                numberOfMonths: 3,
                showOn: 'both',
                buttonText: '<i class="fa fa-calendar-o"></i>',
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#datepicker3').datepicker({
                showOn: 'both',
                disabled: true,
                buttonText: '<i class="fa fa-calendar-o"></i>',
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('.inline-dp').datepicker({
                numberOfMonths: 1,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });

            /* @month picker
            ------------------------------------------------------------------ */
            $("#monthpicker1").monthpicker({
                changeYear: false,
                stepYears: 1,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: true,
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $("#monthpicker2").monthpicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showOn: 'both',
                buttonText: '<i class="fa fa-calendar-o"></i>',
                showButtonPanel: true,
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $("#monthpicker3").monthpicker({
                changeYear: false,
                stepYears: 1,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showOn: 'both',
                buttonText: '<i class="fa fa-calendar-o"></i>',
                showButtonPanel: true,
                disabled: true,
            });

            $('.inline-mp').monthpicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });

            /* @color picker
            ------------------------------------------------------------------ */

            var cPicker1 = $("#colorpicker1"),
                cPicker2 = $("#colorpicker2");

            var cContainer1 = cPicker1.parents('.sfcolor').parent(),
                cContainer2 = cPicker2.parents('.sfcolor').parent();

            $(cContainer1).add(cContainer2).addClass('posr');

            $("#colorpicker1").spectrum({
                color: bgInfo,
                appendTo: cContainer1,
                containerClassName: 'sp-left'
            });

            $("#colorpicker2").spectrum({
                color: bgPrimary,
                appendTo: cContainer2,
                containerClassName: 'sp-left',
                showInput: true,
                showPalette: true,
                palette: [
                    [bgPrimary, bgSuccess, bgInfo],
                    [bgWarning, bgDanger, bgAlert],
                    [bgSystem, bgDark, bgBlack]
                ]
            });

            $("#colorpicker3").spectrum({
                color: bgLightDr,
                showInput: true
            });

            $(".inline-cp").spectrum({
                color: bgInfo,
                showInput: true,
                showPalette: true,
                chooseText: "Select Color",
                flat: true,
                palette: [
                    [bgPrimary, bgSuccess, bgInfo, bgWarning,
                        bgDanger, bgAlert, bgSystem, bgDark,
                        bgSystem, bgDark, bgBlack
                    ]
                ]
            });

            $("#colorpicker1, #colorpicker2, #colorpicker3, .inline-cp").show();

            /* @numeric stepper
            ------------------------------------------------------------------ */
            $('#stepper3').stepper({
                wheel_step: 0.1,
                arrow_step: 0.2
            });

            $('#stepper4').stepper({
                UI: false,
                allowWheel: false
            });

            /* @ui slider
            ------------------------------------------------------------------ */
            $("#slider1").slider({
                range: "min",
                min: 0,
                max: 100,
                value: 30
            });

            $("#slider2").slider({
                range: true,
                values: [27, 63]
            });
            $("#slider3").slider({
                range: true,
                values: [7, 53]
            });

            $("#slider4").slider({
                range: true,
                values: [57, 93]
            });

            $("#slider5").slider({
                range: true,
                values: [37, 63]
            });


        });
    </script>

       <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // // Init Theme Core    
            // Demo.init();


            // Init FancyTree - Default
            $("#tree").fancytree({
                icons: false, // Display node icons.
                clickFolderMode: 2, // 1:activate, 2:expand, 3:activate and expand, 4:activate (dblclick expands)
            });

            // Init FancyTree - With Icons
            $("#tree2").fancytree({
                clickFolderMode: 2, // 1:activate, 2:expand, 3:activate and expand, 4:activate (dblclick expands)
            });

            // Init FancyTree - With Checkboxes
            $("#tree3").fancytree({
                selectMode: 3,
                checkbox: true, // Show checkboxes.
                clickFolderMode: 2, // 1:activate, 2:expand, 3:activate and expand, 4:activate (dblclick expands)
            });

            // Init FancyTree - With Checkboxes
            $("#tree4").fancytree({
                selectMode: 1,
                checkbox: true, // Show checkboxes Class added to tree html to convert to radios ".fancytree-radio"
                clickFolderMode: 2, // 1:activate, 2:expand, 3:activate and expand, 4:activate (dblclick expands)
            });

            // Init FancyTree - With Childcounter Extension
            $("#tree5").fancytree({
                extensions: ["childcounter"],
                childcounter: {
                    deep: true,
                    hideZeros: true,
                    hideExpanded: true
                },
            });

            // Attach the fancytree widget to an existing <div id="tree"> element
            // and pass the tree options as an argument to the fancytree() function:
            $("#columnview").fancytree({
                extensions: ["columnview"],
                checkbox: true,
                source: {
                    url: "vendor/plugins/fancytree/ajax-tree-plain2.json"
                },
                lazyLoad: function(event, data) {
                    data.result = {
                        url: "vendor/plugins/fancytree/ajax-sub2.json"
                    };
                },
                activate: function(event, data) {
                    $("td#preview").text("activate " + data.node);
                },
                select: function(event, data) {
                    // create a tag, when node is selected
                    var node = data.node;
                    $("span#tag-" + node.key).remove();
                    if (node.selected) {
                        $("<span>", {
                                id: "tag-" + node.key,
                                text: node.title,
                                "class": "selTag"
                            })
                            .data("key", node.key)
                            .appendTo($("td#tags"));
                    }
                }
            });

            $("#tree6").fancytree({
                extensions: ["dnd", "edit"],
                // titlesTabbable: true,
                source: {
                    url: "vendor/plugins/fancytree/ajax-tree-plain.json"
                },
                dnd: {
                    autoExpandMS: 400,
                    focusOnClick: true,
                    preventVoidMoves: true, // Prevent dropping nodes 'before self', etc.
                    preventRecursiveMoves: true, // Prevent dropping nodes on own descendants
                    dragStart: function(node, data) {
                        /** This function MUST be defined to enable dragging for the tree.
                         *  Return false to cancel dragging of node.
                         */
                        return true;
                    },
                    dragEnter: function(node, data) {
                        /** data.otherNode may be null for non-fancytree droppables.
                         *  Return false to disallow dropping on node. In this case
                         *  dragOver and dragLeave are not called.
                         *  Return 'over', 'before, or 'after' to force a hitMode.
                         *  Return ['before', 'after'] to restrict available hitModes.
                         *  Any other return value will calc the hitMode from the cursor position.
                         */
                        // Prevent dropping a parent below another parent (only sort
                        // nodes under the same parent)
                        /*           if(node.parent !== data.otherNode.parent){
                return false;
              }
              // Don't allow dropping *over* a node (would create a child)
              return ["before", "after"];
    */
                        return true;
                    },
                    dragDrop: function(node, data) {
                        /** This function MUST be defined to enable dropping of items on
                         *  the tree.
                         */
                        data.otherNode.moveTo(node, data.hitMode);
                    }
                },
                activate: function(event, data) {
                    //        alert("activate " + data.node);
                },
                lazyLoad: function(event, data) {
                    data.result = {
                        url: "ajax-sub2.json"
                    }
                }
            });


            $("#tree7").fancytree({
                extensions: ["edit"],
                source: {
                    url: "vendor/plugins/fancytree/ajax-tree-plain.json"
                },
                lazyLoad: function(event, data) {
                    data.result = {
                        url: "ajax-sub2.json",
                        debugDelay: 1000
                    };
                },
                edit: {
                    triggerStart: ["f2", "dblclick", "shift+click", "mac+enter"],
                    beforeEdit: function(event, data) {
                        // Return false to prevent edit mode
                    },
                    edit: function(event, data) {
                        // Editor was opened (available as data.input)
                    },
                    beforeClose: function(event, data) {
                        // Return false to prevent cancel/save (data.input is available)
                    },
                    save: function(event, data) {
                        // Save data.input.val() or return false to keep editor open
                        console.log("save...", this, data);
                        // Simulate to start a slow ajax request...
                        setTimeout(function() {
                            $(data.node.span).removeClass("pending");
                            // Let's pretend the server returned a slightly modified
                            // title:
                            data.node.setTitle(data.node.title + "!");
                        }, 2000);
                        // We return true, so ext-edit will set the current user input
                        // as title
                        return true;
                    },
                    close: function(event, data) {
                        // Editor was removed
                        if (data.save) {
                            // Since we started an async request, mark the node as preliminary
                            $(data.node.span).addClass("pending");
                        }
                    }
                }
            });

            // Attach the fancytree widget to an existing <div id="tree"> element
            // and pass the tree options as an argument to the fancytree() function:
            $("#tree8").fancytree({
                extensions: ["filter"],
                quicksearch: true,
                source: {
                    url: "vendor/plugins/fancytree/ajax-tree-local.json"
                },
                filter: {
                    mode: "hide",
                    autoApply: true
                },
                activate: function(event, data) {
                    //        alert("activate " + data.node);
                },
                lazyLoad: function(event, data) {
                        data.result = {
                            url: "vendor/plugins/fancytree/ajax-sub2.json"
                        }
                    }
                    // }).on("keydown", function(e){
                    //   var c = String.fromCharCode(e.which);
                    //   if( c === "F" && e.ctrlKey ) {
                    //     $("input[name=search]").focus();
                    //   }
            });
            var tree = $("#tree8").fancytree("getTree");
            /*
             * Event handlers for our little demo interface
             */
            $("input[name=search]").keyup(function(e) {
                var n,
                    leavesOnly = $("#leavesOnly").is(":checked"),
                    match = $(this).val();

                if (e && e.which === $.ui.keyCode.ESCAPE || $.trim(match) === "") {
                    $("button#btnResetSearch").click();
                    return;
                }
                if ($("#regex").is(":checked")) {
                    // Pass function to perform match
                    n = tree.filterNodes(function(node) {
                        return new RegExp(match, "i").test(node.title);
                    }, leavesOnly);
                } else {
                    // Pass a string to perform case insensitive matching
                    n = tree.filterNodes(match, leavesOnly);
                }
                $("button#btnResetSearch").attr("disabled", false);
                $("span#matches").text("(" + n + " matches)");
            });

            $("button#btnResetSearch").click(function(e) {
                $("input[name=search]").val("");
                $("span#matches").text("");
                tree.clearFilter();
            }).attr("disabled", true);

            tree.options.filter.mode = $("input#hideMode").is(":checked") ? "hide" : "dimm";
            tree.clearFilter();

            $("input#hideMode").change(function(e) {
                tree.options.filter.mode = $(this).is(":checked") ? "hide" : "dimm";
                tree.clearFilter();
                $("input[name=search]").keyup();
            });
            $("input#leavesOnly").change(function(e) {
                // tree.options.filter.leavesOnly = $(this).is(":checked");
                tree.clearFilter();
                $("input[name=search]").keyup();
            });
            $("input#regex").change(function(e) {
                tree.clearFilter();
                $("input[name=search]").keyup();
            });



            // Init custom page animation
            setTimeout(function() {
                $('.custom-nav-animation li').each(function(i, e) {
                    var This = $(this);
                    var timer = setTimeout(function() {
                        This.addClass('animated zoomIn');
                    }, 100 * i);
                });
            }, 600);


            // Init tray navigation smooth scroll
            $('.tray-nav a').smoothScroll({
                offset: -145
            });




        });
    </script>
<!-- end footer -->
</body>
</html>