$(window).load(function(){
    var emailFrame=$("#1colmail").contents();

    // alert(emailFrame);
    //FIND CTA TABLES
    var counter=1;
    emailFrame.find(".mainTable table").each(function(){ 
       
        var className=$(this).attr("class");
        // if(className=='cta1Table'){
        //     $('.ctaWrapper').append("<div class='card clearfix'><div class='accordion'><div class='accordion-section'><a class='accordion-section-title active' href='#accordion-"+counter+"'>CTA "+counter+"</a><div id='accordion-"+counter+"' class='accordion-section-content clearfix' style='display:block'><label>Background Color</label><input type='text' id='cta"+counter+"BG' class='color ctabg'/><label>Font Size</label><select id='cta"+counter+"FontSize' class='ctafontsize'><option value=''>select</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option></select><label>CTA Text</label><input type='text' id='cta"+counter+"Text' class='ctaText'/><label>Font Color</label><input type='text' id='cta"+counter+"FontColor' class='color ctaFontColor'/><label>arrow </label><select id='arrow"+counter+"Image' class='arrowImage'><option value=''>choose image</option><option value='../arrows/arrow-circle-black.png'>Black Arrow Circle</option><option value='../arrows/arrow-circle-white.png'>White Arrow Circle</option><option value='../arrows/arrow-grey.png'>Gray Arrow</option><option value='../arrows/arrow-black.png'>Black Arrow</option><option value='../arrows/arrow-white.png'>White Arrow</option></select><label>arrow width</label><input type='text' id='arrow"+counter+"Width' class='arrowWidth'/><label>arrow height</label><input type='text' id='arrow"+counter+"Height' class='arrowHeight'/></div><!--end CTA .accordion-section-content--></div><!--end CTA .accordion-section--></div><!--end CTA .accordion--></div><!--end CTA card-->");
        //     counter++; 
        // }
        if(className == 'cta'+counter+'Table') {
            $('.ctaWrapper').append("<div class='card clearfix'><div class='accordion'><div class='accordion-section'><a class='accordion-section-title' href='#accordion-"+counter+"'>CTA "+counter+"</a><div id='accordion-"+counter+"' class='accordion-section-content clearfix'><label>Background Color</label><input type='text' id='cta"+counter+"BG' class='color ctabg'/><label>Font Size</label><select id='cta"+counter+"FontSize' class='ctafontsize'><option value=''>select</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option></select><label>CTA Text</label><input type='text' id='cta"+counter+"Text' class='ctaText'/><label>Font Color</label><input type='text' id='cta"+counter+"FontColor' class='color ctaFontColor'/><label>arrow </label><select id='arrow"+counter+"Image' class='arrowImage'><option value=''>choose image</option><option value='../arrows/arrow-circle-black.png'>Black Arrow Circle</option><option value='../arrows/arrow-circle-white.png'>White Arrow Circle</option><option value='../arrows/arrow-grey.png'>Gray Arrow</option><option value='../arrows/arrow-black.png'>Black Arrow</option><option value='../arrows/arrow-white.png'>White Arrow</option></select><label>arrow width</label><input type='text' id='arrow"+counter+"Width' class='arrowWidth'/><label>arrow height</label><input type='text' id='arrow"+counter+"Height' class='arrowHeight'/></div><!--end CTA .accordion-section-content--></div><!--end CTA .accordion-section--></div><!--end CTA .accordion--></div><!--end CTA card-->");
            counter++;    
        }

    });


    //FIND MAIN IMAGES
    var imgcounter=1;
    emailFrame.find(".mainTable img").each(function(){ 
       var imageClassName=$(this).attr("class");
       var numaccordion=$('.accordion').length;
       var numaccordionplus=numaccordion+1;
       // alert(numaccordionplus);
       if(imageClassName=='bgPic'+imgcounter){
            $('.imagesWrapper').append("<div class='card clearfix'><div class='accordion'><div class='accordion-section'><a class='accordion-section-title' href='#accordion-"+numaccordionplus+"'>Main Image "+imgcounter+"</a><div id='accordion-"+numaccordionplus+"' class='accordion-section-content clearfix'><label>Select Image </label><input type='file' id='mainBgImage"+imgcounter+"' class='mainBgImage'/><label>Image width</label><input type='text' id='mainWidth"+imgcounter+"' class='mainWidth'/><label>Image height</label><input type='text' id='mainHeight"+imgcounter+"' class='mainHeight'/><label>Alt Text</label><input type='text' id='mainAlt"+imgcounter+"' class='mainAlt'/></div><!--end MAIN IMAGE .accordion-section-content--></div><!--end MAIN IMAGE .accordion-section--></div><!--end MAIN IMAGE .accordion--></div><!--end MAIN IMAGE card-->");
            imgcounter++;
       }
    });
    
    //FIND PLAIN TEXT
    var txtcounter=1;
    emailFrame.find(".mainTable span").each(function(){ 
       var textClassName=$(this).attr("class");
       var numtxtaccordion=$('.accordion').length;
       var numtxtaccordionplus=numtxtaccordion+1;
       // alert(numtxtaccordionplus);
       if(textClassName=='midsize'+txtcounter){
            $('.textWrapper').append("<div class='card clearfix'><div class='accordion'><div class='accordion-section'><a class='accordion-section-title' href='#accordion-"+numtxtaccordionplus+"'>Text "+txtcounter+"</a><div id='accordion-"+numtxtaccordionplus+"' class='accordion-section-content clearfix'><label>Text</label><input type='text' id='crText"+txtcounter+"' class='crText'/><label>Font Size</label><select id='crFontSize"+txtcounter+"' class='crFontSize'><option value=''>select</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option></select><label>Font Color</label><input type='text' id='crFontColor"+txtcounter+"' class='color crFontColor'/></div><!--end TEXT .accordion-section-content--></div><!--end TEXT .accordion-section--></div><!--end TEXT .accordion--></div><!--end TEXT card-->");
            txtcounter++;
       }
    });

    //ANIMATION FOR EACH CARD
    $('.rightSidebar .card').hide()

    $('.rightSidebar .card').each(function(i) {
       delay =(i)*100;
       setTimeout(function (div) {
                div.show().addClass('animated slideInRight');
            }, delay, $(this));
    });
    //END ANIMATION

//-------------------------------CREATIVE------------------------------------//

$('.creativeBG').change(function(event){
    
    var creativeBG=$(this).val();

    emailFrame.find(".mainTable").attr({'bgcolor':'#'+creativeBG});
});

//-------------------------------CTA------------------------------------//
    //change cta background
    $('.ctabg').change(function(event)
    {

         var ctaBGColor=$(this).val();
         
         var ctaID=$(this).attr('id');

         var ctaNumber=ctaID.match(/cta(.+)BG/);

         emailFrame.find(".cta"+ctaNumber[1]+"Table").attr({'bgcolor':'#'+ctaBGColor});
    });


    //change cta fontsize
    $('.ctafontsize').change(function(event)
    {
         var ctaFontSize=$(this).val();
         
         var ctaID=$(this).attr('id');

         var ctaNumber=ctaID.match(/cta(.+)FontSize/);

         emailFrame.find(".cta"+ctaNumber[1]).css({'font-size':ctaFontSize});
    });

   
   //change cta Text
    $('.ctaText').keyup(function(event)
    {
         var ctaText=$(this).val();

         var ctaID=$(this).attr('id');

         var ctaNumber=ctaID.match(/cta(.+)Text/);
         
         emailFrame.find(".cta"+ctaNumber[1]).html(ctaText);
    });

    //change cta font color
    $('.ctaFontColor').change(function(event)
    {
         var ctaFontColor=$(this).val();
         
         var ctaID=$(this).attr('id');

         var ctaNumber=ctaID.match(/cta(.+)FontColor/);

         emailFrame.find(".cta"+ctaNumber[1]).css({'color':'#'+ctaFontColor});
    });

    //change cta font color
    $('.arrowImage').change(function(event)
    {
         var ctaArrow=$(this).val();
         
         var ctaID=$(this).attr('id');

         var ctaNumber=ctaID.match(/arrow(.+)Image/);

         emailFrame.find(".arrow"+ctaNumber[1]).attr({src:ctaArrow});
    });


    //arrow image width
    $('.arrowWidth').keyup(function(event)
    {
         var arrowWidth=$(this).val();
         
         var ctaID=$(this).attr('id');

         var ctaNumber=ctaID.match(/arrow(.+)Width/);

         emailFrame.find(".arrow"+ctaNumber[1]).attr({'width':arrowWidth});
    });

    //arrow1 image height
    $('.arrowHeight').keyup(function(event)
    {
         var arrowHeight=$(this).val();

         var ctaID=$(this).attr('id');

         var ctaNumber=ctaID.match(/arrow(.+)Height/);
         
         emailFrame.find(".arrow"+ctaNumber[1]).attr({'height':arrowHeight});
    });

//-------------------------------Main Image------------------------------------//


    //Change main image
    function changeBG(input,imageNumber) 
    {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) { 

                emailFrame.find(".bgpic"+imageNumber).attr({src: e.target.result });                
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".mainBgImage").change(function(){
        var imgID=$(this).attr('id');

        var imgNumber=imgID.match(/mainBgImage(.+)/);

        var imageNumber=imgNumber[1];

        changeBG(this,imageNumber);
    });

    //main image width
    $('.mainWidth').keyup(function(event)
    {
        var mainWidth=$(this).val();

        var imgID=$(this).attr('id');

        var imgNumber=imgID.match(/mainWidth(.+)/);   
         
        emailFrame.find(".bgpic"+imgNumber[1]).attr({'width':mainWidth});
    });

    //main image height
    $('.mainHeight').keyup(function(event)
    {
        var mainHeight=$(this).val();

        var imgID=$(this).attr('id');

        var imgNumber=imgID.match(/mainHeight(.+)/);   
         
         emailFrame.find(".bgpic"+imgNumber[1]).attr({'height':mainHeight});
    });

    //main image alt text
    $('.mainAlt').keyup(function(event)
    {
        var mainAlt=$(this).val();

        var imgID=$(this).attr('id');

        var imgNumber=imgID.match(/mainAlt(.+)/);  
         
        emailFrame.find(".bgpic"+imgNumber[1]).attr({'alt':mainAlt});
    });


//-------------------------------Text------------------------------------//

    //change creative text
    $('.crText').keyup(function(event)
    {
        var crText=$(this).val();

        var txtID=$(this).attr('id');

        var txtNumber=txtID.match(/crText(.+)/);
         
        emailFrame.find(".midsize"+txtNumber[1]).html(crText);
    });

    //change creative text font color
    $('.crFontColor').change(function(event)
    {
        var crFontColor=$(this).val();

        var txtID=$(this).attr('id');

        var txtNumber=txtID.match(/crFontColor(.+)/);
         
        emailFrame.find(".midsize"+txtNumber[1]).css({'color':'#'+crFontColor});
    });

    //change creative text fontsize
    $('.crFontSize').change(function(event)
    {
        var crFontSize=$(this).val();

        var txtID=$(this).attr('id');

        var txtNumber=txtID.match(/crFontSize(.+)/);
         
        emailFrame.find(".midsize"+txtNumber[1]).css({'font-size':crFontSize});
    });


//-------------------------------GET CODE------------------------------------//

    //normal copy code to textarea 
    // $('#gcbtn').click(function(event){ 
    //     var emailerStyle=emailFrame.find("head").html();
    //     var emailerCode = emailFrame.find("body").html();
      
    //     $('#mailCode').css({'display':'block'});
    //     $('#mailCode').text(emailerStyle+emailerCode);

    // });

    //zclip copy code
        var count=0;
        function zclipHack(){
            $("#gcbtn").zclip({
                path:"assets/zcb/ZeroClipboard.swf",
                copy:function(){return (emailFrame.find("head").html()+emailFrame.find("body").html());}
            });
        }

        $('#gcbtn').click(function(){
            zclipHack();
        }); 

        zclipHack();


   
});

