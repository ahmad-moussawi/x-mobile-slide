<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=1024" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <title>Mobile growth | Ahmad Moussawi</title>
        <meta name="description" content="Mobile Growth Presentation, Mobile Information System, Dr. Bilal Said, built with impress.js" />
        <meta name="author" content="Ahmad Moussawi" />
        <link href="assets/css/impress-demo.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="assets/css/skin/minimalist.css" />
        <link rel="shortcut icon" href="favicon.png" />
        <style>.screen{display: none;} .note{font-size:14px;color: #222;}</style>
        <style media="screen" type="text/css">
            .screen{display: block;}
        </style>
    </head>
    <body class="impress-not-supported">

        <!--
            For example this fallback message is only visible when there is `impress-not-supported` class on body.
        -->
        <div class="fallback-message">
            <p>Your browser <b>doesn't support the features required</b>, so you are presented with a simplified version of this presentation.</p>
            <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
        </div>

        <!--
            
            Now that's the core element used by impress.js.
            
            That's the wrapper for your presentation steps. In this element all the impress.js magic happens.
            It doesn't have to be a `<div>`. Only `id` is important here as that's how the script find it.
            
            You probably won't need it now, but there are some configuration options that can be set on this element.
            
            To change the duration of the transition between slides use `data-transition-duration="2000"` giving it
            a number of ms. It defaults to 1000 (1s).
            
            You can also control the perspective with `data-perspective="500"` giving it a number of pixels.
            It defaults to 1000. You can set it to 0 if you don't want any 3D effects.
            If you are willing to change this value make sure you understand how CSS perspective works:
            https://developer.mozilla.org/en/CSS/perspective
            
            But as I said, you won't need it for now, so don't worry - there are some simple but interesing things
            right around the corner of this tag ;)
            
        -->
        <div id="impress">

            <!--
                
                Here is where interesting thing start to happen.
                
                Each step of the presentation should be an element inside the `#impress` with a class name
                of `step`. These step elements are positioned, rotated and scaled by impress.js, and
                the 'camera' shows them on each step of the presentation.
                
                Positioning information is passed through data attributes.
                
                In the example below we only specify x and y position of the step element with `data-x="-1000"`
                and `data-y="-1500` attributes. This means that **the center** of the element (yes, the center)
                will be positioned in point x = -1000px and y = -1500px of the presentation 'canvas'.
                
                It will not be rotated or scaled.
                
            -->

            <div id="intro" class="step" data-x="-2800" data-y="0" data-z="0" data-rotate-y="30">
                <q class="title" style="margin-bottom: 5px;font-size: 70px;">Mobile <span style="color:#064B06">Growth</span></q>
                <div id="introslides" class="photoslides" style="z-index:1">
                    <img src="assets/img/mobiles/mobile(20).png" />
                </div>
                <h3 class="instructor">Mobile Information System by Dr <b>Bilal Said</b></h3>
                <div style="clear:both"></div>
            </div>


            <!--    <div id="intro2" class="step" data-x="-1800" data-y="0" data-z="1000">-->
            <div id="intro2" class="step" data-x="-2800" data-y="0" data-z="1000">

                <p>Mobile technology <span style="color: #0853D8;font-size: 130%;">EVOLUTION</span></p>

                <div class="photoslides" style="z-index:1">
                    <?php for ($i = 1; $i < 15; $i++): ?>
                        <img src="assets/img/mobiles/p(<?php echo $i ?>).jpg" />
                    <?php endfor ?>
                    <?php for ($i = 18; $i < 22; $i++): ?>
                        <img src="assets/img/mobiles/mobile(<?php echo $i ?>).png" />
                    <?php endfor ?>
                </div>

                <div class="screen note">
                    This is a note :) and will not be displayed on projector
                </div>

            </div>
            <!--
                The `id` attribute of the step element is used to identify it in the URL, but it's optional.
                If it is not defined, it will get a default value of `step-N` where N is a number of slide.
                
                So in the example below it'll be `step-2`.
                
                The hash part of the url when this step is active will be `#/step-2`.
                
                You can also use `#step-2` in a link, to point directly to this particular step.
                
                Please note, that while `#/step-2` (with slash) would also work in a link it's not recommended.
                Using classic `id`-based links like `#step-2` makes these links usable also in fallback mode.
                
            -->
            <div id="popularity" class="step" data-x="0" data-y="0">
                <q>
                    the popularity of <strong style="font-size:120%;color:#e00">browsing</strong> and <strong style="font-size:120%;color:#e00">buying</strong> through a <strong>mobile</strong> has almost <strong>doubled</strong> in recent years as consumer.
                </q>
                <p style="margin-top: 30px;text-align: center;font-size: 250px;font-weight: bold;color: #EC1C1C;">X2</p>
            </div>

            <div class="step" data-x="2000" data-y="-300" data-z="-2000">
                <q><strong>Today</strong></q>
                <strong style="font-size:300%"><span class="strike" style="text-decoration: line-through;color: #CACACA;">54%</span><span style="color:#26B40B">78%</span></strong> of smartphone owners are using their phone to <span style="font-size:130%;color:red">shop</span>, whilst 
                <strong style="font-size:300%;color:#008BF8">38%</strong> have already <span style="font-size:130%;color:red">purchased</span> something through their device.
            </div>

            <div id="buying-online" class="step" data-x="-2000" data-y="-1000" data-z="3000">
                <img src="assets/img/charts/c(5).jpg" alt="">
            </div>


            <div id="chart-demographic" class="step" data-x="-2000" data-y="3000" data-rotate="45" data-scale="1">
                <div id="container-demographic" style="width: 1200px; height: 600px; margin: 0 auto"></div>
            </div>


            <div id="video" class="step" data-x="2000" data-y="5000" data-z="13000" data-rotate="45" data-scale="1.3" style="opacity: 0.9;">
                <!-- the player -->
                <div class="flowplayer" data-swf="assets/video/flowplayer.swf">
                    <video>
                        <source type="video/flv" src="assets/video/video.flv"/>
                        <!-- <source type="video/mp4" src="http://stream.flowplayer.org/bauhaus/624x260.mp4"/>
                        <source type="video/ogv" src="http://stream.flowplayer.org/bauhaus/624x260.ogv"/> -->
                    </video>
                </div>
            </div>

            <!--
                
                This is an example of step element being scaled.
                
                Again, we use a `data-` attribute, this time it's `data-scale="4"`, so it means that this
                element will be 4 times larger than the others.
                From presentation and transitions point of view it means, that it will have to be scaled
                down (4 times) to make it back to it's correct size.
                
            -->
            <div id="eric-shmidt-ceo-google" class="step" data-x="3000" data-y="6000" data-scale="1" data-z="-3000" >
                <p style="color:#5F6CFF;font-size:70%">Mobile use is growing faster than all of Google's internal predictions</p>

                <h2 style="">Schmidt noted : </h2>
                <img src="assets/img/eric-schmidt-620x409.jpg" alt="" style="float:left;margin-right: 30px;">
                <blockquote class="try" style="font-size:90%">"We look at the charts internally and it's happening <b>faster</b> than all of our predictions"</blockquote>

            </div>

            <div id="title2" class="step" data-x="4000" data-y="5000" data-scale="2" data-z="8000" >
                <span class="try">There are currently <div style="font-size:300%">6 Billion</div> mobile subscribers worldwide</span>
            </div>

            <div id="title3" class="step" data-x="5000" data-y="5000" data-scale="2" data-rotate="0"  data-z="5000" >
                <span class="try">This equals <div style="font-size:350%">87%</div> of the world’s population</span>
            </div>

            <div id="title4" class="step" data-x="7000" data-y="5000" data-scale="2"  data-z="2000" style="background:url(assets/img/china-mobile.jpg) no-repeat 0 0" >
                <span class="try" style="background: rgba(255, 255, 255, 0.6);display: block;width: 500px;float: right;padding: 15px;">China and India account for <div class="rotating" style="color:#DA5C16;font-size:300%">30%</div> of this growth</span>
            </div>


            <div id="title5" class="step" data-x="1000" data-y="1200" data-z="3000" data-rotate-y="20" >
                <img style="float:right;padding:10px;border:1px solid #eee;-webkit-transform:scale(1.5)" src="assets/img/people-web.jpg" />
                There are over 1.2 Billion people accessing the web from their mobiles
            </div>

            <div id="title6" class="step" data-x="2000" data-y="1400" data-z="3000" data-rotate-y="40" style="color: #0053E7;background: rgba(238, 238, 238, .8);">
                Over 300,000 apps have been developed in the past 3 years
            </div>

            <div id="title7" class="step" data-x="3000" data-y="1600" data-z="3000" data-rotate-y="60" style="color: #A21CA2;background-color: rgba(235, 235, 235, 0.8);">
                <p style="font-size:70%;text-align: center;color:#333">Eric Display is currently a <span style="font-size:150%">$17</span> billion business globally.</p>
                <p style="text-align: center;">Google's share of that is about</p> 
                <p style="font-size:200%;text-align: center;">$2.5</p> 
                <p style="text-align: center;"  >billion a year.</p>
            </div>



            <div id="adapt-or-die" class="step" data-x="4000" data-y="0" data-scale="3" data-rotate="180" data-z="-3500">
                <p style="font-size:130%;text-align: center;">Today: It’s Adapt or Die</p>
            </div>

            <div id="realcase-kodak" class="step" data-x="4000" data-y="0" data-scale="3" data-rotate="180" data-z="-7000">
                <p style="color:#F50202;">The last Kodak moment?</p>


                <div style="float:right;margin-left:20px">
                    <img style="display: block;" src="assets/img/kodak.jpg" alt=""/>
                    <a style="font-size:40%" href="http://www.economist.com/node/21542796" target="_blank">http://www.economist.com/node/21542796</a><br/>
                    <a style="font-size:40%" href="http://visitapps.com/the-billion-dollar-principle/" target="_blank">http://visitapps.com/the-billion-dollar-principle/</a>
                </div>

                <p style="font-size:50%">the company failed to remodel its business structure to match tech trends.</p>



            </div>


            <div id="mobile-changed" class="step" data-x="4000" data-y="3000" data-scale="3" data-rotate="180" data-z="-3500">
                <p style="font-size:130%;text-align: center;">Mobile has already changed the way we live</p>
            </div>

            <!--
                This element introduces rotation.
                Notation shouldn't be a surprise. We use `data-rotate="90"` attribute, meaning that this
                element should be rotated by 90 degrees clockwise.
            -->


            <div id="big" class="step" data-x="3500" data-y="2100" data-rotate="180" data-scale="6" style="background-color:rgba(255,255,255,.8)">
                <img src="assets/img/iphone-slide.png" alt="" width="40%" style="float:left"/>
                <p>Even you can watch this presentation on <b>mobile</b> <!-- <span class="thoughts">Presentation on</span> --></p>
                <p style="font-size:80%;color:#f00;margin-top:15px"> ma tsad2o :p</p>
            </div>

            <!--
                And now it gets really exciting! We move into third dimension!
                Along with `data-x` and `data-y`, you can define the position on third (Z) axis, with
                `data-z`. In the example below we use `data-z="-3000"` meaning that element should be
                positioned far away from us (by 3000px).
            -->
            <div id="github" class="step" data-x="2825" data-y="2325" data-z="-3000" data-rotate="300" data-scale="1">
                <q>
                    <p style="text-align: center;">OR </p>
                    <p style="text-align: center;font-size: 150%;">Fork</p>
                    <p style="text-align:center"><img src="assets/img/github.jpg" alt="" style=""></p>
                    <p style="text-align: center;">the Source Code on GitHub</p>
                    <p style="text-align: center;"><a href="http://github.com/ahmad-moussawi/x-mobile-slide" style="font-size:20px;font-family:monospace;text-align:center;">http://github.com/ahmad-moussawi/x-mobile-slide !!</a> </p>
                </q>
            </div>

            <!--
                
                This step here doesn't introduce anything new when it comes to data attributes, but you
                should notice in the demo that some words of this text are being animated.
                It's a very basic CSS transition that is applied to the elements when this step element is
                reached.
                
                At the very beginning of the presentation all step elements are given the class of `future`.
                It means that they haven't been visited yet.
                
                When the presentation moves to given step `future` is changed to `present` class name.
                That's how animation on this step works - text moves when the step has `present` class.
                
                Finally when the step is left the `present` class is removed from the element and `past`
                class is added.
                
                So basically every step element has one of three classes: `future`, `present` and `past`.
                Only one current step has the `present` class.
                
            -->
            <!-- <div id="ing" class="step" data-x="3500" data-y="-850" data-rotate="270" data-scale="6">
                <p>by <b class="positioning">positioning</b>, <b class="rotating">rotating</b> and <b class="scaling">scaling</b> them on an infinite canvas</p>
            </div>
        
            <div id="imagination" class="step" data-x="6700" data-y="-300" data-scale="6">
                <p>the only <b>limit</b> is your <b class="imagination">imagination</b></p>
            </div>
        
            <div id="source" class="step" data-x="6300" data-y="2000" data-rotate="20" data-scale="4">
                <p>want to know more?</p>
                <q><a href="http://github.com/bartaz/impress.js">use the source</a>, Luke!</q>
            </div>
        
            <div id="one-more-thing" class="step" data-x="6000" data-y="4000" data-scale="2">
                <p>one more thing...</p>
            </div>
            -->
            <!--
                
                And the last one shows full power and flexibility of impress.js.
                
                You can not only position element in 3D, but also rotate it around any axis.
                So this one here will get rotated by -40 degrees (40 degrees anticlockwise) around X axis and
                10 degrees (clockwise) around Y axis.
                
                You can of course rotate it around Z axis with `data-rotate-z` - it has exactly the same effect
                as `data-rotate` (these two are basically aliases).
                
            -->
            <div id="questions" class="step" data-x="6200" data-y="4300" data-z="10000" data-rotate="-180" data-scale="2">
                <p style="text-align:center">Questions ?</p>
            </div>

            <div id="thankyou" class="step" data-x="6200" data-y="4300" data-z="-100" data-rotate-x="-40" data-rotate-y="10" data-scale="2">

                <strong style="font-size:100px;text-align:center;display:block">Thank you !!</strong>

                <div class="mycard">
                    <div class="cardname">ahmad<span style="color:#3B75A2;">moussawi</span></div>
                    <a href="http://ahmadmoussawi.com">http://ahmadmoussawi.com</a><br/>
                    <a href="http://github.com/ahmad-moussawi">http://github.com/ahmad-moussawi</a><br/>
                    <a href="http://twitter.com/ahmadmuzavi">http://twitter.com/ahmadmuzavi</a><br/>
                    <a href="http://stackoverflow.com/users/1104402/ahmad">http://stackoverflow.com/users/1104402/ahmad</a><br/>
                </div>
            </div>
            

            <!--
                
                So to make a summary of all the possible attributes used to position presentation steps, we have:
                
                * `data-x`, `data-y`, `data-z` - they define the position of **the center** of step element on
                    the canvas in pixels; their default value is 0;
                * `data-rotate-x`, `data-rotate-y`, 'data-rotate-z`, `data-rotate` - they define the rotation of
                    the element around given axis in degrees; their default value is 0; `data-rotate` and `data-rotate-z`
                    are exactly the same;
                * `data-scale` - defines the scale of step element; default value is 1
                
                These values are used by impress.js in CSS transformation functions, so for more information consult
                CSS transfrom docs: https://developer.mozilla.org/en/CSS/transform
                
            -->
            <div id="overview" class="step" data-x="3000" data-y="1500" data-scale="10">
            </div>

        </div>

        <!--
            
            Hint is not related to impress.js in any way.
            
            But it can show you how to use impress.js features in creative way.
            
            When the presentation step is shown (selected) its element gets the class of "active" and the body element
            gets the class based on active step id `impress-on-ID` (where ID is the step's id)... It may not be
            so clear because of all these "ids" in previous sentence, so for example when the first step (the one with
            the id of `bored`) is active, body element gets a class of `impress-on-bored`.
            
            This class is used by this hint below. Check CSS file to see how it's shown with delayed CSS animation when
            the first step of presentation is visible for a couple of seconds.
            
            ...
            
            And when it comes to this piece of JavaScript below ... kids, don't do this at home ;)
            It's just a quick and dirty workaround to get different hint text for touch devices.
            In a real world it should be at least placed in separate JS file ... and the touch content should be
            probably just hidden somewhere in HTML - not hard-coded in the script.
            
            Just sayin' ;)
            
        -->
        <div class="hint">
            <p>Use a spacebar or arrow keys to navigate</p>
        </div>
        <script>
            if ("ontouchstart" in document.documentElement) { 
                document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
            }
        </script>

        <!--
            
            Last, but not least.
            
            To make all described above really work, you need to include impress.js in the page.
            I strongly encourage to minify it first.
            
            In here I just include full source of the script to make it more readable.
            
            You also need to call a `impress().init()` function to initialize impress.js presentation.
            And you should do it in the end of your document. Not only because it's a good practice, but also
            because it should be done when the whole document is ready.
            Of course you can wrap it in any kind of "DOM ready" event, but I was too lazy to do so ;)
            
        -->
        <script src="assets/js/impress.js"></script>
        <script src="assets/js/jquery-1.7.1.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/flowplayer.min.js"></script>
        <script src="assets/js/highcharts/highcharts.js"></script>
        <script src="assets/js/jquery.cycle.all.js"></script>
        <script>
            impress().init();
            var chartDemographic = false,
            chartOwnership = false;
            $('.photoslides').cycle({
                fx: 'fade',
                timeout: 200,
                speed: 300,
                randomizeEffects: true
            })
            
            var chartOptions = {chart: {
                            renderTo: 'container-demographic',
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            events: {
                                load: function() {}
                            }
                        },
                        title: {
                            text: 'Smartphones demographics 2012'
                        },
                        tooltip: {
                            formatter: function() {
                                //return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                            }
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                //cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    color: '#4d4c49',
                                    connectorColor: '#000000',
                                    // fontSize:'50px',
                                    formatter: function() {
                                        //console.log(this.point)
                                        return '<span style="font-size:50px"><b>' + this.point.name + '</b>: ' + this.y + ' % </span>';
                                    }
                                }
                            }
                        },
                        series: [{
                                type: 'pie',
                                name: 'Demoghraphics',
                                data: [{
                                        name: 'Female',
                                        y: 56,
                                        color: '#fe7f7f'
                                    }, {
                                        name: 'Male',
                                        //sliced: false,
                                        //selected: true,
                                        y: 44,
                                        color: '#18a4d4'
                                    }]
                            }]};

            $('.step').on('impress:stepenter', function() {
                var id = $(this).attr('id');
                
                if (id == "video") {
                    $('body').css('background-color', '#E7E7E7')
                } 
                else if (id == 'chart-demographic') {
                    if (chartDemographic) {
                        return;
                    }
                    chartDemographic = true;
                    var chart = new Highcharts.Chart(chartOptions);
                }else{
                    $('body').css('background-color', '#fff')
                }
            
            });
        </script>


        <!--
            
            The `impress()` function also gives you access to the API that controls the presentation.
            
            Just store the result of the call:
            
                var api = impress();
            
            and you will get three functions you can call:
            
                `api.init()` - initializes the presentation,
                `api.next()` - moves to next step of the presentation,
                `api.prev()` - moves to previous step of the presentation,
                `api.goto( idx | id | element, [duration] )` - moves the presentation to the step given by its index number
                        id or the DOM element; second parameter can be used to define duration of the transition in ms,
                        but it's optional - if not provided default transition duration for the presentation will be used.
            
            You can also simply call `impress()` again to get the API, so `impress().next()` is also allowed.
            Don't worry, it wont initialize the presentation again.
            
            For some example uses of this API check the last part of the source of impress.js where the API
            is used in event handlers.
            
        -->
    </body>
</html>

