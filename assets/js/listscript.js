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


$(".adduser").click(function(){
	$(this).closest("li").siblings().find("#adduseredit").slideUp('slow');
    $(this).closest("li").find("#adduseredit").toggle("slow");
})

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

// $("#memberlist input[type=checkbox]").change(function(){
// 	if($(this).is(":checked")) {
// 		$(".mdeluser").css("display","inline");
// 	}else{
// 		$(".mdeluser").css("display","none");
// 	}
	
// })


$("#listcheckall").change(function(){
$(".lisinglecheck").prop('checked', $(this).prop("checked"));
});



var memberlist = $('#memberlist').dataTable({
    "dom": 'T<"clear">lfrtip',
    "tableTools": {
        "sSwfPath": "datatables/tools/TableTools-master/swf/copy_csv_xls_pdf.swf",
        "aButtons": [ "copy", "print", "xls", "pdf" ]
    },
    "oLanguage": {
        "sSearch": ''
    }

});          

// search att added for datatable
$('.dataTables_filter input').attr("placeholder", "Search");


$("#editnotifybtn").click(function(){
    $( "#editnotifyinput" ).prop( "disabled", false );
    $( "#editnotifyinput" ).css( "border", "1px solid #52BAD5" );
})

});

// edit subscribers details popup
function editsubscriberdetails(email,fname,lname){
 $("input[name='email']").val(email);
 $("input[name='fname']").val(fname);
 $("input[name='lname']").val(lname);
}

// check all condition
function checkChecked() {
    var anyBoxesChecked = false;
    
    $('.checklistclass input[type="checkbox"]').each(function() {
        if ($(this).is(":checked")) {
            anyBoxesChecked = true;
        }
    });
 
    if (anyBoxesChecked == false) {
      //Do something
      $(".mdeluser").css("display","none");
    }else{
      $(".mdeluser").css("display","inline");
    } 
}