$(document).ready(function () {	

	





//-------------------------------CTA 2------------------------------------//    


    //change cta2 background
    // $('#cta2BG').change(function(event)
    // {
    //      var cta2BGColor=$('#cta2BG').val();
         
    //      emailFrame.find(".cta2Table").attr({'bgcolor':'#'+cta2BGColor});
    // });

    //change cta2 fontsize
    // $('#cta2FontSize').change(function(event)
    // {
    //      var cta2FontSize=$('#cta2FontSize').val();
         
    //      emailFrame.find(".cta2").css({'font-size':cta2FontSize});
    // });

    //change cta2 Text
    // $('#cta2Text').keyup(function(event)
    // {
    //      var cta2Text=$('#cta2Text').val();
         
    //      emailFrame.find(".cta2").html(cta2Text);
    // });

    //change cta2 font color
    // $('#cta2FontColor').change(function(event)
    // {
    //      var cta2FontColor=$('#cta2FontColor').val();
         
    //      emailFrame.find(".cta2").css({'color':'#'+cta2FontColor});
    // });

    //Change arrow2 image
    // function changeArrow2(input) 
    // {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();

    //         reader.onload = function (e) {                
    //             emailFrame.find(".arrow2").attr({src: e.target.result });                
    //         }

    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }
    // $("#arrow2Image").change(function(){
    //     changeArrow2(this);
    // });


    //arrow2 image width
    // $('#arrow2Width').keyup(function(event)
    // {
    //      var arrow2Width=$('#arrow2Width').val();
         
    //      emailFrame.find(".arrow2").attr({'width':arrow2Width});
    // });

    //arrow2 image height
    // $('#arrow2Height').keyup(function(event)
    // {
    //      var arrow2Height=$('#arrow2Height').val();
         
    //      emailFrame.find(".arrow2").attr({'height':arrow2Height});
    // });










});
