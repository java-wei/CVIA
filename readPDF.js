/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var tika = require('tika');

var options = {

	// Hint the content-type. This is optional but would help Tika choose a parser in some cases.
	contentType: 'application/pdf'
};

tika.text('CVs/LinkedIn/DesmondLim.pdf', options, function(err, text) {
	console.log(text);
});
