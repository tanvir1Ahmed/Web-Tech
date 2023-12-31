<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>this is my body.1</p>
    <p id="second">this is my body.2</p>
    <p>this is my body.3</p>
    <p>this is my body.4</p>
    <div class="wiki">
        am LucaG, a software engineer from the Milano area, Italy.
        Despite the beautiful locations in my country, rich in historic sites and monuments as well as crowded fashion
        events, my favorite locations to photograph are deserts and very high plateaus.
        I'm "on top of the world" when waiting, in silence and solitude, for the right light on wide open lands, short
        of breath because of a rarefied atmosphere but under the deep blue sky at an altitude above 4000m.

        I develop my RAW files with Adobe Lightroom and Photoshop but I'm not a fan of digital over improving. I do
        prefer a grainy, slightly out-of-focus image with a great emotional appeal rather then a plastic, sharp,
        ice-cold image.
        I've been contributing to Commons with my photographs since december 2006 when studying countries like Tibet,
        Bolivia and Lybia on Wikipedia I noticed a lack of landscape images on related pages.

        My photo gear: Canon EOS 5D Mark II, Canon 17-40 f/4L, Canon 24-105 f/4L IS, Canon 70-200 f/4L IS, Canon 50
        f/1.8, Canon 430EX flash and the essential Manfrotto Carbon Fiber Tripod with Proball Quick Release Head.
    </div>
    <button id="btn">Toggle</button>
    <div id="inp">
        <textarea name="" id="ta" cols="30" rows="10"></textarea>
    </div>

</body>
<script src="jquery-3.7.1.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<script>
    $(function () {
        console.log("We are using jquery", this);
        // $('p').click(function () {
        //     console.log("You clicked on p");
        // });
        // $('p').dblclick(function(){
        //     console.log("You double clicked on p");
        // });
        // $('p').mouseenter(function(){
        //     console.log("You entered on p");
        // });
        // $('p').mouseleave(function(){
        //     console.log("You left on p");
        // });
        // $('p').hover(function(){
        //     console.log("You hovered on p");
        // });
        $('p').on(
            {
                click: function () {
                    console.log("Thanks for clicking", this)
                },
                mouseleave: function () {
                    console.log("mouseleave");
                }
            }
        );

    });
    $('#ta').val("My name is Tanvr");
    $('.wiki').empty();
    //$('.wiki').remove();
    $('.wiki').addClass('myVlass');
    // $('.wiki').hide(1000, function()
    // {
    //     $('.wiki').show(1000);
    // });
    // $('#btn').click(function()
    // {
    //     $('.wiki').toggle(2000);
    // })
    // $('.wiki').fadeOut(1000, function () {
    //     $('.wiki').fadeIn();
    // });


    //fadeout
    //fadein
    //fadetoggle
    //fadeTO
    //silde up, slide down, slide toggle
    // $('.wiki').animate({
    //     opacity:0.5,
    //     height:'105px',
    //     width:'300px'
    // },2000);
</script>

</html>