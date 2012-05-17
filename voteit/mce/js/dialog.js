var VoteItDialog = {
  init : function() {
    var f = document.forms[0];

    // Get the selected contents as text and place it in the input
    f.url.value = tinyMCEPopup.editor.selection.getContent({format : 'text'});
  },

  insert : function() {
    var url = document.forms[0].url.value;
    var matches = null;
    if(matches = url.match(/voteit\.com\/v\/([0-9a-zA-Z]+)/)) {
      var embedUrl = 'https://www.voteit.com/v/'+matches[1]+'/embed';
      var code = '<iframe src="'+embedUrl+'" scrolling="no" width="320" height="360" style="border:none;"></iframe>';
      tinyMCEPopup.editor.execCommand('mceInsertContent', false, code);
      tinyMCEPopup.close();
    }
    else {
      this.error();
    }
  },

  error : function() {
    document.getElementById("error").style.display = "block";
  }
};

tinyMCEPopup.onInit.add(VoteItDialog.init, VoteItDialog);
