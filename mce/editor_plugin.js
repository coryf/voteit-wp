(function() {
  tinymce.create('tinymce.plugins.voteit', {
    init : function(ed, url) {
      ed.addCommand('voteit_dialog', function() {
        ed.windowManager.open({
          title: "Hello",
          file: url + "/dialog.php",
          width: 320,
          height: 124, 
          inline: 1
        });
      });
      ed.addButton('voteit', {
        title: 'VoteIt',
        cmd: 'voteit_dialog',
        image: url + "/img/icon.png"
      });
    },
    getInfo : function() {
      return {
        longname : 'VoteIt Embed Dialog',
        author : 'VoteIt',
        authorurl : 'http://voteit.com',
        infourl : '',
        version : "1.0"
      };
    }
  });
  tinymce.PluginManager.add('voteit', tinymce.plugins.voteit);
})();
