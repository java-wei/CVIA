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

  $("#UploadCVButton").click(function() {
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
function pdf2txt(){
        var data = document.getElementById("myJob").files[0].name;
        var complete = 0;
     console.assert( data  instanceof ArrayBuffer  || typeof data == 'string' );
     PDFJS.getDocument( data ).then( function(pdf) {
     var div = document.getElementById('viewer');

     var total = pdf.numPages;
     var layers = {};        
     for (i = 1; i <= total; i++){
        pdf.getPage(i).then( function(page){
        var n = page.pageNumber;
        page.getTextContent().then( function(textContent){
          if( null != textContent.bidiTexts ){
            var page_text = "";
            var last_block = null;
            for( var k = 0; k < textContent.bidiTexts.length; k++ ){
                var block = textContent.bidiTexts[k];
                if( last_block != null && last_block.str[last_block.str.length-1] != ' '){
                    if( block.x < last_block.x )
                        page_text += "\r\n"; 
                    else if ( last_block.y != block.y && ( last_block.str.match(/^(\s?[a-zA-Z])$|^(.+\s[a-zA-Z])$/) == null ))
                        page_text += ' ';
                }
                page_text += block.str;
                last_block = block;
            }

            textContent != null && console.log("page " + n + " finished."); //" content: \n" + page_text);
            layers[n] =  page_text + "\n\n";
          }
          ++ complete;
          if (complete == total){
            window.setTimeout(function(){
              var full_text = "";
              var num_pages = Object.keys(layers).length;
              for( var j = 1; j <= num_pages; j++)
                  full_text += layers[j] ;
              
            }, 1000);              
          }
        }); // end  of page.getTextContent().then
      }); // end of page.then
    } // of for
  });
document.getElementById("demo").innerHTML = full_text;
 } // end of pdfToText()