$(document).ready(function(){
	// 


$('#importcsv').ezdz();

var defaults = {
className: '',
text:  'Drop a file',
previewImage:  true,
value: null,
classes: {
main:  'ezdz-dropzone',
enter: 'ezdz-enter',
reject:'ezdz-reject',
accept:'ezdz-accept'
},
validators: { // image validator
maxSize:   null,
width: null,
maxWidth:  null,
minWidth:  null,
height:null,
maxHeight: null,
minHeight: null
},
init:   function() {},
enter:  function() {},
leave:  function() {},
reject: function() {},
accept: function() {},
format: function(filename) {
return filename;
}
};


// $(".adduser").click(function(){
// 	$(this).closest("li").siblings().find("#adduseredit").slideUp('slow');
//     $(this).closest("li").find("#adduseredit").toggle("slow");
// })





$(".cancel").click(function(){
   $(this).closest("li").find("#adduseredit").toggle("slow");
})


$(".madduser").click(function(){
$("#madduseredit").toggle("slow");
$("#mimportbox").css("display","none");
return false;
})


$(".mimportbtn").click(function(){
$("#mimportbox").toggle("slow");
$("#madduseredit").css("display","none");
return false;
})



$("#mcancel").click(function(){
$("#madduseredit").toggle("slow");
return false;
})

$("#importform #radioList1").click(function(){
$(".listimport").toggle("slow");
$(".manualimport").css("display","none");

})
$("#importform #radioList2").click(function(){
$(".manualimport").toggle("slow");
$(".listimport").css("display","none");
})



$("#icancel").click(function(){
$("#importform").toggle("slow");
return false;
})

$("#memberlist input[type=checkbox]").change(function(){
	$(".mdeluser").toggle();
})

$("#listcheckall").change(function(){
$(".lisinglecheck").prop('checked', $(this).prop("checked"));
});



// var memberlist = $('#memberlist').dataTable({
//     "dom": 'T<"clear">lfrtip',
//     "tableTools": {
//         "sSwfPath": "datatables/tools/TableTools-master/swf/copy_csv_xls_pdf.swf",
//         "aButtons": [ "copy", "print", "xls", "pdf" ]
//     },
//     "oLanguage": {
//         "sSearch": ''
//     }

// });          

// $.ajax({
//    dataType: 'JSON',
//    url: 'listdata.json',
//    async: false,
//    success: function(json) {
//       for (hash in json) {
//            for (i = 0; i < json[hash].length; i++) {
//                   memberlist.fnAddData([hash, "zfgv", json[hash][i][1]]);
//             }
//        }
//    }
    
// });

$('.dataTables_filter input').attr("placeholder", "Search");

$("#editnotifybtn").click(function(){
    $( "#editnotifyinput" ).prop( "disabled", false );
    $( "#editnotifyinput" ).css( "border", "1px solid #52BAD5" );
})




});



function editsubscriberdetails(email,fname,lname){
 $("input[name='email']").val(email);
 $("input[name='fname']").val(fname);
 $("input[name='lname']").val(lname);
}



function adduseredit(){
	 $.fn.addusereditfn();
}

$.fn.addusereditfn = function(e) { // has to be defined as a function, does not need to be inside a nested document ready function
    $(event.target).closest("li").siblings().find("#adduseredit").slideUp('slow');
    $(event.target).closest("li").find("#adduseredit").toggle("slow");
};

document.addEventListener('click', function(e) {
    e = e || window.event;
    var target = e.target || e.srcElement,
        text = target.textContent ;   
}, false);


function morelink(){
	 $.fn.morelinkfn();
}

$.fn.morelinkfn = function(e) { // has to be defined as a function, does not need to be inside a nested document ready function
    $(event.target).closest("li").siblings().find(".listmetaaction").slideUp('slow');
    $(event.target).closest("li").find(".listmetaaction").toggle("slow");
};

