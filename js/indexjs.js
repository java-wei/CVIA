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
});

$("#LogoutButton").click(function() {
  window.location.href='logout.php';
});

$(".cancelButton").click(function() {
  $("#loginBox").fadeOut("slow");
  $("#blockMask").fadeOut("slow");
  $("#postJobBox").fadeOut("slow");
  $("#registerBox").fadeOut("slow");
});

function myFunctionCV(){
  var x = document.getElementById("myFile");
  var txt = "";
  if ('files' in x) {
      if (x.files.length == 0) {
          txt = "Select one or more files.";
      } else {
          for (var i = 0; i < x.files.length; i++) {
              txt += "<br><strong>" + (i+1) + ". file</strong><br>";
              var file = x.files[i];
              if ('name' in file) {
                  txt += "name: " + file.name + "<br>";
              }
              if ('size' in file) {
                  txt += "size: " + file.size + " bytes <br>";
              }
          }
      }
  } 
  else {
      if (x.value == "") {
          txt += "Select one or more files.";
      } else {
          txt += "The files property is not supported by your browser!";
          txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
      }
  }
  document.getElementById("demo").innerHTML = txt;
}

function myFunctionJob(){
  var x = document.getElementById("myJob");
  var txt = "";
  if ('files' in x) {
      if (x.files.length == 0) {
          txt = "Select one or more files.";
      } else {
          for (var i = 0; i < x.files.length; i++) {
              txt += "<br><strong>" + (i+1) + ". file</strong><br>";
              var file = x.files[i];
              if ('name' in file) {
                  txt += "name: " + file.name + "<br>";
              }
              if ('size' in file) {
                  txt += "size: " + file.size + " bytes <br>";
              }
          }
      }
  } 
  else {
      if (x.value == "") {
          txt += "Select one or more files.";
      } else {
          txt += "The files property is not supported by your browser!";
          txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
      }
  }
  document.getElementById("demo").innerHTML = txt;
}

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

  if (importance == 1) {
    $("#tagArea").append("<div class=\"tag\"><p style=\"background-color:rgb(38, 144, 219);\">" + tag + "</p></div>");
  } else if (importance == 2) {
    $("#tagArea").append("<div class=\"tag\"><p>" + tag + "</p></div>");
  } else if (importance == 3) {
    $("#tagArea").append("<div class=\"tag\"><p style=\"background-color:rgb(5, 41, 90);\">" + tag + "</p></div>");
  }    
  }
})