<script type="text/javascript" src="<?php echo $this->webroot?>js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
    tinyMCE.init({
       width : "598",
        mode : "textareas",
        document_base_url: "http://localhost",
        remove_script_host : false,
        theme : "advanced",
        plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups, media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking, xhtmlxtras,template",
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft, justifycenter,justifyright,justifyfull,|,cut,copy,paste,pastetext,pasteword,print",
        //theme_advanced_buttons2 : "search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|, link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime",
        //theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,iespell,media", 
        //theme_advanced_buttons4 : "moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del, ins,attribs,|,visualchars,nonbreaking,template,pagebreak,|,forecolor,advhr",
        //theme_advanced_buttons5 : "styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
      theme_advanced_font_sizes : '8px=8px,9px=9px,10px=10px,11px=11px,12px=12px,13px=13px, 15px=15px',
        font_size_style_values :  "8pt,9pt,10pt,11pt,12pt,14pt,15pt",
        theme_advanced_resizing : true,

        //Mad File Manager
        
        relative_urls : false,
        file_browser_callback : MadFileBrowser
    });
    
    function MadFileBrowser(field_name, url, type, win) {
      tinyMCE.activeEditor.windowManager.open({
          file : "127.0.0.1/castelli/js/mfm.php?field=" + field_name + "&url=" + url + "",
          title : 'File Manager',
          width : 640,
          height : 650,
          resizable : "no",
          inline : "yes",
          close_previous : "no"
      }, {
          window : win,
          input : field_name
      });
      return false;
    }
</script>
