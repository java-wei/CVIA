var tagCount = 0;
var tagArray = [];
var tagImportance = [];

$("#LoginButton").click(function() {
  $("#loginBox").fadeIn("slow");
  $("#loginBox").css("z-index", "5");
  $("#blockMask").fadeIn("slow");
  $("#blockMask").css("display", "block");
});

$("#RegisterButton").click(function() {
  $("#registerBox").fadeIn("slow");
  $("#registerBox").css("z-index", "5");
  $("#blockMask").fadeIn("slow");
  $("#blockMask").css("display", "block");
});

$("#UploadJobButton").click(function() {
  $("#postJobBox").fadeIn("slow");
  $("#postJobBox").css("z-index", "5");
  $("#blockMask").fadeIn("slow");
  $("#blockMask").css("display", "block");
});

$("#uploadDescriptionButton").click(function() {
  $("#myJob").trigger('click');
});

$(".UploadCVButton").click(function() {
  $("#myFile").trigger('click');
});

$("#loginSubmitButton").click(function() {
  $("#loginBox").fadeOut("slow");
  $("#blockMask").fadeOut("slow");
});

$("#registerSubmitButton").click(function() {
  $("#registerBox").fadeOut("slow");
  $("#blockMask").fadeOut("slow");
});

$("#jobSubmitButton").click(function() {
  $("#postJobBox").fadeOut("slow");
  $("#blockMask").fadeOut("slow");

  //$.post('test.php', {variable: "hellp"});
  document.cookie = "variable="+"askdhfkjashdfjklashf";
});

$("#LogoutButton").click(function() {
  window.location.href='../controller/logout.php';
});

$(".cancelButton").click(function() {
  $("#loginBox").fadeOut("slow");
  $("#blockMask").fadeOut("slow");
  $("#postJobBox").fadeOut("slow");
  $("#registerBox").fadeOut("slow");
});


$("#checkRankingButton").click(function() {
  if(!$("#rankPane").is(':visible')) {
    $("#rankPane").fadeIn("fast");
    $("#checkRankingButton").text("Hide Ranking");
  } else {
    $("#rankPane").fadeOut("fast");
    $("#checkRankingButton").text("Check Ranking");
  }
})

$("#addKeywordButton").click(function() {
  var tag = $("#tagInputBox").val();
  $("#tagInputBox").val("");
  var importance = $("#importanceSelect").val();
  $("#importanceSelect").val("2");

  if (tag != "") {
    tagCount = tagCount + 1;
    tagArray.push(tag);
    tagImportance.push(importance);

    var tagAreaheight = $("#tagArea").map(function ()
  {
    return $(this).height();
  }).get();

  if (tagAreaheight >= 280) {
    $("#addKeywordButton").attr("disabled", true);
  } else {
    $("#addKeywordButton").attr("disabled", false);
  }

  if (importance == 3) {
    $("#tagArea").append("<div class=\"tag\"><p style=\"background-color:rgb(38, 144, 219);\">" + tag + "</p></div>");
  } else if (importance == 2) {
    $("#tagArea").append("<div class=\"tag\"><p>" + tag + "</p></div>");
  } else if (importance == 1) {
    $("#tagArea").append("<div class=\"tag\"><p style=\"background-color:rgb(5, 41, 90);\">" + tag + "</p></div>");
  }    
  }
})