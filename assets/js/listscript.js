$(document).ready(function(){
	// 
$('input[type="file"]').ezdz();

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

// 
$(".adduser").click(function(){
    $(this).closest("li").siblings().find("#adduseredit").slideUp('slow');
    $(this).closest("li").find("#adduseredit").toggle("slow");
})

$(".cancel").click(function(){
   $(this).closest("li").find("#adduseredit").toggle("slow");
})


$(".madduser").click(function(){
$("#madduseredit").toggle("slow");
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



$('#memberlist').dataTable({
    "dom": 'T<"clear">lfrtip',
    "tableTools": {
        "sSwfPath": "datatables/tools/TableTools-master/swf/copy_csv_xls_pdf.swf",
        "aButtons": [ "copy", "print", "xls", "pdf" ]
    },
    "oLanguage": {
        "sSearch": ''
    }
});          

$('.dataTables_filter input').attr("placeholder", "Search");


 
});

