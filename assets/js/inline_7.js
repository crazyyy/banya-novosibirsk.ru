 $(document).ready(function() { $('#calculator1-callback-file').filer({ showThumbs: true, theme: '', captions: { button: '<img src="/static/alterair/img/menu_icons/arrow.png" class="padding-5 padding-right-10"> ЗАГРУЗИТЬ', feedback: "", feedback2: "", drop: "Drop file here to Upload", removeConfirmation: "Are you sure you want to remove this file?", errors: { filesLimit: "Only to be uploaded.", filesType: "Only Images are allowed to be uploaded.", filesSize: " Please upload file up to eMaxSize MB.", filesSizeAll: "Files you've choo MB.", folderUpload: "You are not allowed to upload folders." } }, templates: { box: '<ul class="jFiler-items-list"></ul>', item: '<li class="jFiler-item"><span class="jFiler-item-title" title="{{fi-name}}">{{fi-name | limitTo:30}}</span><a class="icon-jfi-trash jFiler-item-trash-action"><i class="fa fa-times" aria-hidden="true"></i></a></li>', itemAppend: '<li class="jFiler-item"><div class="jFiler-item-container"><div class="jFiler-item-inner"><div class="jFiler-item-icon pull-left"></div><div class="jFiler-item-info pull-left"><div class="jFiler-item-title">{{fi-name | limitTo:35}}</div><div class="jFiler-item-others"><span>size: {{fi-size2}}</span><span>type: {{fi-extension}}</span><span class="jFiler-item-status"></span></div><div class="jFiler-item-assets"><ul class="list-inline"><li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li></ul></div></div></div></div></li>', progressBar: '<div class="bar"></div>', itemAppendToEnd: true, removeConfirmation: false, canvasImage: true, _selectors: { list: '.jFiler-items-list', item: '.jFiler-item', progressBar: '.bar', remove: '.jFiler-item-trash-action' } } }); }); 