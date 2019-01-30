function $ (id) {
    return document.getElementById(id);
}

dragula([$('panel'), $('monday'), $('tuesday'), $('wednesday'), $('thursday'), $('friday'), $('saturday'), $('sunday')], { 
    moves: function (el, source, handle, sibling) {
 	if (el.classList.contains('no-drag')) {
 	    return false;
 	}
 	else 
 	    return true;
    }
});


